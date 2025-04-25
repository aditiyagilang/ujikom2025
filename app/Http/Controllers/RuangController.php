<?php

namespace App\Http\Controllers;

use App\Models\Ruang;
use Illuminate\Http\Request;

class RuangController extends Controller
{
    public function index()
    {
        $ruang = Ruang::all();
        return view('ruang.index', compact('ruang'));
    }

    public function create()
    {
        return view('ruang.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_ruang' => 'required|string|max:255'
        ]);

        Ruang::create($validated);
        return redirect()->route('ruang.index')->with('success', 'Ruang berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $ruang = Ruang::findOrFail($id);
        return view('ruang.edit', compact('ruang'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama_ruang' => 'required|string|max:255'
        ]);

        $ruang = Ruang::findOrFail($id);
        $ruang->update($validated);

        return redirect()->route('ruang.index')->with('success', 'Ruang berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $ruang = Ruang::findOrFail($id);
        $ruang->delete();

        return redirect()->route('ruang.index')->with('success', 'Ruang berhasil dihapus.');
    }
}
