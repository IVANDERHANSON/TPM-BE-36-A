<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProductController::class, 'getHome'])->name('getHome');
Route::get('/create-product', [ProductController::class, 'getCreateProductPage'])->name('getCreateProductPage');
Route::post('/create-product/create', [ProductController::class, 'createProduct'])->name('createProduct');
