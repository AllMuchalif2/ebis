<?php

use App\Http\Controllers\AboutCtrl;
use App\Http\Controllers\HomeCtrl;
use App\Http\Controllers\MahasiswaCtrl;
use App\Models\Mahasiswa;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });



Route::get('/',[HomeCtrl::class, 'index']);
Route::get('/mahasiswa', [MahasiswaCtrl::class, 'index']);
Route::get('/about',[AboutCtrl::class, 'index']);


Route::get('/mahasiswa/{slug}', [MahasiswaCtrl::class, 'show']);