<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('jadwal_akademik', function (Blueprint $table) {
            $table->id();
            $table->string('hari');
            $table->string('Kode_mk');
            $table->unsignedBigInteger('id_ruang');
            $table->unsignedBigInteger('id_Gol');
            $table->foreign('Kode_mk')->references('Kode_mk')->on('matakuliah')->onDelete('cascade');
            $table->foreign('id_ruang')->references('id_ruang')->on('ruang')->onDelete('cascade');
            $table->foreign('id_Gol')->references('id_Gol')->on('golongan')->onDelete('cascade');
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jadwal_akademik');
    }
};
