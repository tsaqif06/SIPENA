<?php

namespace App\Observers;

use App\Models\Ruang;
use App\Models\RekapBayar;

class RuangObserver
{
    private $hargaByAngka = [
        1 => 75000,
        2 => 175000,
        3 => 150000,
        4 => 125000,
        5 => 100000,
        6 => 500000,
    ];

    public function created(Ruang $ruang)
    {
        // Mengambil angka setelah huruf 'L' pada koderuang
        preg_match('/L(\d+)/', $ruang->koderuang, $matches);
        if (isset($matches[1])) {
            $angka = intval($matches[1]);

            // Menggunakan array $hargaByAngka untuk mengambil harga berdasarkan angka
            if (array_key_exists($angka, $this->hargaByAngka)) {
                $harga = $this->hargaByAngka[$angka];
                $ruang->update(['harga' => $harga]);
            }
        }
    }

    public function updating(Ruang $ruang)
    {
        // Cek apakah user_id akan diubah menjadi NULL
        if ($ruang->isDirty('user_id') && $ruang->user_id === null) {
            // Hapus rekaman dari tabel RekapBayar yang memiliki user_id yang sama dengan nilai user_id yang diubah menjadi NULL
            RekapBayar::where('user_id', $ruang->getOriginal('user_id'))->delete();
        }
    }
}
