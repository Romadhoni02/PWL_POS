<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\StokController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LevelController;


    Route::get('/', [WelcomeController::class, 'index']);

Route::group(['prefix' => 'user'], function () {
    Route::get('/', [UserController::class, 'index']);          // menampilkan halaman awal user
    Route::post('/list', [UserController::class, 'list']);      // menampilkan data user dalam bentuk json untuk datatables
    Route::get('/create', [UserController::class, 'create']);   // menampilkan halaman form tambah user
    Route::post('/', [UserController::class, 'store']);         // menyimpan data user baru
    Route::get('/{id}', [UserController::class, 'show']);       // menampilkan detail user
    Route::get('/{id}/edit', [UserController::class, 'edit']);  // menampilkan halaman form edit user
    Route::put('/{id}', [UserController::class, 'update']);     // menyimpan perubahan data user
    Route::delete('/{id}', [UserController::class, 'destroy']);
});

Route::group(['prefix' => 'level'], function () {
    Route::get('/', [LevelController::class, 'index']);          // menampilkan halaman awal level
    Route::post('/list', [LevelController::class, 'list']);      // menampilkan data level dalam bentuk json untuk datatables
    Route::get('/create', [LevelController::class, 'create']);   // menampilkan halaman form tambah level
    Route::post('/', [LevelController::class, 'store']);         // menyimpan data level baru
    Route::get('/{id}', [LevelController::class, 'show']);       // menampilkan detail level
    Route::get('/{id}/edit', [LevelController::class, 'edit']);  // menampilkan halaman form edit level
    Route::put('/{id}', [LevelController::class, 'update']);     // menyimpan perubahan data level
    Route::delete('/{id}', [LevelController::class, 'destroy']);
});

Route::group(['prefix' => 'kategori'], function () {
    Route::get('/', [KategoriController::class, 'index']);          // Menampilkan halaman awal kategori
    Route::post('/list', [KategoriController::class, 'list']);      // Menampilkan data kategori dalam bentuk JSON untuk datatables
    Route::get('/create', [KategoriController::class, 'create']);   // Menampilkan halaman form tambah kategori
    Route::post('/', [KategoriController::class, 'store']);         // Menyimpan data kategori baru
    Route::get('/{id}', [KategoriController::class, 'show']);       // Menampilkan detail kategori
    Route::get('/{id}/edit', [KategoriController::class, 'edit']);  // Menampilkan halaman form edit kategori
    Route::put('/{id}', [KategoriController::class, 'update']);     // Menyimpan perubahan data kategori
    Route::delete('/{id}', [KategoriController::class, 'destroy']); // Menghapus data kategori
});

Route::group(['prefix' => 'barang'], function () {
    Route::get('/', [BarangController::class, 'index']);          // Menampilkan halaman awal Barang
    Route::post('/list', [BarangController::class, 'list']);      // Menampilkan data Barang dalam bentuk JSON untuk datatables
    Route::get('/create', [BarangController::class, 'create']);   // Menampilkan halaman form tambah Barang
    Route::post('/', [BarangController::class, 'store']);         // Menyimpan data Barang baru
    Route::get('/{id}', [BarangController::class, 'show']);       // Menampilkan detail Barang
    Route::get('/{id}/edit', [BarangController::class, 'edit']);  // Menampilkan halaman form edit Barang
    Route::put('/{id}', [BarangController::class, 'update']);     // Menyimpan perubahan data Barang
    Route::delete('/{id}', [BarangController::class, 'destroy']); // Menghapus data Barang
});

Route::group(['prefix' => 'stok'], function () {
    Route::get('/', [StokController::class, 'index']);          // Menampilkan halaman awal Stok
    Route::post('/list', [StokController::class, 'list']);      // Menampilkan data Stok dalam bentuk JSON untuk datatables
    Route::get('/create', [StokController::class, 'create']);   // Menampilkan halaman form tambah Stok
    Route::post('/', [StokController::class, 'store']);         // Menyimpan data Stok baru
    Route::get('/{id}', [StokController::class, 'show']);       // Menampilkan detail Stok
    Route::get('/{id}/edit', [StokController::class, 'edit']);  // Menampilkan halaman form edit Stok
    Route::put('/{id}', [StokController::class, 'update']);     // Menyimpan perubahan data Stok
    Route::delete('/{id}', [StokController::class, 'destroy']); // Menghapus data Stok
});

Route::group(['prefix' => 'transaksi'], function () {
    Route::get('/', [TransaksiController::class, 'index']);          // Menampilkan halaman awal Transaksi
    Route::post('/list', [TransaksiController::class, 'list']);      // Menampilkan data Transaksi dalam bentuk JSON untuk datatables
    Route::get('/create', [TransaksiController::class, 'create']);   // Menampilkan halaman form tambah Transaksi
    Route::post('/', [TransaksiController::class, 'store']);         // Menyimpan data Transaksi baru
    Route::get('/{id}', [TransaksiController::class, 'show']);       // Menampilkan detail Transaksi
    Route::get('/{id}/edit', [TransaksiController::class, 'edit']);  // Menampilkan halaman form edit Transaksi
    Route::put('/{id}', [TransaksiController::class, 'update']);     // Menyimpan perubahan data Transaksi
    Route::delete('/{id}', [TransaksiController::class, 'destroy']); // Menghapus data Transaksi
});