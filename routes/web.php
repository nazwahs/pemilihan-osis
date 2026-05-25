<?php

use App\Http\Controllers\OsisController;
use Illuminate\Support\Facades\Route;

// Route Halaman Utama & Informasi Umum
Route::get('/', [OsisController::class, 'home'])->name('home');
Route::get('/osis/pendaftaran', function () {
    return view('pendaftaran');
})->name('osis.pendaftaran');
Route::get('/pilih_bidang', function () {
    return view('pilih_bidang');
})->name('pilih_bidang');
Route::get('/osis/quiz', function () {
    return view('quiz');
})->name('osis.quiz');
Route::get('/informasi', [OsisController::class, 'informasi'])->name('osis.informasi');
Route::get('/jadwal', [OsisController::class, 'jadwal'])->name('osis.jadwal');
Route::get('/pengumuman', [OsisController::class, 'pengumuman'])->name('osis.pengumuman');

// Route Sistem Pendaftaran OSIS Berbasis SPK
Route::prefix('osis')->group(function () {
    Route::post('/pilih-bidang', function () {
        return view('pilih_bidang');
    })->name('osis.pilihBidang');
    Route::post('/verifikasi/{id}', [OsisController::class, 'verifikasi'])->name('osis.verifikasi');
    Route::delete('/hapus/{id}', [OsisController::class, 'destroy'])->name('osis.destroy');
});

Route::view('/admin/login', 'admin.login');
Route::view('/admin/dashboard', 'admin.dashboard');
Route::view('/admin/peserta', 'admin.peserta')
    ->name('admin.peserta');
Route::view('/admin/verifikasi', 'admin.verifikasi')
    ->name('admin.verifikasi');