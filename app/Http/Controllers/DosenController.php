<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index()
    {
        $dosen = Dosen::all();
        return view('dosen.index', compact('dosen'));
    }

    public function create()
    {
        return view('dosen.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'NIP' => 'required|string|unique:dosen,NIP',
            'Nama' => 'required|string|max:255',
            'Alamat' => 'required|string',
            'Nohp' => 'required|string|max:20'
        ]);

        Dosen::create($validated);
        return redirect()->route('dosen.index')->with('success', 'Dosen berhasil ditambahkan.');
    }

    public function edit($NIP)
    {
        $dosen = Dosen::findOrFail($NIP);
        return view('dosen.edit', compact('dosen'));
    }

    public function update(Request $request, $NIP)
    {
        $validated = $request->validate([
            'Nama' => 'required|string|max:255',
            'Alamat' => 'required|string',
            'Nohp' => 'required|string|max:20'
        ]);

        $dosen = Dosen::findOrFail($NIP);
        $dosen->update($validated);

        return redirect()->route('dosen.index')->with('success', 'Dosen berhasil diperbarui.');
    }

    public function destroy($NIP)
    {
        $dosen = Dosen::findOrFail($NIP);
        $dosen->delete();

        return redirect()->route('dosen.index')->with('success', 'Dosen berhasil dihapus.');
    }
}
