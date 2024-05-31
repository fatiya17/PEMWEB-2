<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\PeriksaController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\UnitKerjaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/kabar', function () {
    return view('kondisi');
});

Route::get('/', function () {
    return view('nilai');
});

Route::get('/admin', [AdminController::class, 'index']);
Route::get('/admin/pasien', [PasienController::class, 'index'])->name('pasiens.index');
Route::get('/admin/pasien/create', [PasienController::class, 'create'])->name('pasiens.create');
Route::post('/admin/pasien/store', [PasienController::class, 'store'])->name('pasiens.store');
Route::get('/admin/pasien/{pasien}', [PasienController::class, 'show'])->name('pasiens.show');
Route::delete('/admin/pasien/{pasien}', [PasienController::class, 'destroy'])->name('pasiens.destroy');

Route::get('/admin/periksa', [PeriksaController::class, 'index']);
Route::get('/admin/dokter', [DokterController::class, 'index']);
Route::get('/admin/unit_kerja', [UnitKerjaController::class, 'index']);

Route::get('/pegawai', [PegawaiController::class, 'index']);

