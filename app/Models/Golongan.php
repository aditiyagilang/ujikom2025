<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Golongan extends Model
{
    use HasFactory;

    protected $table = 'golongan';         
    protected $primaryKey = 'id_Gol';      
    public $timestamps = true;             

    protected $fillable = ['nama_Gol'];

    public function mahasiswa()
    {
        return $this->hasMany(Mahasiswa::class, 'id_Gol', 'id_Gol');
    }
}
