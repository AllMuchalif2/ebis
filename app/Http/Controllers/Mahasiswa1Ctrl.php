<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa1;
use Illuminate\Http\Request;

class Mahasiswa1Ctrl extends Controller
{
    //
    public function index()
    {

        return view('mahasiswa', [
            "title" => "mahasiswa",
            "data" => Mahasiswa1::all(),
        ]);
    }
}
