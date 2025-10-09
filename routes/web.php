<?php

use App\Http\Controllers\Auth\UserController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\KategoriController;
use Illuminate\Support\Facades\Route;

Route::post('/login', [UserController::class, 'login'])->name('login.post');
Route::get('/login', [UserController::class, 'showLogin'])->name('login');

Route::get('/register', [UserController::class, 'showRegister'])->name('register');
Route::post('/register', [UserController::class, 'register'])->name('register.post');

Route::post('/logout', [UserController::class, 'logout'])->name('logout');
Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        return view('app');
    });

    Route::get('/home', function () {
        return view('home');
    });

    Route::get('/page', function () {
        return view('page');
    });

    // ======================
    // Buku
    // ======================
    Route::get('/buku', [BukuController::class, 'index'])->name('buku.index');
    Route::get('/tambah-buku', [BukuController::class, 'create'])->name('buku.create');
    Route::post('/simpan-buku', [BukuController::class, 'store'])->name('buku.store');
    Route::get('/edit-buku/{id}', [BukuController::class, 'edit'])->name('buku.edit');
    Route::put('/update-buku/{id}', [BukuController::class, 'update'])->name('buku.update');
    Route::delete('/hapus-buku/{id}', [BukuController::class, 'destroy'])->name('buku.destroy');

    // ======================
    // Kategori
    // ======================
    Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori.index');
    Route::post('/kategori', [KategoriController::class, 'store'])->name('kategori.store');
    Route::get('/edit-kategori/{id}', [KategoriController::class, 'edit'])->name('kategori.edit');
    Route::put('/update-kategori/{id}', [KategoriController::class, 'update'])->name('kategori.update');
    Route::delete('/hapus-kategori/{id}', [KategoriController::class, 'destroy'])->name('kategori.destroy');
});
