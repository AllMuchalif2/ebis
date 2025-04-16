<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutCtrl extends Controller
{
    //
    public function index()
    {
        return view('about', [
            "title" => "about",
            "nama" => "Al - Muchalif Arnama",
            "website" => "https://arnama.com",
            "image" => "logo-2.svg",
        ]);
    }
}
