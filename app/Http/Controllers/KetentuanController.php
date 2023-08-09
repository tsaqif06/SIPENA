<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KetentuanController extends Controller
{
    public function index()
    {
        $role = auth()->user()->role;

        return view("$role.Ketentuan.index", [
            'title' => 'Ketentuan',
            'role' => $role
        ]);
    }
}
