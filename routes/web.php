<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/create-product', [ProductController::class, 'getCreateProductPage'])->name('getCreateProductPage');
Route::post('/create-product/create', [ProductController::class, 'createProduct'])->name('createProduct');
