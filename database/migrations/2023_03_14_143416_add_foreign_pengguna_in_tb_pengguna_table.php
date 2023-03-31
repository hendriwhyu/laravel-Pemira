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
        Schema::table('tb_pengguna', function (Blueprint $table) {
            $table->integer('id_jurusan')->after('nama_pengguna')->index('id_jurusan');
            $table->foreign('id_jurusan')->references('id_jurusan')->on('jurusan');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tb_pengguna', function (Blueprint $table) {
            $table->dropForeign(['id_jurusan']);
            $table->dropUnique('tb_pengguna_jurusan_unique');
            $table->dropColumn(['id_jurusan']);
        });
    }
};
