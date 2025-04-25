<?php

namespace App\Http\Controllers;

use App\Models\Pengampu;
use App\Models\Matakuliah;
use App\Models\Dosen;
use Illuminate\Http\Request;

class PengampuController extends Controller
{
    public function index()
    {
        $pengampu = Pengampu::with(['matakuliah', 'dosen'])->get();
        return view('pengampu.index', compact('pengampu'));
    }

    public function create()
    {
        $matakuliah = Matakuliah::all();
        $dosen = Dosen::all();
        return view('pengampu.create', compact('matakuliah', 'dosen'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'Kode_mk' => 'required|exists:matakuliah,Kode_mk',
            'NIP' => 'required|exists:dosen,NIP'
        ]);

        Pengampu::create($validated);
        return redirect()->route('pengampu.index')->with('success', 'Pengampu berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $pengampu = Pengampu::findOrFail($id);
        $matakuliah = Matakuliah::all();
        $dosen = Dosen::all();
        return view('pengampu.edit', compact('pengampu', 'matakuliah', 'dosen'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'Kode_mk' => 'required|exists:matakuliah,Kode_mk',
            'NIP' => 'required|exists:dosen,NIP'
        ]);

        $pengampu = Pengampu::findOrFail($id);
        $pengampu->update($validated);

        return redirect()->route('pengampu.index')->with('success', 'Pengampu berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $pengampu = Pengampu::findOrFail($id);
        $pengampu->delete();

        return redirect()->route('pengampu.index')->with('success', 'Pengampu berhasil dihapus.');
    }
}
