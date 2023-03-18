<?php

namespace Database\Seeders;

use App\Models\CalonKetua;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KandidatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CalonKetua::insert([
            'organisasi' => 'Badan Eksekutif Mahasiswa',
            'no_urut' => 1,
            'nama_calon' => 'X-Tentacion',
            'foto_calon' => 'gg.jpg',
            'visimisi_calon' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur, nam.'
        ]);
    }
}
