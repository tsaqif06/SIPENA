<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class RekapBayar extends Model
{
    use HasFactory;

    protected $with = ['user'];

    protected static function booted()
    {
        static::creating(function ($rekapBayar) {
            // Set maxbayar ke akhir bulan dari waktu sekarang
            $rekapBayar->maxbayar = now()->endOfMonth();

            // Cek apakah maxbayar sudah melewati tanggal sekarang
            if ($rekapBayar->maxbayar < now()) {
                // Jika melewati, ubah maxbayar menjadi akhir bulan berikutnya
                $rekapBayar->maxbayar = now()->addMonthNoOverflow()->endOfMonth();
            }
        });
    }

    public function ruang()
    {
        return $this->belongsTo(Ruang::class, 'user_id', 'user_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    protected $guarded = [
        'id'
    ];
}
