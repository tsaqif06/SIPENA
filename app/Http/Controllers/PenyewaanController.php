<?php

namespace App\Http\Controllers;

use App\Models\Pengajuan;
use App\Models\Ruang;
use Illuminate\Contracts\Support\ValidatedData;
use Illuminate\Http\Request;

class PenyewaanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = auth()->user();

        return view("user.pengajuan.index", [
            'title' => 'Penyewaan',
            'user' => $user,
            'role' => 'user',
            'data' => [
                Pengajuan::where('user_id', $user->id)->first(),
                Ruang::where('user_id', $user->id)->first()
            ],
            'ruangkosong' => Ruang::where('is_dipakai', 0)->pluck('koderuang')
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
        $request['user_id'] = auth()->user()->id;

        $validateData = $request->validate([
            'user_id' => 'required|unique:pengajuans,user_id',
            'ruang1' => 'required',
            'ruang2' => 'required',
            'ruang3' => 'required',
            'suratpermohonan' => 'required|file|mimes:pdf|max:2048',
            'suratkesanggupan' => 'required|file|mimes:pdf|max:2048',
            'suratpernyataan' => 'required|file|mimes:pdf|max:2048'
        ]);
        
        $validateData['pilihanruang'] = json_encode([
            $validateData['ruang1'],
            $validateData['ruang2'],
            $validateData['ruang3'],
        ]);

        unset($validateData['ruang1']);
        unset($validateData['ruang2']);
        unset($validateData['ruang3']);

        $validateData['suratpermohonan'] = $request->file('suratpermohonan')->store('berkas/suratpermohonan');
        $validateData['suratkesanggupan'] = $request->file('suratkesanggupan')->store('berkas/suratkesanggupan');
        $validateData['suratpernyataan'] = $request->file('suratpernyataan')->store('berkas/suratpernyataan');

        Pengajuan::create($validateData);

        return back()->with('success', 'Data berhasil dikirim! Tunggu notifikasi selanjutnya untuk info lebih lanjut.');
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
