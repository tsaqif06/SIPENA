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
        parent::boot();

        static::updated(function ($ruang) {
            if ($ruang->user_id !== null && !$ruang->rekapBayarExists()) {
                $rekapBayar = new RekapBayar();
                $rekapBayar->user_id = $ruang->user_id;
                $rekapBayar->maxbayar = now()->endOfMonth();
                $rekapBayar->save();
            }
        });
    }

    
    public function rekapBayarExists()
    {
        return RekapBayar::where('user_id', $this->user_id)->exists();
    }
    protected $guarded = [
        'id'
    ];
}
