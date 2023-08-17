<?php

namespace App\Http\Controllers;

use App\Models\Pengajuan;
use App\Models\Ruang;
use Illuminate\Contracts\Support\ValidatedData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
            ]
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
            'user_id' => 'required|unique:pengajuans',
            'lantai_id' => 'required',
            'fotoktp_suami' => 'required|file|mimes:jpg,jpeg|max:2048',
            'fotoktp_istri' => 'required|file|mimes:jpg,jpeg|max:2048',
            'fotokk' => 'required|file|mimes:jpg,jpeg|max:2048',
            'berkas_statusnikah' => 'required|file|mimes:jpg,jpeg|max:2048',
            'surat_ket_rumah' => 'required|file|mimes:pdf,jpg,jpeg|max:2048',
            'surat_ket_pendapatan' => 'required|file|mimes:pdf,jpg,jpeg|max:2048',
            'surat_ket_kepolisian' => 'required|file|mimes:pdf,jpg,jpeg|max:2048',
            'pasfoto_suami' => 'required|file|mimes:jpg,jpeg|max:2048',
            'pasfoto_istri' => 'required|file|mimes:jpg,jpeg|max:2048',
            'surat_permohonan' => 'required|file|mimes:pdf|max:2048',
            'surat_kesanggupan' => 'required|file|mimes:pdf|max:2048',
            'surat_pernyataan' => 'required|file|mimes:pdf|max:2048',
            'surat_rekomendasi' => 'required|file|mimes:pdf,jpg,jpeg|max:2048'
        ]);

        $validateData['fotoktp_suami'] = $request->file('fotoktp_suami')->store("berkas/" . str_replace(" ", "_", auth()->user()->nama) . "/fotoktp_suami");
        $validateData['fotoktp_istri'] = $request->file('fotoktp_istri')->store("berkas/" . str_replace(" ", "_", auth()->user()->nama) . "/fotoktp_istri");
        $validateData['fotokk'] = $request->file('fotokk')->store("berkas/" . str_replace(" ", "_", auth()->user()->nama) . "/fotokk");
        $validateData['berkas_statusnikah'] = $request->file('berkas_statusnikah')->store("berkas/" . str_replace(" ", "_", auth()->user()->nama) . "/berkas_statusnikah");
        $validateData['surat_ket_rumah'] = $request->file('surat_ket_rumah')->store("berkas/" . str_replace(" ", "_", auth()->user()->nama) . "/surat_ket_rumah");
        $validateData['surat_ket_pendapatan'] = $request->file('surat_ket_pendapatan')->store("berkas/" . str_replace(" ", "_", auth()->user()->nama) . "/surat_ket_pendapatan");
        $validateData['surat_ket_kepolisian'] = $request->file('surat_ket_kepolisian')->store("berkas/" . str_replace(" ", "_", auth()->user()->nama) . "/surat_ket_kepolisian");
        $validateData['pasfoto_suami'] = $request->file('pasfoto_suami')->store("berkas/" . str_replace(" ", "_", auth()->user()->nama) . "/pasfoto_suami");
        $validateData['pasfoto_istri'] = $request->file('pasfoto_istri')->store("berkas/" . str_replace(" ", "_", auth()->user()->nama) . "/pasfoto_istri");
        $validateData['surat_permohonan'] = $request->file('surat_permohonan')->store("berkas/" . str_replace(" ", "_", auth()->user()->nama) . "/surat_permohonan");
        $validateData['surat_kesanggupan'] = $request->file('surat_kesanggupan')->store("berkas/" . str_replace(" ", "_", auth()->user()->nama) . "/surat_kesanggupan");
        $validateData['surat_pernyataan'] = $request->file('surat_pernyataan')->store("berkas/" . str_replace(" ", "_", auth()->user()->nama) . "/surat_pernyataan");
        $validateData['surat_rekomendasi'] = $request->file('surat_rekomendasi')->store("berkas/" . str_replace(" ", "_", auth()->user()->nama) . "/surat_rekomendasi");

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
