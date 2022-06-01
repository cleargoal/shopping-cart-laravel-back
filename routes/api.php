<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('/carts', \App\Http\Controllers\CartController::class);
Route::resource('/products', \App\Http\Controllers\ProductController::class);
Route::resource('/categories', \App\Http\Controllers\CategoryController::class);

Route::get('/new-anonymous', [\App\Http\Controllers\AnonymousController::class, 'store'])->name('new.anonymous');
Route::post('/user-cart/', [\App\Http\Controllers\CartController::class, 'anonymousCart'])->name('user.cart');
