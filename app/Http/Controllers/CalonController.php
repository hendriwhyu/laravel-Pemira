<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PenggunaPemira;


class CalonController extends Controller
{
    public function index()
    {
        $kandidat = PenggunaPemira::all();
        return view('kandidat', ['kandidatList'=>$kandidat]);
    }
}
