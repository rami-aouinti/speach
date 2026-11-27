<?php

use App\\Http\\Controllers\\Api\\CategoryController;
use App\\Http\\Controllers\\Api\\PostController;
use Illuminate\\Support\\Facades\\Route;

Route::get('/health', function () {
    return response()->json(['status' => 'ok', 'application' => config('app.name'), 'timestamp' => now()->toIso8601String()]);
});

Route::apiResource('categories', CategoryController::class)->only(['index', 'store', 'update', 'destroy']);
Route::apiResource('posts', PostController::class)->only(['store', 'update', 'destroy']);
