<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\Dosen;
use App\Models\Golongan;
use Barryvdh\DomPDF\Facade\Pdf;

class PDFController extends Controller
{
    public function cetakMahasiswa()
    {
        $mahasiswa = Mahasiswa::all();
        $pdf = Pdf::loadView('pdf.mahasiswa', compact('mahasiswa'));
        return $pdf->download('laporan-mahasiswa.pdf');
    }

    public function cetakDosen()
    {
        $dosen = Dosen::all();
        $pdf = Pdf::loadView('pdf.dosen', compact('dosen'));
        return $pdf->download('laporan-dosen.pdf');
    }

    public function cetakGolongan()
    {
        $golongan = Golongan::all();
        $pdf = Pdf::loadView('pdf.golongan', compact('golongan'));
        return $pdf->download('laporan-golongan.pdf');
    }

    public function cetakRuang()
    {
        $ruang = \App\Models\Ruang::all();
        $pdf = \Barryvdh\DomPDF\Facade\Pdf::loadView('pdf.ruang', compact('ruang'));
        return $pdf->download('laporan-ruang.pdf');
    }

    public function cetakMatakuliah()
    {
        $matakuliah = \App\Models\Matakuliah::all();
        $pdf = \Barryvdh\DomPDF\Facade\Pdf::loadView('pdf.matakuliah', compact('matakuliah'));
        return $pdf->download('laporan-matakuliah.pdf');
    }

    public function cetakJadwalAkademik()
    {
        $jadwal = \App\Models\JadwalAkademik::with(['matakuliah', 'ruang', 'golongan'])->get();
        $pdf = \Barryvdh\DomPDF\Facade\Pdf::loadView('pdf.jadwal_akademik', compact('jadwal'));
        return $pdf->download('laporan-jadwal-akademik.pdf');
    }
    public function cetakPengampu()
    {
        $pengampu = \App\Models\Pengampu::with(['matakuliah', 'dosen'])->get();
        $pdf = \Barryvdh\DomPDF\Facade\Pdf::loadView('pdf.pengampu', compact('pengampu'));
        return $pdf->download('laporan-pengampu.pdf');
    }
    
    public function cetakKrs()
    {
        $krs = \App\Models\Krs::with(['mahasiswa', 'matakuliah'])->get();
        $pdf = \Barryvdh\DomPDF\Facade\Pdf::loadView('pdf.krs', compact('krs'));
        return $pdf->download('laporan-krs.pdf');
    }
    
    public function cetakPresensiAkademik()
    {
        $presensi = \App\Models\PresensiAkademik::with(['mahasiswa', 'matakuliah'])->get();
        $pdf = \Barryvdh\DomPDF\Facade\Pdf::loadView('pdf.presensi_akademik', compact('presensi'));
        return $pdf->download('laporan-presensi-akademik.pdf');
    }
    
}
