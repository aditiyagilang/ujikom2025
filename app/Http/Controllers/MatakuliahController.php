<?php

namespace App\Http\Controllers;

use App\Models\Matakuliah;
use Illuminate\Http\Request;

class MatakuliahController extends Controller
{
    public function index()
    {
        $matakuliah = Matakuliah::all();
        return view('matakuliah.index', compact('matakuliah'));
    }

    public function create()
    {
        return view('matakuliah.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'Kode_mk' => 'required|string|unique:matakuliah,Kode_mk',
            'Nama_mk' => 'required|string|max:255',
            'sks' => 'required|integer',
            'semester' => 'required|integer'
        ]);

        Matakuliah::create($validated);
        return redirect()->route('matakuliah.index')->with('success', 'Mata kuliah berhasil ditambahkan.');
    }

    public function edit($Kode_mk)
    {
        $matakuliah = Matakuliah::findOrFail($Kode_mk);
        return view('matakuliah.edit', compact('matakuliah'));
    }

    public function update(Request $request, $Kode_mk)
    {
        $validated = $request->validate([
            'Nama_mk' => 'required|string|max:255',
            'sks' => 'required|integer',
            'semester' => 'required|integer'
        ]);

        $matakuliah = Matakuliah::findOrFail($Kode_mk);
        $matakuliah->update($validated);

        return redirect()->route('matakuliah.index')->with('success', 'Mata kuliah berhasil diperbarui.');
    }

    public function destroy($Kode_mk)
    {
        $matakuliah = Matakuliah::findOrFail($Kode_mk);
        $matakuliah->delete();

        return redirect()->route('matakuliah.index')->with('success', 'Mata kuliah berhasil dihapus.');
    }
}
