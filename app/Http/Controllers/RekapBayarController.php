<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Ruang;
use App\Models\RekapBayar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RekapBayarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = auth()->user();
        if ($user->role === 'admin') {
            $rekapbayars = RekapBayar::with('user.ruang')->get();
        } else {
            $rekapbayars = RekapBayar::whereHas('user', function ($query) use ($user) {
                $query->where('user_id', $user->id);
            })->with('user.ruang')->get();
        }
        
        return view("$user->role.rekapbayar.index", [
            'title' => 'Rekap Bayar',
            'rekapbayars' => $rekapbayars,
            'role' => $user->role
        ]);
    }

    public function sendNotification(Request $request)
    {
        // Variable for Curl
        $token = env("FONTE_TOKEN", "56nM+Nsiq0J4zLVf-1Nf");
        $message = "Halo *{name}*! Sudah waktunya untuk membayar sewa.\n\nAtas nama *{name}* , dengan nominal tagihan total *{var1}* bulan tagihan *{var2}* akan jatuh tempo pada tanggal *{var3}*.\n\nHarap segera melakukan pembayaran sewa anda.\nTerima kasih, Rusunawa Kota Malang.";

        // Store target value from request
        $target = [];
        $request = json_decode($request->target);

        Carbon::setLocale('id');

        foreach($request as $id) {
            $query = RekapBayar::where('user_id', $id)->with('user.ruang')->first();
            
            $result = [
                ($query->user->notelp[0] === '0' ? '62' . ltrim($query->user->notelp, '0') : $query->user->notelp),
                $query->user->nama,
                "Rp " . number_format(($query->ruang->harga + 20000), 0, ',', '.'),
                Carbon::now()->translatedFormat('F Y'),
                Carbon::now()->endOfMonth()->translatedFormat('d F Y')
            ];
            
            array_push($target, join('|', $result));
        }

        $target = join(', ', $target);

        // Curl Process
        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => 'https://api.fonnte.com/send',
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => [
                'target' => $target,
                'message' => $message,
                'delay' => '2',
                'schedule' => '1667433600',
                'countryCode' => '62', // optional
            ],
            CURLOPT_HTTPHEADER => [
                "Authorization: $token" // change TOKEN to your actual token
            ],
            CURLOPT_RETURNTRANSFER => true
        ]);

        $response = curl_exec($curl);

        curl_close($curl);

        return response()->json(['request' => $request, 'response' => json_decode($response)]);
        // return response()->json(['request' => $request, 'response' => $target]);
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
