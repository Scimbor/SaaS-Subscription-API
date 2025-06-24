<?php

use App\Http\Controllers\Api\LoginController;
use App\Http\Controllers\Api\PlanController;
use App\Http\Controllers\Api\SubscriptionController;
use Illuminate\Support\Facades\Route;

Route::get('/plans', [PlanController::class, 'index']);
Route::post('/login', [LoginController::class, 'login']);
Route::middleware(['auth:sanctum', 'ensure.auth'])->group(function () {
    Route::get('/me/subscription', [SubscriptionController::class, 'show']);
    Route::post('/subscribe', [SubscriptionController::class, 'store']);
});
