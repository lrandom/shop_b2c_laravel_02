<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FeController;
use App\Http\Controllers\ProductController;


Route::get('/', [FeController::class, 'home']);
Route::get('/product/detail/{id}', [ProductController::class, 'detail'])->name('fe.product.detail');
?>
