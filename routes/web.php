<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RekapBayarController;
use App\Http\Controllers\RuangController;
use App\Http\Controllers\KetentuanController;

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
})->middleware('guest');

Route::redirect('/home', '/dashboard');

Route::get('/dashboard', function () {
    return view('dashboard', [
        'title' => 'Dashboard',
        'role' => Auth::user()->role,
        'user' => Auth::user()
    ]);
})->middleware('auth');

Route::get('/tabelpengguna', function () {
    return view('tabelpengguna', [
        'title' => 'Tabel Pengguna',
        'role' => 'user'
    ]);
})->middleware('auth');

Route::get('/ketentuan', [KetentuanController::class, 'index']);
Route::get('/ruang', [RuangController::class, 'index']);
Route::get('/rekapbayar', [RekapBayarController::class, 'index'])->middleware('auth');
