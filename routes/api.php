<?php

use Illuminate\Support\Facades\Route;
use App\HTTP\Controllers\Api\ContactApiController;
use App\Http\Controllers\API\AuthController;

Route::get('/ping', fn () => response()->json(['message' => 'pong']));
Route::get('/friends', [ContactApiController::class, 'friends']);
Route::post('/login', [AuthController::class, 'uilogin']);