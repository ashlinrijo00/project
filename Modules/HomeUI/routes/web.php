<?php

use Illuminate\Support\Facades\Route;
use Modules\HomeUI\Http\Controllers\HomeUIController;

Route::middleware(['auth', 'verified'])->group(function () {
    Route::resource('homeuis', HomeUIController::class)->names('homeui');
});

Route::get('/homeui', [HomeUIController::class, 'index']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');