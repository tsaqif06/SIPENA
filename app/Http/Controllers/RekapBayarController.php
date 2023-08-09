<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\RekapBayar;
use App\Http\Requests\StoreRekapBayarRequest;
use App\Http\Requests\UpdateRekapBayarRequest;

class RekapBayarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        dd(Auth::user());
        $role = auth()->user();

        return view("$role.rekapbayar.index", [
            'title' => 'Rekap Bayar',
            'role' => $role
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
    public function store(StoreRekapBayarRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(RekapBayar $rekapBayar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(RekapBayar $rekapBayar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRekapBayarRequest $request, RekapBayar $rekapBayar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RekapBayar $rekapBayar)
    {
        //
    }
}
