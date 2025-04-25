<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Matakuliah extends Model
{
    use HasFactory;

    protected $table = 'matakuliah';
    protected $primaryKey = 'Kode_mk';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = true;

    protected $fillable = ['Kode_mk', 'Nama_mk', 'sks', 'semester'];
}
