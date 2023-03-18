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
        Schema::table('tb_vote', function (Blueprint $table) {
            $table->integer('id_pengguna')->after('id_vote');
            $table->integer('id_calon')->after('id_vote');
            $table->foreign('id_pengguna')->references('id_pengguna')->on('tb_pengguna')->onDelete('restrict');
            $table->foreign('id_calon')->references('id_calon')->on('tb_calon')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tb_vote', function (Blueprint $table) {
            $table->dropForeign(['id_calon']);
            $table->dropForeign(['id_pengguna']);
            $table->dropColumn(['id_pengguna', 'id_calon']);
        });
    }
};
