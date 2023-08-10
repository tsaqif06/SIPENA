<?php

namespace App\Models;

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

    protected static function booted()
    {
        static::updated(function ($ruang) {
            if ($ruang->isDirty('user_id')) {
                $rekapBayar = new RekapBayar();
                $rekapBayar->user_id = $ruang->user_id;
                $rekapBayar->save();
            }
        });
    }

    protected $guarded = [
        'id'
    ];
}
