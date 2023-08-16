<?php

namespace App\Http\Controllers;

use App\Models\Ruang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function auth(Request $request)
    {
        $credentials = $request->validate([
            "email" => "required|email:dns",
            "password" => "required|min:3|max:255"
        ]);

        $remember = $request->has('remember');

        if (Auth::attempt($credentials, $remember)) {
            $request->session()->regenerate();

            return redirect('/dashboard');
        }

        return back()->with('failed', 'Login Gagal!');
    }

    public function penghuni()
    {
        return view('loginpenghuni');
    }

    public function authpenghuni(Request $request)
    {
        $request->validate([
            "nama" => "required",
            "koderuang" => "required"
        ]);

        $ruang = Ruang::where(['koderuang' => $request->koderuang])->first();

        $auth = $ruang ? ($ruang->user->nama === $request->nama && $ruang->user->password === null) : false;


        if ($auth) {
            return redirect('/registerulang')->with('uuid', $ruang->user->uuid);
        }

        return back()->with('failed', 'Login Gagal! User tidak ditemukan atau user telah te-registrasi!');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
