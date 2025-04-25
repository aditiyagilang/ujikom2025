@extends('layouts.layout')

@section('content')
<div class="container">
    <h2 class="fw-bold text-primary mb-4">Tambah Mahasiswa</h2>

    <form action="{{ route('mahasiswa.store') }}" method="POST" class="card p-4 shadow-sm rounded-4 border-0 bg-white">
        @csrf
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="NIM" class="form-label">NIM</label>
                <input type="text" name="NIM" id="NIM" class="form-control" required>
            </div>
            <div class="col-md-6">
                <label for="Nama" class="form-label">Nama</label>
                <input type="text" name="Nama" id="Nama" class="form-control" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="Alamat" class="form-label">Alamat</label>
                <input type="text" name="Alamat" id="Alamat" class="form-control" required>
            </div>
            <div class="col-md-6">
                <label for="Nohp" class="form-label">No HP</label>
                <input type="text" name="Nohp" id="Nohp" class="form-control" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="Semester" class="form-label">Semester</label>
                <input type="number" name="Semester" id="Semester" class="form-control" required>
            </div>
            <div class="col-md-6">
                <label for="id_Gol" class="form-label">Golongan</label>
                <select name="id_Gol" id="id_Gol" class="form-select" required>
                    <option disabled selected>Pilih Golongan</option>
                    @foreach($golongan as $gol)
                        <option value="{{ $gol->id_Gol }}">{{ $gol->nama_Gol }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
