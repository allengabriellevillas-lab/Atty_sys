<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Giggsey\Locale\Locale;
use libphonenumber\NumberParseException;
use libphonenumber\PhoneNumber;
use libphonenumber\PhoneNumberFormat;
use libphonenumber\PhoneNumberType;
use libphonenumber\PhoneNumberUtil;

class CountryLookupController extends Controller
{
    public function __invoke(Request $request): JsonResponse
    {
        $validated = Validator::make($request->query(), [
            'q' => ['required', 'string', 'max:80'],
        ])->validate();

        $query = trim($validated['q']);
        $util = PhoneNumberUtil::getInstance();
        $countries = $this->countries($util);
        $normalizedQuery = mb_strtolower($query);

        $exactNames = array_values(array_filter($countries, fn (array $country) => mb_strtolower($country['name']) === $normalizedQuery));
        if ($exactNames) {
            return $this->result('country', 'Country name match.', $exactNames);
        }

        $partialNames = array_values(array_filter($countries, fn (array $country) => str_contains(mb_strtolower($country['name']), $normalizedQuery)));
        if (! $this->looksLikePhone($query) && $partialNames) {
            return $this->result('suggestion', 'Partial country-name suggestions; select a country to continue.', array_slice($partialNames, 0, 8));
        }

        if (! $this->looksLikePhone($query)) {
            return $this->result('invalid', 'Enter a country name or a phone number containing only digits and phone formatting characters.', []);
        }

        $digits = preg_replace('/\D/', '', $query) ?? '';
        $international = str_starts_with($query, '+') || str_starts_with($digits, '00');
        $normalized = str_starts_with($digits, '00') ? '+'.substr($digits, 2) : (str_starts_with($query, '+') ? '+'.$digits : $digits);

        $compactQuery = preg_replace('/[\s().-]/', '', $query) ?? $query;
        if (preg_match('/^(?:\+|00)?\d{1,3}$/', $compactQuery)) {
            $code = preg_replace('/^(?:\+|00)/', '', $compactQuery) ?? $compactQuery;
            $matches = array_values(array_filter($countries, fn (array $country) => (string) $country['callingCodes'][0] === $code));
            if ($matches) {
                return $this->result('calling-code', count($matches) > 1 ? 'This calling code is shared; choose a country candidate.' : 'Exact calling-code match.', $matches);
            }
        }

        if (strlen($digits) < 7) {
            $dialDigits = str_starts_with($digits, '00') ? substr($digits, 2) : $digits;
            $codeCandidates = array_values(array_filter($countries, fn (array $country) => str_starts_with($country['callingCodes'][0], $dialDigits) || str_starts_with($dialDigits, $country['callingCodes'][0])));
            return $this->result('incomplete', 'Incomplete number. Enter more digits; these are only calling-code suggestions.', array_slice($codeCandidates, 0, 8));
        }

        if ($international) {
            try {
                $number = $util->parse($normalized, null);
            } catch (NumberParseException) {
                return $this->result('invalid', 'This number has an invalid or unsupported international calling code or format.', []);
            }

            $country = $this->countryForNumber($util, $number, $countries);
            $possible = $util->isPossibleNumber($number);
            $valid = $util->isValidNumber($number);
            if (! $possible || ! $country) {
                return $this->result('invalid', 'This international number is not possible under the available numbering metadata.', []);
            }

            return $this->result(
                $valid ? 'confirmed' : 'possible',
                $valid ? 'Valid international number format; the country is identified by its numbering plan.' : 'Possible international number format; the number is not confirmed as valid.',
                [$country],
            );
        }

        // A Philippine domestic mobile pattern is checked before broad local-number candidates.
        if (preg_match('/^09\d{9}$/', $digits) && isset($countries['PH'])) {
            try {
                $philippineNumber = $util->parse($query, 'PH');
                if ($util->isValidNumberForRegion($philippineNumber, 'PH') && $util->getNumberType($philippineNumber) === PhoneNumberType::MOBILE) {
                    $philippines = $countries['PH'];
                    $phoneDetails = [
                        'input' => $query,
                        'internationalFormat' => $util->format($philippineNumber, PhoneNumberFormat::E164),
                        'type' => 'Mobile',
                    ];

                    return $this->result('recognized-ph', 'Recognized Philippine number format. Format validation does not confirm that the number is active or assigned.', [$philippines], $phoneDetails);
                }
            } catch (NumberParseException) {
                // Continue with other country plans when the Philippine plan rejects the input.
            }
        }

        $validMatches = [];
        $possibleMatches = [];
        foreach ($util->getSupportedRegions() as $region) {
            try {
                $number = $util->parse($query, $region);
            } catch (NumberParseException) {
                continue;
            }

            $country = $this->countryForNumber($util, $number, $countries);
            if (! $country) {
                continue;
            }

            if ($util->isValidNumberForRegion($number, $region)) {
                $validMatches[$country['iso2']] = $country;
            } elseif ($util->isPossibleNumber($number)) {
                $possibleMatches[$country['iso2']] = $country;
            }
        }

        if ($validMatches) {
            $matches = array_values($validMatches);
            usort($matches, fn (array $a, array $b) => strcmp($a['name'], $b['name']));
            $count = count($matches);
            $message = $count === 1
                ? 'Valid national number format; the country is identified by its numbering plan.'
                : ($count > 5
                    ? "This local number is valid under {$count} national numbering plans. Showing the first 5 alphabetically; add a +country calling code to narrow it down."
                    : 'This number is valid under multiple national numbering plans; add a +country calling code to narrow it down.');
            return $this->result($count > 1 ? 'ambiguous' : 'confirmed', $message, array_slice($matches, 0, 5));
        }

        if ($possibleMatches) {
            $matches = array_values($possibleMatches);
            usort($matches, fn (array $a, array $b) => strcmp($a['name'], $b['name']));
            $count = count($matches);
            $message = $count === 1
                ? 'The number length is possible for this country, but its national format is not confirmed. Add a calling code for certainty.'
                : ($count > 5
                    ? "The number length is possible in {$count} countries, but none is confirmed. Showing the first 5 alphabetically; add a +country calling code to narrow it down."
                    : 'The number length is possible in multiple countries, but none is confirmed. Add a +country calling code to narrow it down.');
            return $this->result($count > 1 ? 'ambiguous-possible' : 'possible', $message, array_slice($matches, 0, 5));
        }

        if (strlen($digits) < 11) {
            return $this->result('incomplete', 'This may be an incomplete or invalid local number. Enter more digits or add its +country calling code.', []);
        }

        return $this->result('invalid', 'No supported country numbering plan recognizes this local number. Try adding its +country calling code.', []);
    }

