<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MasyarakatController; // tambahkan
use App\Http\Controllers\SiswaController; // tambahkan

Route::get('/', function () {
    return view('welcome');
});

// tambahkan
Route::get('/admin/masyarakat', [MasyarakatController::class, "index"]);


Route::get('/admin/siswa', [SiswaController::class, "index"]);
