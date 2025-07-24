<?php

use Illuminate\Support\Facades\Route;
use Modules\HomeUI\Http\Controllers\HomeUIController;

Route::middleware(['auth:sanctum'])->prefix('v1')->group(function () {
    Route::apiResource('homeuis', HomeUIController::class)->names('homeui');
});
