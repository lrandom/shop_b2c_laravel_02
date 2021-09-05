<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserControlelr;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\VariantController;
use App\Http\Controllers\Admin\VariantValueController;
use App\Http\Controllers\Admin\ProductController;

Route::prefix('/admin')->group(function () {
    Route::prefix('/user')->group(function () {
        Route::get('/', [UserControlelr::class, 'list'])->name('admin.user.list');
        Route::get('/add', [UserControlelr::class, 'add'])->name('admin.user.doAdd');
        Route::post('/add', [UserControlelr::class, 'doAdd'])->name('admin.user.add');
        Route::get('/edit/{id}', [UserControlelr::class, 'edit'])->name('admin.user.edit');
        Route::post('/edit/{id}', [UserControlelr::class, 'doEdit'])->name('admin.user.doEdit');
        Route::get('/delete/{id}', [UserControlelr::class, 'delete'])->name('admin.user.delete');
    });

    Route::prefix('/category')->group(function () {
        Route::get('/', [CategoryController::class, 'list'])->name('admin.category.list');
        Route::get('/add', [CategoryController::class, 'add'])->name('admin.category.doAdd');
        Route::post('/add', [CategoryController::class, 'doAdd'])->name('admin.category.add');
        Route::get('/edit/{id}', [CategoryController::class, 'edit'])->name('admin.category.edit');
        Route::post('/edit/{id}', [CategoryController::class, 'doEdit'])->name('admin.category.doEdit');
        Route::get('/delete/{id}', [CategoryController::class, 'delete'])->name('admin.category.delete');
    });

    Route::prefix('/variant')->group(function () {
        Route::get('/', [VariantController::class, 'list'])->name('admin.variant.list');
        Route::get('/add', [VariantController::class, 'add'])->name('admin.variant.doAdd');
        Route::post('/add', [VariantController::class, 'doAdd'])->name('admin.variant.add');
        Route::get('/edit/{id}', [VariantController::class, 'edit'])->name('admin.variant.edit');
        Route::post('/edit/{id}', [VariantController::class, 'doEdit'])->name('admin.variant.doEdit');
        Route::get('/delete/{id}', [VariantController::class, 'delete'])->name('admin.variant.delete');
    });

    Route::prefix('/variant_value')->group(function () {
        Route::get('/', [VariantValueController::class, 'list'])->name('admin.variant_value.list');
        Route::get('/add', [VariantValueController::class, 'add'])->name('admin.variant_value.doAdd');
        Route::post('/add', [VariantValueController::class, 'doAdd'])->name('admin.variant_value.add');
        Route::get('/edit/{id}', [VariantValueController::class, 'edit'])->name('admin.variant_value.edit');
        Route::post('/edit/{id}', [VariantValueController::class, 'doEdit'])->name('admin.variant_value.doEdit');
        Route::get('/delete/{id}', [VariantValueController::class, 'delete'])->name('admin.variant_value.delete');
    });

    Route::prefix('/product')->group(function () {
        Route::get('/', [ProductController::class, 'list'])->name('admin.product.list');
        Route::get('/add', [ProductController::class, 'add'])->name('admin.product.doAdd');
        Route::post('/add', [ProductController::class, 'doAdd'])->name('admin.product.add');
        Route::get('/edit/{id}', [ProductController::class, 'edit'])->name('admin.product.edit');
        Route::post('/edit/{id}', [ProductController::class, 'doEdit'])->name('admin.product.doEdit');
        Route::get('/delete/{id}', [ProductController::class, 'delete'])->name('admin.product.delete');
    });
});
?>
