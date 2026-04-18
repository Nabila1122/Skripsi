<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    AdminController,
    GangguanController,
    IndikasiController,
    BasisController,
    SiswaController,
    KondisiController
};

/*
|--------------------------------------------------------------------------
| API ROOT
|--------------------------------------------------------------------------
*/
Route::get('/', function () {
    return response()->json([
        'status'  => true,
        'message' => 'REST API Sistem Diagnosa Kesehatan Mental Remaja',
        'version' => '1.0'
    ]);
});

/*
|--------------------------------------------------------------------------
| API RESOURCE
|--------------------------------------------------------------------------
*/
Route::apiResource('admin', AdminController::class);
Route::apiResource('gangguan', GangguanController::class);
Route::apiResource('indikasi', IndikasiController::class);
Route::apiResource('basis', BasisController::class);
Route::apiResource('siswa', SiswaController::class);
Route::apiResource('kondisi', KondisiController::class);

use App\Http\Controllers\PengaturanController;

Route::get('/pengaturan', [PengaturanController::class, 'index'])->name('pengaturan');