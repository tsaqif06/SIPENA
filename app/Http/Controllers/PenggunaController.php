<?php

namespace App\Http\Controllers;

use App\Models\Pengajuan;
use App\Models\Pengguna;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class PenggunaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.pengguna.index', [
            'title' => 'Tabel Pengguna',
            'role' => auth()->user()->role,
            'users' => User::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $role = auth()->user()->role;

        return view('admin.pengguna.create', [
            'title' => 'Tambah Data Pengguna',
            'role' => $role
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            "nama" => "required",
            "tempatlahir" => "required",
            "tanggallahir" => "required",
            "alamat" => "required",
            "pekerjaan" => "required",
            "notelp" => "required",
            "jmlkeluarga" => "integer",
            "email" => "required",
            "password" => "required"  // You can adjust the validation rule based on your needs
        ]);


        // Find or create a user based on the 'nama' field
        $user = User::firstOrCreate(['nama' => $validatedData['nama']], $validatedData);

        if($user){
            Session::flash('status', 'success');
            Session::flash('message', 'Berhasil menambahkan pengguna!');
        }

        return redirect('/pengguna')->with('success', 'Pengguna Baru Telah Ditambah!');
    }



    /**
     * Display the specified resource.
     */
    public function show(User $users)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $users, $id)
    {
        // dd($users->all());
        $users = User::findorfail($id);
        // dd($users);
        return view('admin.pengguna.edit', [
            'title' => 'Tabel Pengguna',
            'role' => auth()->user()->role,
            'user' => $users
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $validatedData = $request->validate([
            "nama" => "required|max:255",
            "tempatlahir" => "required|max:255",
            "tanggallahir" => "required|date",
            "alamat" => "required|max:255",
            "pekerjaan" => "required|max:255",
            "notelp" => "required|max:20",
            // "jmlkeluarga" => "required|numeric"
        ]);

        User::where('id', $request->id)
            ->update($validatedData);
            if($user){
                Session::flash('status', 'success');
                Session::flash('message', 'Berhasil mengedit pengguna!');
            }

        return redirect('/pengguna')->with('success', 'Your Post Has Been Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */

    public function delete(User $users, $id)
    {
        $users = User::findorfail($id);
        return view('admin.pengguna.delete', [
            'title' => 'Tabel Pengguna',
            'role' => auth()->user()->role,
            'users' => $users
        ]);

    }


    public function destroy(User $users, $id)
    {
        // dd($id);
        $deletepengguna = DB::table('users')->where('id', $id)->delete();
        if($id){
            Session::flash('status', 'success');
            Session::flash('message', 'Berhasil menghapus pengguna!');
        }
        return redirect('/pengguna');
    }

    public function getAllBerkas(Request $request)
    {
        $dataBerkas = Pengajuan::where('user_id', $request->id)->get(['suratpermohonan', 'suratkesanggupan', 'suratpernyataan'])->first();

        return response()->json($dataBerkas);
    }
}
