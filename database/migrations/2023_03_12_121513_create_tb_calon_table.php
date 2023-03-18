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
        Schema::create('tb_calon', function (Blueprint $table) {
            $table->integer('id_calon')->autoIncrement('id_calon');
            $table->enum('organisasi', ['Badan Perwakilan Mahasiswa', 'Badan Eksekutif Mahasiswa']);
            $table->integer('no_urut');
            $table->string('nama_calon', 100);
            $table->text('foto_calon');
            $table->text('visimisi_calon');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_calon');
    }
};
