<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CountryLookupController;

Route::view('/', 'portal')->name('portal.home');
Route::get('/api/country-lookup', CountryLookupController::class)->name('api.country-lookup');
