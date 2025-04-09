<?php

namespace App\Models;


class Mahasiswa 
{
    private static $skripsi = [
        [
            "title" => "Penerapan laravel pada...",
            "slug" => "penerapan-laravel-pada",
            "nim" => "23.230.0001",
            "nama" => "lorem",
            "isi" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut corporis rem et tempore nemo unde dolorem facilis deserunt nisi totam.",
        ],
        [
            "title" => "Penerapan Code Igniter pada...",
            "slug" => "penerapan-codeigniter-pada",
            "nim" => "23.230.0002",
            "nama" => "ipsum",
            "isi" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi, qui!",
        ]
    
    ];

    public static function all()
    {

        return collect(self::$skripsi);
    }

    public static function find($slug)
    {
        $data = static::all();
        /*
        $new_skripsi = [];
        foreach ($data as $isi) {
            if ($isi['slug'] === $slug) {
                $new_skripsi = $isi;
            }
        }
            */
        return $data->firstWhere('slug', $slug);
    }
}
