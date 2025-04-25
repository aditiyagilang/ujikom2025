<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $table = 'mahasiswa';
    protected $primaryKey = 'NIM';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = true;

    protected $fillable = ['NIM', 'Nama', 'Alamat', 'Nohp', 'Semester', 'id_Gol'];

    public function golongan()
    {
        return $this->belongsTo(Golongan::class, 'id_Gol', 'id_Gol');
    }
}
