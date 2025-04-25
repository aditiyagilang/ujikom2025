<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Krs extends Model
{
    use HasFactory;

    protected $table = 'krs';
    protected $primaryKey = 'id';
    public $timestamps = true;

    protected $fillable = ['NIM', 'Kode_mk'];

    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class, 'NIM', 'NIM');
    }

    public function matakuliah()
    {
        return $this->belongsTo(Matakuliah::class, 'Kode_mk', 'Kode_mk');
    }
}
