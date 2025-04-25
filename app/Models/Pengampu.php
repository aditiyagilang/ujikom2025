<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pengampu extends Model
{
    use HasFactory;

    protected $table = 'pengampu';
    protected $primaryKey = 'id';
    public $timestamps = true;

    protected $fillable = ['Kode_mk', 'NIP'];

    public function matakuliah()
    {
        return $this->belongsTo(Matakuliah::class, 'Kode_mk', 'Kode_mk');
    }

    public function dosen()
    {
        return $this->belongsTo(Dosen::class, 'NIP', 'NIP');
    }
}
