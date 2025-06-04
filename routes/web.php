<?php

use App\Models\Mahasiswa;
use App\Http\Controllers\HomeCtrl;

use App\Http\Controllers\AboutCtrl;
use App\Http\Controllers\DosenCtrl;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaCtrl;
use App\Http\Controllers\Mahasiswa1Ctrl;

// Route::get('/', function () {
//     return view('welcome');
// });



Route::get('/',[HomeCtrl::class, 'index']);
Route::get('/mahasiswa', [Mahasiswa1Ctrl::class, 'index']);
Route::get('/about',[AboutCtrl::class, 'index']);


Route::get('/mahasiswa/{slug}', [MahasiswaCtrl::class, 'show']);

Route::get('/data-mahasiswa', [MahasiswaCtrl::class, 'index']);
Route::get('/data-dosen', [DosenCtrl::class, 'index']);