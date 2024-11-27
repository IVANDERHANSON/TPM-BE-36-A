<?php

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::controller(ProductController::class)->group(function() {
    Route::get('/', 'getHome')->name('getHome');
    Route::get('/create-product', 'getCreateProductPage')->name('getCreateProductPage');
    Route::post('/create-product/create', 'createProduct')->name('createProduct');
    Route::get('/edit-product/{productId}', 'getEditProductPage')->name('getEditProductPage');
    Route::post('/edit-product/{productId}', 'editProduct')->name('editProduct');
    Route::post('/delete-product/{productId}', 'deleteProduct')->name('deleteProduct');
});

Route::controller(AuthenticationController::class)->group(function() {
    Route::get('/register', 'getRegister')->name('getRegister');
    Route::post('/register', 'register')->name('register');
    Route::get('/login', 'getLogin')->name('getLogin');
    Route::post('/login', 'login')->name('login');
    Route::post('/logout', 'logout')->name('logout');
});
