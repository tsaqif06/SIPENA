<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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
        'role' => 'admin'
    ]);
});

Route::get('/tabelpengguna', function(){
    return view('tabelpengguna', [
        'title' => 'Dashboard',
        'role' => 'user'
    ]);
});

Route::get("/ketentuan", function(){
    return view('ketentuan', [
        'role'=>'user'
    ]);

// Rute hanya dapat diakses oleh user
Route::middleware(['auth', 'role:user'])->group(function () {
    Route::get('/rekapbayar', 'RekapBayarController@index');
    // ... definisi rute lain untuk user
});

// Rute hanya dapat diakses oleh admin
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/rekapbayar', 'RekapBayarController@admin');
    // ... definisi rute lain untuk admin

});
