<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;

class DosenCtrl extends Controller
{
    //
    public function index() {
        return view('dosen',[
            "title" => "data dosen",
            "data" => Dosen::all(),
        ]);
    }
}
