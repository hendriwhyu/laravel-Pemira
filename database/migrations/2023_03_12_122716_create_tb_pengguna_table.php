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
        Schema::create('tb_pengguna', function (Blueprint $table) {
            $table->integer('id_pengguna')->autoIncrement('id_pengguna');
            $table->string('username', 50);
            $table->string('password', 50);
            $table->enum('level', ['Administrator', 'Pemilih']);
            $table->enum('status', ['2', '1', '0']);
            $table->string('email', 50);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_pengguna');
    }
};
