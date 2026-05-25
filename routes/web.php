<?php

use App\Http\Controllers\OsisController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

// --- Halaman Informasi & Landing Page ---
Route::get('/', [OsisController::class, 'home'])->name('home');
Route::get('/informasi', [OsisController::class, 'informasi'])->name('osis.informasi');
Route::get('/jadwal', [OsisController::class, 'jadwal'])->name('osis.jadwal');
Route::get('/pengumuman', [OsisController::class, 'pengumuman'])->name('osis.pengumuman');

// --- Halaman Pendaftaran & Kuis Seleksi OSIS ---
Route::prefix('osis')->group(function () {

    Route::post('/verifikasi/{id}', [OsisController::class, 'verifikasi'])->name('osis.verifikasi');
    Route::delete('/hapus/{id}', [OsisController::class, 'destroy'])->name('osis.destroy');
});

Route::view('/admin/login', 'admin.login');
Route::view('/admin/dashboard', 'admin.dashboard');
Route::view('/admin/peserta', 'admin.peserta')
    ->name('admin.peserta');
Route::view('/admin/verifikasi', 'admin.verifikasi')
    ->name('admin.verifikasi');