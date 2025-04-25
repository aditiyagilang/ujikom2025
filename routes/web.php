<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GolonganController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\MatakuliahController;
use App\Http\Controllers\RuangController;
use App\Http\Controllers\JadwalAkademikController;
use App\Http\Controllers\PengampuController;
use App\Http\Controllers\KRSController;
use App\Http\Controllers\PresensiAkademikController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;


Route::get('/', function () {
    return view('welcome');
});

Route::resource('golongan', GolonganController::class);
Route::resource('mahasiswa', MahasiswaController::class);
Route::resource('dosen', DosenController::class);
Route::resource('matakuliah', MatakuliahController::class);
Route::resource('ruang', RuangController::class);
Route::resource('jadwal-akademik', JadwalAkademikController::class);
Route::resource('pengampu', PengampuController::class);
Route::resource('krs', KRSController::class);
Route::resource('presensi-akademik', PresensiAkademikController::class);
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login']);





