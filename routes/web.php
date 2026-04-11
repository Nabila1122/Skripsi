<?php
use App\Http\Controllers\LoginController;  // Pastikan ini ada di atas file
use Illuminate\Support\Facades\Route;

// Route untuk login admin
Route::get('/loginadmin', function () { 
    return view('loginadmin'); // Memanggil view loginadmin.blade.php
})->name('login_admin'); 
Route::post('/loginadmin', [LoginController::class, 'login']); // Login menggunakan POST

// Route untuk index (halaman utama)
Route::get('/index', function () { 
    return view('index'); // Memanggil view index.blade.php
})->name('index'); 

// Route untuk halaman tentang kesehatan mental
Route::get('/tentangkesehatanmental', function () { 
    return view('tentangkesehatanmental'); 
})->name('tentang_kesehatan_mental');

// Route untuk laporan kondisi
Route::get('/laporankondisi', function () { 
    return view('laporankondisi'); // Ganti dengan nama view yang sesuai
})->name('laporan_kondisi'); 

// Route untuk konsultasi
Route::get('/konsultasi', function () { 
    return view('konsultasi'); // Pastikan nama view sesuai
})->name('konsultasi');; 

// Route untuk indikasi
Route::get('/indikasi', function () { 
    return view('indikasi'); // Pastikan nama view sesuai
})->name('indikasi'); 

// Route untuk hasil konsultasi
Route::get('/hasilkonsultasi', function () { 
    return view('hasilkonsultasi'); // Pastikan nama view sesuai
})->name('hasil_konsultasi');

// Route untuk gangguan
Route::get('/gangguan', function () { 
    return view('gangguan'); // Pastikan nama view sesuai
})->name('gangguan');

// Route untuk basis
Route::get('/basis', function () { 
    return view('basis'); // Pastikan nama view sesuai
})->name('basis'); 

// Route untuk tambah basis data
Route::get('/tambahbasisdata', function () { 
    return view('tambahbasisdata'); // Pastikan nama view sesuai
}); 

// Route untuk pengaturan
Route::get('/pengaturan', function () { 
    return view('pengaturan'); // Pastikan nama view sesuai
})->name('pengaturan'); 

// Route untuk upload
Route::get('/upload', function () { 
    return view('upload'); // Pastikan nama view sesuai
});

