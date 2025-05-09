<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TipeController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\CheckOutController;
use App\Http\Controllers\KeranjangController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [HomeController::class, 'index']);

Route::get('/produk', [ProdukController::class, 'index']);

Route::get('/detail', [DetailController::class, 'index']);

Route::get('/keranjang', [KeranjangController::class, 'index']);

Route::get('/checkout', [CheckOutController::class, 'index']);

Route::get('/barang', function() {
    return view('barang');
});

Route::get('/tipe', function() {
    return view('tipe');
});

Route::get('/tipe', [TipeController::class, 'index']);

Route::get('/barang', [BarangController::class, 'index']);

Route::get('/barang/create', [BarangController::class, 'create']);