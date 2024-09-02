<?php

use App\Http\Controllers\JenisController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\BarangMasukController;
use App\Http\Controllers\BarangKeluarController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

// Halaman login/logout
Route::get('/login', [LoginController::class, 'showLogin'])->name('login');
Route::post('/actionlogin', [LoginController::class,'actionLogin'])->name('actionLogin');
Route::post('/logout', [LoginController::class,'actionLogout'])->name('actionLogout');

Route::middleware('auth')->group(function () {
    // Halaman dashboard
    Route::get('/', [DashboardController::class, 'index']);

    // Halaman CRUD Jenis
    Route::get('/jenis', [JenisController::class, 'index']);
    Route::get('/jenis/tambah', [JenisController::class, 'create']);
    Route::post('/jenis/simpan', [JenisController::class, 'store']);
    Route::get('/jenis/{id}/edit', [JenisController::class, 'edit']);
    Route::post('/jenis/{id}/update', [JenisController::class, 'update']);

    // Halaman CRUD User
    Route::get('/user', [UserController::class, 'index']);
    Route::get('/user/tambah', [UserController::class, 'create']);
    Route::post('/user/simpan', [UserController::class, 'store']);
    Route::get('/user/{id}/edit', [UserController::class, 'edit']);
    Route::post('/user/{id}/update', [UserController::class, 'update']);
    Route::get('/user/{id}/hapus', [UserController::class, 'destroy']);

    // Halaman CRUD Barang
    Route::get('/barang', [BarangController::class, 'index']);
    Route::get('/barang/tambah', [BarangController::class, 'create']);
    Route::post('/barang/simpan', [BarangController::class, 'store']);
    Route::get('/barang/{id}/show', [BarangController::class, 'show']);
    Route::post('/barang/{id}/update', [BarangController::class, 'update']);
    Route::get('/barang/{id}/delete', [BarangController::class, 'destroy']);

    // Halaman CRUD Supplier
    Route::get('/supplier', [SupplierController::class, 'index']);
    Route::get('/supplier/tambah', [SupplierController::class, 'create']);
    Route::post('/supplier/simpan', [SupplierController::class, 'store']);
    Route::get('/supplier/{id}/edit', [SupplierController::class, 'edit']);
    Route::post('/supplier/{id}/update', [SupplierController::class, 'update']);
    Route::get('/supplier/{id}/hapus', [SupplierController::class, 'destroy']);

    // Halaman CRUD Barang Masuk
    Route::get('/barang_masuk', [BarangMasukController::class, 'index']);
    Route::get('/barang_masuk/tambah', [BarangMasukController::class, 'create']);
    Route::post('/barang_masuk/simpan', [BarangMasukController::class, 'store']);
    Route::get('/barang_masuk/{id}/show', [BarangController::class, 'show']);

    // Halaman CRUD Barang Keluar
    Route::get('/barang_keluar', [BarangKeluarController::class, 'index']);
    Route::get('/barang_keluar/tambah', [BarangKeluarController::class, 'create']);
    Route::post('/barang_keluar/simpan', [BarangKeluarController::class, 'store']);
});
