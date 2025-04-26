@extends('layouts.layout')

@section('content')
<div class="container">
    <h2 class="fw-bold text-primary mb-4">Tambah Jadwal Akademik</h2>

    <form action="{{ route('jadwal-akademik.store') }}" method="POST" class="card p-4 shadow-sm rounded-4 border-0 bg-white">
        @csrf
        <div class="mb-3">
            <label for="hari" class="form-label">Hari</label>
            <select name="hari" id="hari" class="form-select" required>
                <option disabled selected>Pilih Hari</option>
                <option value="Senin">Senin</option>
                <option value="Selasa">Selasa</option>
                <option value="Rabu">Rabu</option>
                <option value="Kamis">Kamis</option>
                <option value="Jumat">Jumat</option>
                
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
        <div class="mb-3">
            <label for="id_ruang" class="form-label">Ruang</label>
            <select name="id_ruang" id="id_ruang" class="form-select" required>
                <option disabled selected>Pilih Ruang</option>
                @foreach($ruang as $r)
                    <option value="{{ $r->id_ruang }}">{{ $r->nama_ruang }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="id_Gol" class="form-label">Golongan</label>
            <select name="id_Gol" id="id_Gol" class="form-select" required>
                <option disabled selected>Pilih Golongan</option>
                @foreach($golongan as $g)
                    <option value="{{ $g->id_Gol }}">{{ $g->nama_Gol }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('jadwal-akademik.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection