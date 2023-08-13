<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\RekapBayar;
use App\Models\Ruang;

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
