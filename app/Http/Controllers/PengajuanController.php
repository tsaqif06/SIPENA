<?php

namespace App\Http\Controllers;

use App\Models\Pengajuan;
use App\Models\Ruang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PengajuanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.rekapsewa.index', [
            'title' => 'Pengajuan Sewa',
            'role' => 'admin',
            'data' => Pengajuan::where('accept', 0)->get(),
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Pengajuan $pengajuan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pengajuan $pengajuan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pengajuan $pengajuan)
    {
        $request->validate([
            'ruang' => 'required'
        ]);

        $updateDataRuang = Ruang::where('koderuang', $request['ruang'])->where('is_dipakai', 0)
        ->update([
            'user_id' => $pengajuan->user_id,
            'is_dipakai' => 1
        ]);

        if($updateDataRuang) {
            Pengajuan::find($pengajuan->id)->update(['accept' => 1]);
    
            return back()->with('success', 'Data ruang berhasil diperbarui!');
        }
        
        return back()->with('error', 'Terjadi kesalahan saat memperbarui data ruang.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pengajuan $pengajuan)
    {
        $deleteFile = Storage::deleteDirectory('berkas/' . str_replace(" ", "_", $pengajuan->user->nama));

        if ($deleteFile) {
            Pengajuan::destroy($pengajuan->id);
    
            return back()->with('success', 'Data berhasil dihapus!');
        }
        
        return back()->with('error', 'Terjadi kesalahan saat memperbarui data ruang.');
    }


    // Mengambil semua data path berkas

    public function getAllBerkas(Request $request)
    {
        $dataBerkas = Pengajuan::where('id', $request->id)->first();

        if ($dataBerkas) {
            return response()->json($dataBerkas->makeHidden(['id', 'user_id', 'accept', 'lantai_id', 'created_at', 'updated_at', 'user']));
        }

        return response()->json([]);
    }
}
