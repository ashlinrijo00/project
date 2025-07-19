<?php

use App\Http\Controllers\MemberAuthController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;

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

Route::get('/send-test-mail', function () {
    Mail::to('your-email@example.com')->send(new TestMail());
    return 'Test email sent!';
});

Route::get('/contact', [ContactController::class, 'show']);
Route::post('/contact', [ContactController::class, 'submit']);
