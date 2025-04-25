<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\Golongan;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = Mahasiswa::with('golongan')->get();
        return view('mahasiswa.index', compact('mahasiswa'));
    }

    public function create()
    {
        $golongan = Golongan::all();
        return view('mahasiswa.create', compact('golongan'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'NIM' => 'required|string|unique:mahasiswa,NIM',
            'Nama' => 'required|string|max:255',
            'Alamat' => 'required|string',
            'Nohp' => 'required|string|max:20',
            'Semester' => 'required|integer',
            'id_Gol' => 'required|exists:golongan,id_Gol'
        ]);

        Mahasiswa::create($validated);
        return redirect()->route('mahasiswa.index')->with('success', 'Mahasiswa berhasil ditambahkan.');
    }

    public function edit($NIM)
    {
        $mahasiswa = Mahasiswa::findOrFail($NIM);
        $golongan = Golongan::all();
        return view('mahasiswa.edit', compact('mahasiswa', 'golongan'));
    }

    public function update(Request $request, $NIM)
    {
        $validated = $request->validate([
            'Nama' => 'required|string|max:255',
            'Alamat' => 'required|string',
            'Nohp' => 'required|string|max:20',
            'Semester' => 'required|integer',
            'id_Gol' => 'required|exists:golongan,id_Gol'
        ]);

        $mahasiswa = Mahasiswa::findOrFail($NIM);
        $mahasiswa->update($validated);

        return redirect()->route('mahasiswa.index')->with('success', 'Mahasiswa berhasil diperbarui.');
    }

    public function destroy($NIM)
    {
        $mahasiswa = Mahasiswa::findOrFail($NIM);
        $mahasiswa->delete();

        return redirect()->route('mahasiswa.index')->with('success', 'Mahasiswa berhasil dihapus.');
    }

    public function show($NIM)
    {
        $mahasiswa = Mahasiswa::with('golongan')->findOrFail($NIM);
        return response()->json($mahasiswa);
    }
}
