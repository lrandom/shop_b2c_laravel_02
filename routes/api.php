<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CartController;

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


Route::prefix('/v1')->group(function () {
    Route::middleware('auth:api')->get('/user', function (Request $request) {
        return $request->user();
    });
    Route::get('/home', [\App\Http\Controllers\Api\HomeController::class,
        'getHome']);
    Route::get('/products/{id}', [\App\Http\Controllersllers\Api\ProductController::class,
        'detail']);
    Route::post('/login', [\App\Http\Controllers\Api\AuthController::class, 'login']);
    Route::post('/signup', [\App\Http\Controllers\Api\AuthController::class, 'signup']);
    Route::middleware('auth:api')->post('/make-order', [\App\Http\Controllers\Api\OrderController::class, 'makeOrder']);
    Route::middleware('auth:api')->get('/my-orders', [\App\Http\Controllers\Api\OrderController::class, 'getMyOrders']);
    Route::middleware('auth:api')->put('/update-profile', [\App\Http\Controllers\Api\AuthController::class, 'updateProfile']);
});

Route::prefix('/cart')->group(function () {
    Route::get('/items', [CartController::class, 'getItems',
    ])->name('api.cart.items');
    Route::delete('/item/{id}', [CartController::class, 'deleteItemCart',
    ])->name('api.cart.delete_item');
    Route::delete('/items/delete', [CartController::class, 'clearAll',
    ])->name('api.cart.clear');
    Route::post('/items/{id}', [CartController::class, 'addItemToCart'])->name('api.cart.add');
    Route::put('/items/{id}/{quantity}', [CartController::class, 'updateItemQuantity'])->name('api.cart.update');
});

