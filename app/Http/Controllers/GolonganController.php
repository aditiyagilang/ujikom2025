<?php

namespace App\Http\Controllers;

use App\Models\Golongan;
use Illuminate\Http\Request;

class GolonganController extends Controller
{
    public function index()
    {
        $golongan = Golongan::all();
        return view('golongan.index', compact('golongan'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_Gol' => 'required|string|max:255'
        ]);

        Golongan::create($validated);
        return redirect()->route('golongan.index')->with('success', 'Golongan berhasil ditambahkan.');
    }

    public function show($id)
    {
        $golongan = Golongan::findOrFail($id);
        return response()->json($golongan);
    }
    public function create()
    {
        return view('golongan.create');
    }
    public function edit($id)
    {
        $golongan = Golongan::findOrFail($id);
        return view('golongan.edit', compact('golongan'));
    }
        
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama_Gol' => 'required|string|max:255'
        ]);

        $golongan = Golongan::findOrFail($id);
        $golongan->update($validated);

        return redirect()->route('golongan.index')->with('success', 'Golongan berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $golongan = Golongan::findOrFail($id);
        $golongan->delete();

        return redirect()->route('golongan.index')->with('success', 'Golongan berhasil dihapus.');
    }
}
