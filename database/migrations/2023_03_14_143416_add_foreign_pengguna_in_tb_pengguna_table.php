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
            $table->string('jurusan', 50)->after('nama_pengguna')->unique('jurusan');
            $table->foreign('jurusan')->references('nama_jurusan')->on('jurusan');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tb_pengguna', function (Blueprint $table) {
            $table->dropForeign(['jurusan']);
            $table->dropUnique('tb_pengguna_jurusan_unique');
            $table->dropColumn(['jurusan']);
        });
    }
};
