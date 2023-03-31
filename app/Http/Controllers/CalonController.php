<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\CalonKetua;
use Illuminate\Http\Request;


class CalonController extends Controller
{
    public function index()
    {
        $kandidat = CalonKetua::all();
        return view('kandidat', ['kandidatList'=>$kandidat]);
    }
}
