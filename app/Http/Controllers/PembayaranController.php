<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use App\Models\RekapBayar;
use App\Models\User;
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

        Carbon::setLocale('id');
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

    public function checkout(Request $request)
    {
        $user = User::where('nama', $request->nama)
            ->where('notelp', $request->notelp)
            ->first();

        $rekapbayar = RekapBayar::where('user_id', $user->id)->first();

        $request->request->add(['rekapbayar_id' => $rekapbayar->id, 'tanggalbayar' => date('Y-m-d'), 'status' => 'Belum Lunas']);

        unset($request['nama'], $request['notelp'], $request['pdam'], $request['harga']);
        dd($request->all());

        $order = Pembayaran::create($request->all());

        \Midtrans\Config::$serverKey = config('midtrans.server_key');
        \Midtrans\Config::$isProduction = config('midtrans.is_production');
        \Midtrans\Config::$isSanitized = true;
        \Midtrans\Config::$is3ds = true;

        $params = [
            'transaction_details' => [
                'order_id' => $order->id,
                'gross_amount' => $order->totalbayar,
            ],
            'customer_details' => [
                'first_name' => $request->nama,
                'last_name' => '',
                'phone' => $request->notelp,
            ],
        ];

        $snapToken = \Midtrans\Snap::getSnapToken($params);
        return view('checkout', compact('snapToken', 'order'));
    }
}
