<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\Dosen;
use App\Models\Matakuliah;
use App\Models\Golongan;
use App\Models\PresensiAkademik;

class DashboardController extends Controller
{
    public function index()
    {
        $jumlahMahasiswa = Mahasiswa::count();
        $jumlahDosen = Dosen::count();
        $jumlahMatakuliah = Matakuliah::count();
        $jumlahGolongan = Golongan::count();

        $labelsGolongan = Golongan::pluck('nama_Gol')->toArray();
        $dataGolongan = Golongan::withCount('mahasiswa')->get()->pluck('mahasiswa_count')->toArray();

        $dataPresensi = [
            PresensiAkademik::where('status_kehadiran', 'Hadir')->count(),
            PresensiAkademik::where('status_kehadiran', 'Izin')->count(),
            PresensiAkademik::where('status_kehadiran', 'Sakit')->count(),
            PresensiAkademik::where('status_kehadiran', 'Alpa')->count(),
        ];

        return view('dashboard', [
            'jumlahMahasiswa' => $jumlahMahasiswa,
            'jumlahDosen' => $jumlahDosen,
            'jumlahMatakuliah' => $jumlahMatakuliah,
            'jumlahGolongan' => $jumlahGolongan,
            'labelsGolongan' => $labelsGolongan,
            'dataGolongan' => $dataGolongan,
            'dataPresensi' => $dataPresensi,
        ]);
    }
}
