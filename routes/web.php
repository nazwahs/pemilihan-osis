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
    // 1. Tampilan Form Pendaftaran & Kuis Utama
    Route::get('/pendaftaran', function () {
        return view('quiz'); 
    })->name('osis.pendaftaran');

    // 2. Tampilan Hasil Evaluasi Skor Kuis (Setelah Form Di-submit)
    Route::post('/submit', function (Request $request) {
        return view('hasil');
    })->name('osis.submit');

    // --- Route Management Admin (Jika Ada) ---
    Route::post('/verifikasi/{id}', [OsisController::class, 'verifikasi'])->name('osis.verifikasi');
    Route::delete('/hapus/{id}', [OsisController::class, 'destroy'])->name('osis.destroy');
});