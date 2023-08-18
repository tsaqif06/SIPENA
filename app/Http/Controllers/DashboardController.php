<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ruang;
use App\Models\RekapBayar;

class DashboardController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $koderuang = Ruang::where('user_id', $user->id)->value('koderuang');

        // Mengambil rekapbayar untuk koderuang yang sesuai
        $rekapbayar = RekapBayar::where('user_id', $user->id)->first();

        // Inisialisasi belumBayar sebagai true
        $belumBayar = true;

        // Cek apakah user yang sudah terdaftar telah regisrasi ulang
        $registerulang = !$user->password;

        if ($rekapbayar) {
            // Mengambil semua nilai bulan dalam bentuk array
            $bulanValues = collect($rekapbayar->toArray())
                ->except(['id', 'user_id', 'is_dipakai', 'harga', 'created_at', 'updated_at'])
                ->values()
                ->all();

            // Cek apakah semua nilai bulan adalah "Lunas"
            $belumBayar = !empty(array_filter($bulanValues, function ($bulan) {
                return $bulan !== 'Lunas';
            }));
        }

        return view("dashboard", [
            'title' => 'Dashboard',
            'user' => $user,
            'role' => $user->role,
            'koderuang' => $koderuang,
            'belumBayar' => $belumBayar,
            'registerulang' => $registerulang
        ]);
    }
}
