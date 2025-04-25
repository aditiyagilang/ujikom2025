@extends('layouts.layout')

@section('content')
<div class="container">
    <h2 class="fw-bold text-primary mb-4">Edit Mahasiswa</h2>

    <form action="{{ route('mahasiswa.update', $mahasiswa->NIM) }}" method="POST" class="card p-4 shadow-sm rounded-4 border-0 bg-white">
        @csrf
        @method('PUT')
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="Nama" class="form-label">Nama</label>
                <input type="text" name="Nama" id="Nama" class="form-control" value="{{ $mahasiswa->Nama }}" required>
            </div>
            <div class="col-md-6">
                <label for="Alamat" class="form-label">Alamat</label>
                <input type="text" name="Alamat" id="Alamat" class="form-control" value="{{ $mahasiswa->Alamat }}" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="Nohp" class="form-label">No HP</label>
                <input type="text" name="Nohp" id="Nohp" class="form-control" value="{{ $mahasiswa->Nohp }}" required>
            </div>
            <div class="col-md-6">
                <label for="Semester" class="form-label">Semester</label>
                <input type="number" name="Semester" id="Semester" class="form-control" value="{{ $mahasiswa->Semester }}" required>
            </div>
        </div>
        <div class="mb-3">
            <label for="id_Gol" class="form-label">Golongan</label>
            <select name="id_Gol" id="id_Gol" class="form-select" required>
                @foreach($golongan as $gol)
                    <option value="{{ $gol->id_Gol }}" {{ $mahasiswa->id_Gol == $gol->id_Gol ? 'selected' : '' }}>
                        {{ $gol->nama_Gol }}
                    </option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Perbarui</button>
        <a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
