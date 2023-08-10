<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Ruang extends Model
{
    use HasFactory;

    protected $with = ['user'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    protected $guarded = [
        'id'
    ];
}
