<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Dosen extends Model
{
    use HasFactory;

    protected $table = 'dosen';
    protected $primaryKey = 'NIP';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = true;

    protected $fillable = ['NIP', 'Nama', 'Alamat', 'Nohp'];
}
