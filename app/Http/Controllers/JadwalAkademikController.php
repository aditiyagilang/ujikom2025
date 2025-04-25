<?php

namespace App\Http\Controllers;

use App\Models\JadwalAkademik;
use App\Models\Matakuliah;
use App\Models\Ruang;
use App\Models\Golongan;
use Illuminate\Http\Request;

class JadwalAkademikController extends Controller
{
    public function index()
    {
        $jadwal = JadwalAkademik::with(['matakuliah', 'ruang', 'golongan'])->get();
        return view('jadwal_akademik.index', compact('jadwal'));
    }

    public function create()
    {
        $matakuliah = Matakuliah::all();
        $ruang = Ruang::all();
        $golongan = Golongan::all();
        return view('jadwal_akademik.create', compact('matakuliah', 'ruang', 'golongan'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'hari' => 'required|string|max:50',
            'Kode_mk' => 'required|exists:matakuliah,Kode_mk',
            'id_ruang' => 'required|exists:ruang,id_ruang',
            'id_Gol' => 'required|exists:golongan,id_Gol'
        ]);

        JadwalAkademik::create($validated);
        return redirect()->route('jadwal-akademik.index')->with('success', 'Jadwal berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $jadwal = JadwalAkademik::findOrFail($id);
        $matakuliah = Matakuliah::all();
        $ruang = Ruang::all();
        $golongan = Golongan::all();
        return view('jadwal_akademik.edit', compact('jadwal', 'matakuliah', 'ruang', 'golongan'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'hari' => 'required|string|max:50',
            'Kode_mk' => 'required|exists:matakuliah,Kode_mk',
            'id_ruang' => 'required|exists:ruang,id_ruang',
            'id_Gol' => 'required|exists:golongan,id_Gol'
        ]);

        $jadwal = JadwalAkademik::findOrFail($id);
        $jadwal->update($validated);

        return redirect()->route('jadwal-akademik.index')->with('success', 'Jadwal berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $jadwal = JadwalAkademik::findOrFail($id);
        $jadwal->delete();

        return redirect()->route('jadwal-akademik.index')->with('success', 'Jadwal berhasil dihapus.');
    }
}
