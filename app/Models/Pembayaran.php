<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\RekapBayar;

class Pembayaran extends Model
{
    use HasFactory;

    public function rekapbayar()
    {
        return $this->belongsTo(RekapBayar::class, 'rekapbayar_id', 'id');
    }

    protected $guarded = [
        'id'
    ];
}
