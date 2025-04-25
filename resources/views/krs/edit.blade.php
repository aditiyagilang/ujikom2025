@extends('layouts.layout')

@section('content')
<div class="container">
    <h2 class="fw-bold text-primary mb-4">Edit KRS</h2>

    <form action="{{ route('krs.update', $krs->id) }}" method="POST" class="card p-4 shadow-sm rounded-4 border-0 bg-white">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="NIM" class="form-label">Mahasiswa</label>
            <select name="NIM" id="NIM" class="form-select" required>
                @foreach($mahasiswa as $mhs)
                    <option value="{{ $mhs->NIM }}" {{ $krs->NIM == $mhs->NIM ? 'selected' : '' }}>
                        {{ $mhs->Nama }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="Kode_mk" class="form-label">Mata Kuliah</label>
            <select name="Kode_mk" id="Kode_mk" class="form-select" required>
                @foreach($matakuliah as $mk)
                    <option value="{{ $mk->Kode_mk }}" {{ $krs->Kode_mk == $mk->Kode_mk ? 'selected' : '' }}>
                        {{ $mk->Nama_mk }}
                    </option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Perbarui</button>
        <a href="{{ route('krs.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
