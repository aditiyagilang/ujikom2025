@extends('layouts.layout')

@section('content')
<div class="container">
    <h2 class="fw-bold text-primary mb-4">Edit Pengampu</h2>

    <form action="{{ route('pengampu.update', $pengampu->id) }}" method="POST" class="card p-4 shadow-sm rounded-4 border-0 bg-white">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="Kode_mk" class="form-label">Mata Kuliah</label>
            <select name="Kode_mk" id="Kode_mk" class="form-select" required>
                @foreach($matakuliah as $mk)
                    <option value="{{ $mk->Kode_mk }}" {{ $pengampu->Kode_mk == $mk->Kode_mk ? 'selected' : '' }}>
                        {{ $mk->Nama_mk }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="NIP" class="form-label">Dosen</label>
            <select name="NIP" id="NIP" class="form-select" required>
                @foreach($dosen as $d)
                    <option value="{{ $d->NIP }}" {{ $pengampu->NIP == $d->NIP ? 'selected' : '' }}>
                        {{ $d->Nama }}
                    </option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Perbarui</button>
        <a href="{{ route('pengampu.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection