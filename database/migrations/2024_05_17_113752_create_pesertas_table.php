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
        Schema::create('pesertas', function (Blueprint $table) {
            $table->id();
            $table->string('jenjang')->nullable();
            $table->string('npsn')->nullable();
            $table->string('nama_sekolah')->nullable();
            $table->string('orang_tua')->nullable();
            $table->string('nama_peserta');
            $table->string('tempat_tanggal_lahir')->nullable();
            // $table->string('tempat_lahir')->nullable();
            // $table->date('tanggal_lahir')->nullable();
            $table->year('tahun_lulus')->nullable();
            $table->string('nomor_ujian')->nullable();
            $table->string('nomor_ijazah')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pesertas');
    }
};
