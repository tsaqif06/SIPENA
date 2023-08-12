<?php

use App\Models\Ruang;
use App\Models\Pengguna;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RuangController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PengajuanController;
use App\Http\Controllers\PenyewaanController;
use App\Http\Controllers\PembayaranController;
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

// Login //
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'auth']);
Route::post('/logout', [LoginController::class, 'logout']);

// Register //
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

// Homepage //
Route::get('/', function () {
    return view('homepage', [
        'title' => 'Home',
        'role' => 'guest'
    ]);
})->middleware('guest');

Route::redirect('/home', '/dashboard');

// Dashboard //
Route::get('/dashboard', function () {
    return view('dashboard', [
        'title' => 'Dashboard',
        'role' => Auth::user()->role,
        'user' => Auth::user(),
        'ruang' => Ruang::where('user_id', Auth::user()->id)->pluck('koderuang')->first(),
        'belumBayar' => false
    ]);
})->middleware('auth');

// Ruang //
Route::resource('/ruang', RuangController::class)->middleware(['auth']);

// Pembayaran //
Route::get('/pembayaran', [PembayaranController::class, 'index'])->middleware(['auth', 'can:user']);


Route::get('/ketentuan', [KetentuanController::class, 'index']);
// Rekap Bayar //

Route::resource('/rekapbayar', RekapBayarController::class)->middleware('auth');

// Pengguna //
Route::resource('/pengguna', PenggunaController::class)->middleware('auth');

// Penyewaan //
Route::resource('/penyewaan', PenyewaanController::class)->middleware(['auth', 'can:user']);
Route::resource('/pengajuan', PengajuanController::class)->middleware(['auth', 'can:admin']);
Route::get('/api/pengajuan/berkas', [PenggunaController::class, 'getAllBerkas'])->middleware('auth');

// Ketentuan //
Route::get("/ketentuan", function () {
    return view('ketentuan', [
        'title' => 'Ketentuan',
        'role' => auth()->user()->role
    ]);
})->middleware('auth');
