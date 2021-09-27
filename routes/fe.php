<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;

Route::get('/', [FeController::class, 'home']);
Route::get('/product/detail/{id}', [ProductController::class, 'detail'])->name('fe.product.detail');
Route::get('/category/{id}', [ProductController::class, 'category'])->name('fe.category');
Route::get('/cart', [CartController::class, 'index'])->name('fe.cart');
?>
