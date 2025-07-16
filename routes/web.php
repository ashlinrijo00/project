<?php

use App\Http\Controllers\MemberAuthController;

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/login', [MemberAuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [MemberAuthController::class, 'login']);

Route::get('/register', [MemberAuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [MemberAuthController::class, 'register']);

Route::post('/logout', [MemberAuthController::class, 'logout'])->name('logout');

Route::get('/home', function () {
    return view('home');
})->middleware('auth');