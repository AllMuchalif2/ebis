<?php

namespace App\Models;

use App\Models\Mahasiswa;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Skripsi extends Model
{
    /** @use HasFactory<\Database\Factories\SkripsiFactory> */
    use HasFactory;
    protected $guarded = [];

    public function mahasiswa(): BelongsTo
    {
        return $this->belongsTo(Mahasiswa::class, 'nim', 'nim');

    }

    public function dosen(): BelongsToMany
    {
        return $this->belongsToMany(Skripsi::class, 'pembimbings', 'KodeSkripsi',  'nidn')
            ->withPivot('peran')
            ->withTimestamps();
    }

}
