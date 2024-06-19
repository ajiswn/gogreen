<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\PendaftaranController;

//Guest Routes
Route::get('/', [GuestController::class, 'index']); //Halaman Beranda

Route::get('/about_us', [GuestController::class, 'tentang_kami']); //Halaman Tentang Kami

//Halaman Artikel, Detail Artikel, dan Kategori Artikel
Route::get('/article', [GuestController::class, 'artikel']);
Route::get('/detail_article/{id}', [GuestController::class, 'detail_artikel']);
Route::get('/article/category/{kategori}', [GuestController::class, 'kategori_artikel']);

//Halaman Pendaftaran
Route::get('/registration', [GuestController::class, 'pendaftaran']);
Route::post('/registration', [GuestController::class, 'pendaftaran_submit'])->name('daftar');

//Login
Route::get('/login', [AdminController::class, 'login'])->name('login');
Route::post('/login', [AdminController::class, 'login_action'])->name('login.action');


//Admin
Route::middleware('auth')->group(function () {

    Route::get('/dasbor', [AdminController::class, 'dasbor'])->name('dasbor');

    Route::resource('artikel', ArtikelController::class);

    Route::resource('pendaftaran', PendaftaranController::class);
    Route::get('/pendaftaran/diterima/{id}', [PendaftaranController::class, 'diterima'])->name('pendaftaran.diterima');
    Route::get('/pendaftaran/ditolak/{id}', [PendaftaranController::class, 'ditolak'])->name('pendaftaran.ditolak');


    Route::get('logout', [AdminController::class, 'logout'])->name('logout');
});
