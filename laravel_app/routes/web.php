<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CountryLookupController;
use App\Http\Controllers\LoginController;

Route::middleware('guest')->group(function () {
    Route::get('/', [LoginController::class, 'show'])->name('login');
    Route::post('/login', [LoginController::class, 'login'])->name('login.store');
});

Route::middleware('auth')->group(function () {
    Route::view('/portal', 'portal')->name('portal.home');
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('/api/country-lookup', CountryLookupController::class)->name('api.country-lookup');
});
