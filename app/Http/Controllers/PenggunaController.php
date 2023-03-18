<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\PenggunaPemira;
use Illuminate\Http\Request;
use App\Models\jurusan;

class PenggunaController extends Controller
{
    public function index()
    {
        $pengguna = PenggunaPemira::all();
        return view('pemilih', ['ListPemilih'=>$pengguna]);
    }
    public function pemilih(){
        $jurusan = jurusan::all();
        return view('jurusan', ['ListJurusan'=>$jurusan]);
    }
}
