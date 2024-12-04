<?php

use App\Http\Controllers\AuthenticationAPIController;
use App\Http\Controllers\ProductAPIController;
use App\Http\Middleware\IsAdminAPI;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/get-products', [ProductAPIController::class, 'getProducts']);
Route::post('/create-product', [ProductAPIController::class, 'createProduct'])->middleware('auth:sanctum', IsAdminAPI::class);
Route::post('/update-product/{productId}', [ProductAPIController::class, 'updateProduct']);
Route::post('/delete-product/{productId}', [ProductAPIController::class, 'deleteProduct']);

Route::post('/register', [AuthenticationAPIController::class, 'register']);
Route::post('/login', [AuthenticationAPIController::class, 'login']);
Route::post('/logout', [AuthenticationAPIController::class, 'logout'])->middleware('auth:sanctum');
