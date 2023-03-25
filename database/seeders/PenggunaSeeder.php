<?php

namespace Database\Seeders;

use App\Models\PenggunaPemira;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PenggunaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // PenggunaPemira::insert([
        //     'nama_pengguna' => 'Admin',
        //     'jurusan' => 'Teknik Informatika',
        //     'username' => 'admin',
        //     'password' => 'a1',
        //     'level' => 'Administrator',
        //     'status' => '0',
        //     'email' => 'pnc@gmail.com'
        // ]);
        PenggunaPemira::factory()->count(20)->create();
    }
}
