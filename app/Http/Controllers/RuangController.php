<?php

namespace App\Http\Controllers;

use App\Models\Ruang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\session;

class RuangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $role = auth()->user()->role;

        return view("$role.ruang.index", [
            'title' => 'Rekap Ruang',
            'role' => $role,
            'data' => Ruang::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $role = auth()->user()->role;

        return view('admin.ruang.create', [
            'title' => 'Rekap Ruang',
            'role' => $role
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request['user_id'] = User::where('nama', "{$request['nama']}")->pluck('id')->first();
        if (!$request['user_id']){
            return back()->with('error', 'Nama user tidak ditemukan. Coba lagi!');
        } 
        unset($request['nama']);
        // return $request
        $validatedData = $request->validate([
            "user_id" => "required|unique:ruangs",
            "is_dipakai" => "required",
            "koderuang" => "required",
            "rusunawa" => "required",
            "lantai_id" => "required",
        ]);

        // dd($validatedData);

        $tambah = Ruang::create($validatedData);
        if ( $tambah ) {
            Session::flash('status', 'success');
            Session::flash('message', 'Berhasil menambahkan ruang!');
        } else {
            Session::flash('status', 'danger');
            Session::flash('message', 'Gagal menambahkan ruang!');
        }
        return redirect('/ruang');
    }

    /**
     * Display the specified resource.
     */
    public function show(Ruang $ruang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ruang $ruangs, $id)
    {
        $ruangs = Ruang::findorfail($id);
        // dd($ruangs);
        return view('admin.ruang.edit', [
            'title' => 'Rekap Ruang',
            'role' => auth()->user()->role,
            'ruang' => $ruangs
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ruang $ruang)
    {
        // dd ($request->all());
        $validatedData = $request->validate([
            "is_dipakai" => "required",
            "koderuang" => "required",
            "rusunawa" => "required",
            "lantai_id" => "required",
        ]);
        if($validatedData['is_dipakai'] == 0 ){
            $validatedData['user_id'] = null;
        }
        $edit = Ruang::where('id', $request->id)
            ->update($validatedData);

        if ( $edit ) {
            Session::flash('status', 'success');
            Session::flash('message', 'Berhasil Mengedit ruang!');
        } else {
            Session::flash('status', 'danger');
            Session::flash('message', 'Gagal Mengedit ruang!');
        }
        return redirect('/ruang');
        
    }


    public function delete(Ruang $ruangs, $id)
    {
        $Ruangs = User::findorfail($id);
        return view('admin.ruang.delete', [
            'title' => 'Rekap Ruang',
            'role' => auth()->user()->role,
            'ruang' => $ruangs
        ]);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ruang $ruangs, $id)
    {
        $deleteruangs = DB::table('ruangs')->where('id', $id)->delete();
        if($id){
            Session::flash('status', 'success');
            Session::flash('message', 'Berhasil menghapus ruang!');
        }
        return redirect('/ruang');
    }
}
