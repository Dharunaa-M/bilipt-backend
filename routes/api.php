<?php
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProductController;

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:api')->group(function () {
    Route::get('/me', [AuthController::class, 'me']);
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::post('/refresh', [AuthController::class, 'refresh']);
    Route::post('/customer', [CustomerController::class, 'insertCustomer']);
    Route::put('/customers/{id}', [CustomerController::class, 'update']); // Update
    Route::post('/products', [ProductController::class, 'store']); // Insert
    Route::put('/products/{id}', [ProductController::class, 'update']); // Update
});