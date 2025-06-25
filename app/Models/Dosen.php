<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Dosen extends Model
{
    /** @use HasFactory<\Database\Factories\DosenFactory> */
    use HasFactory;
    protected $guarded = [];
    public function skripsi(): BelongsToMany
    {
        return $this->belongsToMany(Skripsi::class, 'pembimbings', 'nidn', 'KodeSkripsi')
            ->withPivot('peran')
            ->withTimestamps();
    }
}
