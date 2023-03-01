<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Livewire\ComponentLogin;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\ComponentOutput;
use App\Http\Livewire\ComponentProfil;
use App\Http\Livewire\ComponentKriteria;
use App\Http\Livewire\ComponentRegister;
use App\Http\Livewire\ComponentAlternatif;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', ComponentLogin::class)->name('login');

Route::get('/register', ComponentRegister::class)->name('register');

Route::post('/logout', function (Request $request) {
    Auth::logout();

    return redirect()->route('login');
})->name('logout');


Route::middleware('auth')->group(function () {
    Route::get('/home', function () {
        return view('home');
    })->name('home');
    Route::get('/kriteria', ComponentKriteria::class)->name('kriteria');
    Route::get('/alternatif', ComponentAlternatif::class)->name('alternatif');
    Route::get('/output', ComponentOutput::class)->name('output');
    Route::get('/profil', ComponentProfil::class)->name('profil');
});
