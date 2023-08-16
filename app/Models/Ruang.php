<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Lantai;

class Ruang extends Model
{
    use HasFactory;

    protected $with = ['user', 'lantai'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function lantai()
    {
        return $this->belongsTo(Lantai::class);
    }

    // Ruang.php (Model Ruang)
    protected static function boot()
    {
        parent::boot();

        static::updating(function ($ruang) {
        });
    }


    protected static function booted()
    {
        parent::boot();

        static::updated(function ($ruang) {
            if ($ruang->isDirty('user_id') && is_null($ruang->user_id)) {
                $ruang->is_dipakai = 0;

                $ruang->rekapbayar()->delete();
            }

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
