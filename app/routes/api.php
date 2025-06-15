<?php

use App\Http\Controllers\Api\PlanController;
use App\Http\Controllers\Api\SubscriptionController;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Http\Request;

Route::get('/plans', [PlanController::class, 'index']);
Route::post('/subscribe', [SubscriptionController::class, 'store'])->middleware('auth:sanctum');
Route::get('/me/subscription', [SubscriptionController::class, 'show'])->middleware('auth:sanctum');


Route::post('/login', function (Request $request) {
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    $user = User::where('email', $request->email)->first();

    if (! $user || ! Hash::check($request->password, $user->password)) {
        return response()->json(['message' => 'Invalid credentials'], 401);
    }

    return response()->json([
        'token' => $request->user()->createToken('api-token')->plainTextToken,
    ]);
});