@extends('layouts.layout')

@section('content')
<div class="container">
    <h2 class="fw-bold text-primary mb-4">Edit Presensi</h2>

    <form action="{{ route('presensi-akademik.update', $presensi->id) }}" method="POST" class="card p-4 shadow-sm rounded-4 border-0 bg-white">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="hari" class="form-label">Hari</label>
            <select name="hari" id="hari" class="form-select" required>
                <option value="Senin" {{ $presensi->hari == 'Senin' ? 'selected' : '' }}>Senin</option>
                <option value="Selasa" {{ $presensi->hari == 'Selasa' ? 'selected' : '' }}>Selasa</option>
                <option value="Rabu" {{ $presensi->hari == 'Rabu' ? 'selected' : '' }}>Rabu</option>
                <option value="Kamis" {{ $presensi->hari == 'Kamis' ? 'selected' : '' }}>Kamis</option>
                <option value="Jumat" {{ $presensi->hari == 'Jumat' ? 'selected' : '' }}>Jumat</option>
                <option value="Sabtu" {{ $presensi->hari == 'Sabtu' ? 'selected' : '' }}>Sabtu</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="tanggal" class="form-label">Tanggal</label>
            <input type="date" name="tanggal" id="tanggal" class="form-control" value="{{ $presensi->tanggal }}" required>
        </div>
        <div class="mb-3">
            <label for="status_kehadiran" class="form-label">Status Kehadiran</label>
            <select name="status_kehadiran" id="status_kehadiran" class="form-select" required>
                <option value="Hadir" {{ $presensi->status_kehadiran == 'Hadir' ? 'selected' : '' }}>Hadir</option>
                <option value="Izin" {{ $presensi->status_kehadiran == 'Izin' ? 'selected' : '' }}>Izin</option>
                <option value="Sakit" {{ $presensi->status_kehadiran == 'Sakit' ? 'selected' : '' }}>Sakit</option>
                <option value="Alpa" {{ $presensi->status_kehadiran == 'Alpa' ? 'selected' : '' }}>Alpa</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="NIM" class="form-label">Mahasiswa</label>
            <select name="NIM" id="NIM" class="form-select" required>
                @foreach($mahasiswa as $mhs)
                    <option value="{{ $mhs->NIM }}" {{ $presensi->NIM == $mhs->NIM ? 'selected' : '' }}>
                        {{ $mhs->Nama }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="Kode_mk" class="form-label">Mata Kuliah</label>
            <select name="Kode_mk" id="Kode_mk" class="form-select" required>
                @foreach($matakuliah as $mk)
                    <option value="{{ $mk->Kode_mk }}" {{ $presensi->Kode_mk == $mk->Kode_mk ? 'selected' : '' }}>
                        {{ $mk->Nama_mk }}
                    </option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Perbarui</button>
        <a href="{{ route('presensi-akademik.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
