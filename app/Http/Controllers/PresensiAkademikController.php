<?php

namespace App\Http\Controllers;

use App\Models\PresensiAkademik;
use App\Models\Mahasiswa;
use App\Models\Matakuliah;
use Illuminate\Http\Request;

class PresensiAkademikController extends Controller
{
    public function index()
    {
        $presensi = PresensiAkademik::with(['mahasiswa', 'matakuliah'])->get();
        return view('presensi_akademik.index', compact('presensi'));
    }

    public function create()
    {
        $mahasiswa = Mahasiswa::all();
        $matakuliah = Matakuliah::all();
        return view('presensi_akademik.create', compact('mahasiswa', 'matakuliah'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'hari' => 'required|string|max:50',
            'tanggal' => 'required|date',
            'status_kehadiran' => 'required|string|max:50',
            'NIM' => 'required|exists:mahasiswa,NIM',
            'Kode_mk' => 'required|exists:matakuliah,Kode_mk'
        ]);

        PresensiAkademik::create($validated);
        return redirect()->route('presensi-akademik.index')->with('success', 'Presensi berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $presensi = PresensiAkademik::findOrFail($id);
        $mahasiswa = Mahasiswa::all();
        $matakuliah = Matakuliah::all();
        return view('presensi_akademik.edit', compact('presensi', 'mahasiswa', 'matakuliah'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'hari' => 'required|string|max:50',
            'tanggal' => 'required|date',
            'status_kehadiran' => 'required|string|max:50',
            'NIM' => 'required|exists:mahasiswa,NIM',
            'Kode_mk' => 'required|exists:matakuliah,Kode_mk'
        ]);

        $presensi = PresensiAkademik::findOrFail($id);
        $presensi->update($validated);

        return redirect()->route('presensi-akademik.index')->with('success', 'Presensi berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $presensi = PresensiAkademik::findOrFail($id);
        $presensi->delete();

        return redirect()->route('presensi-akademik.index')->with('success', 'Presensi berhasil dihapus.');
    }
}
