<?php

namespace App\Observers;

use App\Models\Ruang;

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
}
