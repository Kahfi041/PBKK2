<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function Buku()
    {
        $nama = "fisika";
        $penulis = "Nazir";

        return view("Buku", compact("nama", "penulis"));
    }
}
