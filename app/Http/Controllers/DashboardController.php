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

        $golonganData = Golongan::withCount('mahasiswa')->get();
        $labelsGolongan = $golonganData->pluck('nama_Gol')->toArray();
        $dataGolongan = $golonganData->pluck('mahasiswa_count')->toArray();

        if (empty($labelsGolongan)) {
            $labelsGolongan = ['Belum Ada Data'];
            $dataGolongan = [0];
        }

        $dataPresensi = [
            PresensiAkademik::where('status_kehadiran', 'Hadir')->count(),
            PresensiAkademik::where('status_kehadiran', 'Izin')->count(),
            PresensiAkademik::where('status_kehadiran', 'Sakit')->count(),
            PresensiAkademik::where('status_kehadiran', 'Alpa')->count(),
        ];

        if (array_sum($dataPresensi) === 0) {
            $dataPresensi = [0, 0, 0, 0];
        }

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
