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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
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
