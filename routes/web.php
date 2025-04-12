<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LaporanController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MasyarakatController;
use App\Http\Controllers\PenggunaController;

Route::get('/admin', [AdminController::class, "index"]);

Route::get('/admin/masyarakat', [MasyarakatController::class, "index"]);

Route::get('/admin/pengguna', [PenggunaController::class, "index"]);

Route::get('/admin/laporan', [LaporanController::class, "index"]);
