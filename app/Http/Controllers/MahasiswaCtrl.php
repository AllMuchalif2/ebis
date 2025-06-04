<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaCtrl extends Controller
{
    public function index()
    {
        return view('dataMahasiswa', [
            "title" => "data mahasiswa",
            "data" => Mahasiswa::all(),
        ]);
    }

    public function show($slug)
    {
        return view('skripsi', [
            "title" => "Skripsi Mahasiswa",
            "skripsi" => Mahasiswa::find($slug),
        ]);
    }
    
}