    private function countries(PhoneNumberUtil $util): array
    {
        $countries = [];
        foreach ($util->getSupportedRegions() as $region) {
            if ($region === '001') {
                continue;
            }

            $name = Locale::getDisplayRegion('en_'.$region, 'en') ?: $region;
            $countries[$region] = [
                'iso2' => $region,
                'name' => $name,
                'callingCodes' => [(string) $util->getCountryCodeForRegion($region)],
                'flag' => 'https://flagcdn.com/'.strtolower($region).'.svg',
                'timeZones' => array_map(fn (string $zone) => ['name' => $zone], \DateTimeZone::listIdentifiers(\DateTimeZone::PER_COUNTRY, $region)),
            ];
        }

        return $countries;
    }

    private function countryForNumber(PhoneNumberUtil $util, PhoneNumber $number, array $countries): ?array
    {
        $region = $util->getRegionCodeForNumber($number);
        return $region && isset($countries[$region]) ? $countries[$region] : null;
    }

    private function looksLikePhone(string $query): bool
    {
        return (bool) preg_match('/^\+?[\d\s().-]+$/u', $query);
    }

    private function result(string $kind, string $message, array $countries, ?array $phoneDetails = null): JsonResponse
    {
        return response()->json([
            'kind' => $kind,
            'message' => $message,
            'countries' => array_values($countries),
            'phoneDetails' => $phoneDetails,
        ]);
    }
}
