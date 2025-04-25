@extends('layouts.layout')

@section('content')
<div class="container">
    <h2 class="fw-bold text-primary mb-4">Tambah Mata Kuliah</h2>

    <form action="{{ route('matakuliah.store') }}" method="POST" class="card p-4 shadow-sm rounded-4 border-0 bg-white">
        @csrf
        <div class="mb-3">
            <label for="Kode_mk" class="form-label">Kode Mata Kuliah</label>
            <input type="text" name="Kode_mk" id="Kode_mk" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="Nama_mk" class="form-label">Nama Mata Kuliah</label>
            <input type="text" name="Nama_mk" id="Nama_mk" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="sks" class="form-label">SKS</label>
            <input type="number" name="sks" id="sks" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="semester" class="form-label">Semester</label>
            <input type="number" name="semester" id="semester" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('matakuliah.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection