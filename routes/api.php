<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('/products', \App\Http\Controllers\ProductController::class);
Route::resource('/categories', \App\Http\Controllers\CategoryController::class);
Route::resource('/discounts', \App\Http\Controllers\DiscountController::class);
Route::resource('/users', \App\Http\Controllers\UserController::class);

Route::get('/new-anonymous', [\App\Http\Controllers\UserController::class, 'createNewAnonymous'])->name('new.anonymous');
Route::post('/user-cart/', [\App\Http\Controllers\OrderController::class, 'userCart'])->name('user.cart');
Route::get('/products-by-category/{alias}', [\App\Http\Controllers\ProductController::class, 'productsByCategory'])->name('products.by.category');
Route::get('/calculation', [\App\Http\Controllers\DiscountController::class, 'calculation'])->name('calculation');
