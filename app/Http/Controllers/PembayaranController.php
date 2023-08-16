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
        $bayarRekap = RekapBayar::where('user_id', $user->id)->first();
        $bayarBuatan = [
            'bulanSekarang' => Carbon::now()->translatedFormat('F'),
            'pdam' => 20000,
        ];
        $bayarBuatan['totalbayar'] = ($ruang->lantai->harga ?? 0) + $bayarBuatan['pdam'];
        $bayar = array_merge($bayarRekap->toArray(), $bayarBuatan);
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
        $request['totalbayar'] = (int)str_replace(['Rp.', '.'], '', $request->totalbayar);

        $nama = $request['nama'];
        $notelp = $request['notelp'];
        $pdam = $request['pdam'];
        $harga = $request['harga'];
        $koderuang = $request['koderuang'];

        unset($request['nama'], $request['notelp'], $request['pdam'], $request['harga'], $request['koderuang'], $request['koderuang']);
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
                'first_name' => $nama,
                'last_name' => '',
                'phone' => $notelp,
            ],
        ];

        $snapToken = \Midtrans\Snap::getSnapToken($params);
        $title = "Checkout";
        $role = 'user';
        return view('user.pembayaran.checkout', compact(
            'snapToken',
            'order',
            'nama',
            'notelp',
            'koderuang',
            'pdam',
            'harga',
            'title',
            'role'
        ));
    }

    public function callback(Request $request)
    {
        $serverKey = config('midtrans.server_key');
        $hashed = hash("sha512", $request->order_id . $request->status_code . $request->gross_amount . $serverKey);
        echo $hashed. '<br>';
        var_dump($request->signature_key. "<br>");
        var_dump($request);
        if ($hashed == $request->signature_key) {
            echo "hash = signature";
            if ($request->transaction_status == 'capture' or $request->transaction_status == 'settlement') {
                $order = Pembayaran::find($request->order_id);
                $order->update(['status' => "Lunas"]);

                $rekapbayar = RekapBayar::find($order->rekapbayar_id);
                $rekapbayar->update([$order->bulan => "Lunas"]);

                echo "Berhasil";
            }
        } else {
            echo "Gagal";
        }
    }

    public function invoice($id)
    {
        $order = Pembayaran::find($id);
        $title = "Invoice";
        $role = 'user';
        return view('user.pembayaran.invoice', compact('order', 'title', 'role'));
    }
}
