<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
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

        return redirect('/pengguna')->with('success', 'Your Post Has Been Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
