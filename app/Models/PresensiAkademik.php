<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PresensiAkademik extends Model
{
    use HasFactory;

    protected $table = 'presensi_akademik';
    protected $primaryKey = 'id';
    public $timestamps = true;

    protected $fillable = ['hari', 'tanggal', 'status_kehadiran', 'NIM', 'Kode_mk'];

    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class, 'NIM', 'NIM');
    }

    public function matakuliah()
    {
        return $this->belongsTo(Matakuliah::class, 'Kode_mk', 'Kode_mk');
    }
}
