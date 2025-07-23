<?php

use Illuminate\Support\Facades\Route;

// Example test route
Route::get('/ping', fn () => response()->json(['message' => 'pong']));
