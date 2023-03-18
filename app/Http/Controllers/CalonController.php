<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\calon_ketua;


class CalonController extends Controller
{
    public function index()
    {
        $kandidat = calon_ketua::all();
        return view('kandidat', ['kandidatList'=>$kandidat]);
    }
}
