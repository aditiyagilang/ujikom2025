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
use App\Http\Controllers\PDFController;


Route::get('/', [AuthController::class, 'showLoginForm']);
Route::resource('mahasiswa', MahasiswaController::class);
Route::resource('golongan', GolonganController::class);
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
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/cetak/mahasiswa', [PDFController::class, 'cetakMahasiswa'])->name('cetak.mahasiswa');
Route::get('/cetak/dosen', [PDFContrapaoller::class, 'cetakDosen'])->name('cetak.dosen');
Route::get('/cetak/golongan', [PDFController::class, 'cetakGolongan'])->name('cetak.golongan');
Route::get('/cetak/ruang', [PDFController::class, 'cetakRuang'])->name('cetak.ruang');
Route::get('/cetak/matakuliah', [PDFController::class, 'cetakMatakuliah'])->name('cetak.matakuliah');
Route::get('/cetak/jadwal-akademik', [PDFController::class, 'cetakJadwalAkademik'])->name('cetak.jadwalakademik');
Route::get('/cetak/pengampu', [PDFController::class, 'cetakPengampu'])->name('cetak.pengampu');
Route::get('/cetak/krs', [PDFController::class, 'cetakKrs'])->name('cetak.krs');
Route::get('/cetak/presensi-akademik', [PDFController::class, 'cetakPresensiAkademik'])->name('cetak.presensiakademik');





