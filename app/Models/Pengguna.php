<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    use HasFactory;
    protected $fillable = ['nama', 'tempatLahir', 'tanggalLahir', 'alamat', 'pekerjaan', 'NoHP'];
    protected $table = 'user';
}
