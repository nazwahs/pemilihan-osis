<?php

use App\Http\Controllers\OsisController;
use App\Http\Controllers\PendaftaranController;
use Illuminate\Support\Facades\Route;

Route::get('/', [OsisController::class, 'home'])->name('home');

Route::prefix('osis')->name('osis.')->group(function () {

    Route::get('/pendaftaran', [PendaftaranController::class, 'index'])
        ->name('pendaftaran');

    Route::post('/pendaftaran', [PendaftaranController::class, 'store'])
        ->name('pendaftaran.store');

    Route::view('/pilih-bidang', 'osis.pilih_bidang')
        ->name('pilih_bidang');

    Route::view('/quiz', 'osis.quiz')
        ->name('quiz');

    Route::view('/informasi', 'osis.informasi')
        ->name('informasi');

    Route::view('/jadwal', 'osis.jadwal')
        ->name('jadwal');

    Route::view('/pengumuman', 'osis.pengumuman')
        ->name('pengumuman');

    Route::post('/verifikasi/{id}', [OsisController::class, 'verifikasi'])
        ->name('verifikasi');

    Route::delete('/hapus/{id}', [OsisController::class, 'destroy'])
        ->name('destroy');
});

Route::prefix('admin')->name('admin.')->group(function () {

    Route::view('/login', 'admin.login')
        ->name('login');

    Route::view('/dashboard', 'admin.dashboard')
        ->name('dashboard');

    Route::view('/peserta', 'admin.peserta')
        ->name('peserta');

    Route::view('/verifikasi', 'admin.verifikasi')
        ->name('verifikasi');
});