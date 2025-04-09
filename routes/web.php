<?php

use App\Http\Controllers\MahasiswaCtrl;
use App\Models\Mahasiswa;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });



Route::get('/', function () {
    return view('home', [
        "title" => "home",
    ]);
});
Route::get('/mahasiswa', [MahasiswaCtrl::class, 'index']);
Route::get('/about', function () {
    return view('about', [
        "title" => "about",
        "nama" => "Al - Muchalif Arnama",
        "website" => "https://arnama.com",
        "image" => "logo-2.svg",
    ]);
});


Route::get('/mahasiswa/{slug}', [MahasiswaCtrl::class, 'show']);