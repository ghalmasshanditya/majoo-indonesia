<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProdukController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\User\homeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [homeController::class, 'index'])->name('utama');
Route::get('/check-out/{id}', [ProdukController::class, 'fillCheckout'])->name('check-out');
Route::post('/check-out/process', [OrderController::class, 'store'])->name('check-out.process');


Route::middleware(['auth'])->group(function () {
    Route::get('/product', [ProdukController::class, 'index'])->name('produk');
    Route::post('/product/insert', [ProdukController::class, 'create']);
    Route::get('/product/delete/{id}', [ProdukController::class, 'destroy']);
    Route::post('/product/update/{id}', [ProdukController::class, 'update']);

    Route::get('/orders', [OrderController::class, 'index'])->name('orders');
});
require __DIR__ . '/auth.php';
