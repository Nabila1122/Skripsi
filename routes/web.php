<?php

use Illuminate\Support\Facades\Route;

Route::get('/index', function () {
    return view('index');  // Menampilkan index.blade.php
});

Route::get('/loginadmin', function () {
    return view('loginadmin');
});

Route::get('/tentangkesehatanmental', function () {
    return view('tentangkesehatanmental');
});

Route::get('/laporankondisi', function () {
    return view('laporankondisi'); // ganti dengan nama view yang sesuai
});

Route::get('/konsultasi', function () {
    return view('konsultasi'); // Pastikan nama view sesuai
});

Route::get('/indikasi', function () {
    return view('indikasi'); // Pastikan nama view sesuai
});

Route::get('/hasilkonsultasi', function () {
    return view('hasilkonsultasi'); // Pastikan nama view sesuai
});

Route::get('/gangguan', function () {
    return view('gangguan'); // Pastikan nama view sesuai
});

Route::get('/basis', function () {
    return view('basis'); // Pastikan nama view sesuai
});

Route::get('/tambahbasisdata', function () {
    return view('basis'); // pastikan nama view sesuai
});

Route::get('/pengaturan', function () {
    return view('pengaturan'); // pastikan nama view sesuai
});

Route::get('/upload', function () {
    return view('upload'); // pastikan nama view sesuai
});