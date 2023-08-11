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
        // return $request
        $validatedData = $request->validate([
            "nama" => "required",
            "status" => "required",
            "koderuang" => "required",
        ]);

        $validatedData['user_id'] = User::where('nama', "{$validatedData['nama']}")->pluck('id')->first();
        unset($validatedData['nama']);

        Ruang::create($validatedData);
        return redirect('/ruang')->with('success', 'Ruang Baru Telah Ditambah!');
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
        ]);
        if($validatedData['is_dipakai'] == 0 ){
            $validatedData['user_id'] = null;
        }
        Ruang::where('id', $request->id)
            ->update($validatedData);

            if($ruang){
                Session::flash('status', 'success');
                Session::flash('message', 'Berhasil mengedit ruang!');
            }

        return redirect('/ruang')->with('success', 'Your Post Has Been Updated!');
        
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
