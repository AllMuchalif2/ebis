<?php

namespace App\Models;

use App\Models\Skripsi;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;



class Mahasiswa extends Model
{
    //
    use HasFactory;
    protected $guarded = [];

    public function skripsi() : HasOne
    {
        return $this->hasOne(Skripsi::class, 'nim', 'nim');
        
    }
}
