<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use App\Models\Ruang;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bulan = [
            'jan' => 'Januari',
            'feb' => 'Februari',
            'mar' => 'Maret',
            'apr' => 'April',
            'mei' => 'Mei',
            'jun' => 'Juni',
            'jul' => 'Juli',
            'aug' => 'Agustus',
            'sep' => 'September',
            'okt' => 'Oktober',
            'nov' => 'November',
            'des' => 'Desember',
        ];

        $user = auth()->user();
        $ruang = Ruang::where('user_id', $user->id)->first();

        Carbon::setLocale('id'); // Atur locale bahasa Indonesia
        $bayar = [
            'bulanSekarang' => Carbon::now()->translatedFormat('F'),
            'pdam' => 20000,
        ];
        $bayar['totalbayar'] = ($ruang->harga ?? 0) + $bayar['pdam'];
        return view('user.pembayaran.index', [
            'title' => 'Pembayaran',
            'ruang' => $ruang ?? null,
            'bayar' => $bayar,
            'bulan' => $bulan,
            'role' => $user->role
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Pembayaran $pembayaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pembayaran $pembayaran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pembayaran $pembayaran)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pembayaran $pembayaran)
    {
        //
    }
}
