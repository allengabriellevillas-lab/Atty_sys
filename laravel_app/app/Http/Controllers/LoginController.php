<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;

class LoginController extends Controller
{
    public function show(): View
    {
        return view('auth.login');
    }

    public function login(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'string'],
        ]);

        // PHP recognizes bcrypt hashes with the $2y$ prefix. Older systems
        // may store the equivalent $2a$ prefix, which Laravel's algorithm
        // verification rejects, so normalize that prefix before attempting
        // authentication. The underlying bcrypt hash remains unchanged.
        $user = User::query()->where('email', $credentials['email'])->first();
        if ($user && str_starts_with($user->getAuthPassword(), '$2a$')) {
            $user->forceFill([
                'password' => '$2y$'.substr($user->getAuthPassword(), 4),
            ])->save();
        }

        try {
            $authenticated = Auth::attempt($credentials, $request->boolean('remember'));
        } catch (\RuntimeException $exception) {
            // A legacy or manually imported password may use a different hash
            // format. Keep that data mismatch from becoming a 500 page, and
            // require an administrator to reset it using Laravel's hasher.
            if (! str_contains($exception->getMessage(), 'does not use the Bcrypt algorithm')) {
                throw $exception;
            }

            throw ValidationException::withMessages([
                'email' => 'This account’s saved password needs to be reset. Please contact your team administrator.',
            ]);
        }

        if (! $authenticated) {
            throw ValidationException::withMessages([
                'email' => 'The provided credentials do not match our records.',
            ]);
        }

        $request->session()->regenerate();

        return redirect()->intended(route('portal.home'));
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}
