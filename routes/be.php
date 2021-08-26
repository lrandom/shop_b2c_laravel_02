<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserControlelr;

Route::prefix('/admin')->group(function () {
    Route::prefix('/user')->group(function () {
        Route::get('/',[UserControlelr::class,'list'])->name('admin.user.list');
        Route::get('/add', [UserControlelr::class, 'add'])->name('admin.user.add');
        Route::get('/edit/{id}', [UserControlelr::class, 'edit'])->name('admin.user.edit');
        Route::post('/edit/{id}', [UserControlelr::class, 'doEdit'])->name('admin.user.doEdit');
        Route::get('/delete/{id}', [UserControlelr::class, 'delete'])->name('admin.user.delete');
    });
});
?>
