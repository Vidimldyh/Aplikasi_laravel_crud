<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;


Route::get('/mahasiswa/pdf', [MahasiswaController::class, 'cetakPdf'])->name('mahasiswa.cetakPdf');
Route::resource('mahasiswa', MahasiswaController::class);
Route::get('/mahasiswa/export/excel', [MahasiswaController::class, 'exportExcel'])->name('mahasiswa.exportExcel');
