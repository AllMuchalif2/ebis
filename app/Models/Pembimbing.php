<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembimbing extends Model
{
    /** @use HasFactory<\Database\Factories\PembimbingFactory> */
    use HasFactory;
    protected $guarded = [];


    public function skripsi()
    {
        return $this->belongsTo(Skripsi::class, 'KodeSkripsi', 'KodeSkripsi');
    }

    public function dosen()
    {
        return $this->belongsTo(Dosen::class, 'nidn', 'nidn');
    }
}
