<?php

namespace Database\Seeders;

use App\Models\Jurusan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JurusanSeeder extends Seeder
{
    
    public function run(): void
    {
        $data = [
            ['nama_jurusan' => 'Teknik Informatika'],
            ['nama_jurusan' => 'Teknik Mesin'],
            ['nama_jurusan' => 'Teknik Elektronika'],
            ['nama_jurusan' => 'Teknik Listrik'],
            ['nama_jurusan' => 'Rekayas Keamanan Siber'],
            ['nama_jurusan' => 'Teknik Pengendalian Pencemaran Lingkungan'],
            ['nama_jurusan' => 'Pengembangan Produk Agroindustri'],
            ['nama_jurusan' => 'Akuntansi Lembaga Keuangan Syariah'],
            ['nama_jurusan' => 'Rekayasa Multimedia']
        ];
        foreach ($data as $value) {
            Jurusan::insert([
            'nama_jurusan' => $value['nama_jurusan']
        ]);
        }
    }
}
