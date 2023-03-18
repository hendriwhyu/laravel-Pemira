<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Jurusan;
use Illuminate\Http\Request;

class JurusanController extends Controller
{
    public function index()
    {
        $jurusan = Jurusan::all();
        return view('jurusan', ['ListJurusan'=>$jurusan]);
    }
    public function getJurusanById($id)
    {
        $jurusan = Jurusan::find($id);
        return view('pemilih', ['ListPemilih'=>$jurusan]);
    }
}
