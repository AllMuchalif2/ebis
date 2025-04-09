<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });



Route::get('/', function () {
    return view('home', [
        "title" => "home",
    ]);
});
Route::get('/mahasiswa', function () {
    $skripsi = [
        [
            "title" => "Penerapan laravel pada...",
            "slug" => "penerapan-laravel-pada",
            "nim" => "23.230.0001",
            "nama" => "lorem",
            "isi" => "lorem ipsum dolor sit amet con et pre commodo",
        ],
        [
            "title" => "Penerapan Code Igniter pada...",
            "slug" => "penerapan-codeigniter-pada",
            "nim" => "23.230.0002",
            "nama" => "ipsum",
            "isi" => "dolor sit amet con et pre commodo",
        ]
    
    ];
    return view('mahasiswa', [
        "title" => "mahasiswa",
        "data" => $skripsi

    ]);
});
Route::get('/about', function () {
    return view('about', [
        "title" => "about",
        "nama" => "Al - Muchalif Arnama",
        "website" => "https://arnama.com",
        "image" => "logo-2.svg",
    ]);
});


Route::get('/mahasiswa/{slug}', function ($slug) {
    $skripsi = [
        [
            "title" => "Penerapan laravel pada...",
            "slug" => "penerapan-laravel-pada",
            "nim" => "23.230.0001",
            "nama" => "lorem",
            "isi" => "lorem ipsum dolor sit amet con et pre commodo",
        ],
        [
            "title" => "Penerapan Code Igniter pada...",
            "slug" => "penerapan-codeigniter-pada",
            "nim" => "23.230.0002",
            "nama" => "ipsum",
            "isi" => "dolor sit amet con et pre commodo",
        ]
    
    ];
    $new_skripsi =[];
    foreach ($skripsi as $isi) {
        if ($isi['slug'] == $slug) {
            $new_skripsi = $isi;
        }
    }
    return view('skripsi', [
        "title" => "Skripsi Mahasiswa",
        "skripsi" => $new_skripsi,
    ]);
});