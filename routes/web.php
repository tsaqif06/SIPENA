<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RekapBayarController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'auth']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/', function () {
    return view('homepage', [
        'title' => 'Home',
        'role' => 'guest'
    ]);
});

Route::get('/dashboard', function () {
    return view('dashboard', [
        'title' => 'Dashboard',
        'role' => Auth::user()->role
    ]);
})->middleware('auth');

Route::get('/tabelpengguna', function () {
    return view('tabelpengguna', [
        'title' => 'Tabel Pengguna',
        'role' => 'user'
    ]);
});

Route::get("/ketentuan", function () {
    return view('ketentuan', [
        'title' => 'Ketentuan',
        'role' => 'user'
    ]);
});

Route::get('/rekapbayar', [RekapBayarController::class, 'index'])->middleware('auth');
