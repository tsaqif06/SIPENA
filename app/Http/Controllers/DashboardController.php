<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ruang;

class DashboardController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $koderuang = Ruang::where('user_id', $user->id)->get()->pluck('koderuang')->first();
        
        return view("dashboard", [
            'title' => 'Dashboard',
            'user' => $user,
            'role' => $user->role,
            'koderuang' => $koderuang
        ]);
    }
}
