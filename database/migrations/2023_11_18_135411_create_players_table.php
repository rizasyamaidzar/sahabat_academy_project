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
        Schema::create('players', function (Blueprint $table) {
            $table->id();
            $table->string('nama')->nullable();
            $table->string('jenis_kelamin')->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->double('no')->nullable();
            $table->string('nama_ortu')->nullable();
            $table->double('no_ortu')->nullable();
            $table->string('asal_sekolah')->nullable();
            $table->string('ukuran_jersey')->nullable();
            $table->string('pengalaman')->nullable();
            
            // DATA FISIk
            $table->integer('berat_badan')->nullable();
            $table->integer('tinggi_badan')->nullable();
            $table->string('golongan_darah')->nullable();
            $table->string('riwayat_penyakit')->nullable();
            
            //BERKAS
            $table->string('akta')->nullable();
            $table->string('kartu_keluarga')->nullable();
            $table->string('foto')->nullable();

            //Akun
            $table->foreignId('user_id');
            $table->foreignId('program_id');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('players');
    }
};
