<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Ruang;

class Lantai extends Model
{
    use HasFactory;

    public function lantai()
    {
        return $this->hasMany(Ruang::class);
    }
}
