<?php

use App\Http\Controllers\BukuController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\KategoriController;
use Illuminate\Support\Facades\Route;   // 

Route::get('/', function () {
    return view('app');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/page', function () {
    return view('page');
});

// Buku
Route::get('/buku', [BukuController::class, 'index']);
Route::get('/tambah-buku', [BukuController::class, 'create']);
Route::post('/simpan-buku', [BukuController::class, 'store']);

// Kategori
Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori.index');
Route::post('/kategori', [KategoriController::class, 'store'])->name('kategori.store');
