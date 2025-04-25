@extends('layouts.layout')

@section('content')
<div class="container">
    <h2 class="fw-bold text-primary mb-4">Tambah KRS</h2>

    <form action="{{ route('krs.store') }}" method="POST" class="card p-4 shadow-sm rounded-4 border-0 bg-white">
        @csrf
        <div class="mb-3">
            <label for="NIM" class="form-label">Mahasiswa</label>
            <select name="NIM" id="NIM" class="form-select" required>
                <option disabled selected>Pilih Mahasiswa</option>
                @foreach($mahasiswa as $mhs)
                    <option value="{{ $mhs->NIM }}">{{ $mhs->Nama }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="Kode_mk" class="form-label">Mata Kuliah</label>
            <select name="Kode_mk" id="Kode_mk" class="form-select" required>
                <option disabled selected>Pilih Mata Kuliah</option>
                @foreach($matakuliah as $mk)
                    <option value="{{ $mk->Kode_mk }}">{{ $mk->Nama_mk }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('krs.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection