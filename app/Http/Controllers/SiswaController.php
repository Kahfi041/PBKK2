<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function Siswa()
    {
        $nama = "Nazir";
        $usia = "20";

        return view("Siswa", compact("nama", "usia"));
    }
}
