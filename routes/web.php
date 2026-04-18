<?php
use App\Http\Controllers\LoginController;  // Pastikan ini ada di atas file
use Illuminate\Support\Facades\Route;

// Login admin
Route::get('/loginadmin', [LoginController::class, 'showLoginForm'])->name('login_admin');
Route::post('/loginadmin', [LoginController::class, 'login']);
Route::get('/logoutadmin', [LoginController::class, 'logout'])->name('logout_admin');

use App\Http\Middleware\AdminAuth;

Route::group(['middleware' => AdminAuth::class], function () {
    Route::get('/pengaturan', function () { return view('pengaturan'); });
    Route::get('/tambahbasisdata', function () { return view('tambahbasisdata'); });
    Route::get('/indikasi', function () { return view('indikasi'); })->name('indikasi');
    Route::get('/gangguan', function () { return view('gangguan'); })->name('gangguan');
    Route::get('/basis', function () { return view('basis'); })->name('basis');
});

// Halaman publik
Route::get('/index', function () { return view('index'); })->name('index'); 
Route::get('/konsultasi', function () { return view('konsultasi'); })->name('konsultasi');
Route::get('/laporankondisi', function () { return view('laporankondisi'); })->name('laporan_kondisi');
Route::get('/tentangkesehatanmental', function () { return view('tentangkesehatanmental'); })->name('tentang_kesehatan_mental');
Route::get('/hasilkonsultasi', function () { return view('hasilkonsultasi'); })->name('hasil_konsultasi');
Route::get('/upload', function () { return view('upload'); });

use App\Http\Controllers\PengaturanController;

Route::get('/pengaturan', [PengaturanController::class, 'index'])
    ->name('pengaturan');

Route::post('/pengaturan/update', [PengaturanController::class, 'update'])
    ->name('pengaturan.update');