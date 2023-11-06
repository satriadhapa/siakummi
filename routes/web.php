<?php

use App\Http\Controllers\BerandaController;
use App\Http\Controllers\MahasiswaStudiController;
use App\Http\Controllers\MataKuliahController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProgramStudiController;

//Route::get('/', function () {return view('halaman depan.beranda');});

Route::get('/', [BerandaController::class, 'index'])->name('beranda');
Route::get('/prodi', [ProgramStudiController::class, 'index'])->name('programstudi');
Route::get('/mahasiswa', [MahasiswaStudiController::class, 'index'])->name('mahasiswa');
Route::get('/matakuliah', [MataKuliahController::class, 'index'])->name('matakuliah');
Route::get('/detail-mahasiswa', [MahasiswaStudiController::class, 'details'])->name('detail-mahasiswa');

Route::get('/create-prodi', [ProgramStudiController::class, 'create'])->name('create-programstudi');
Route::get('/create-mahasiswa', [MahasiswaStudiController::class, 'create'])->name('create-mahasiswa');
Route::get('/create-matakuliah', [MataKuliahController::class, 'create'])->name('create-matakuliah');

Route::post('/simpan-mahasiswa', [MahasiswaStudiController::class, 'store'])->name('simpan-mahasiswa');

Route::get('/edit-mahasiswa/{id}', [MahasiswaStudiController::class, 'edit'])->name('edit-mahasiswa');
Route::post('/update-mahasiswa/{id}', [MahasiswaStudiController::class, 'update'])->name('update-mahasiswa');
Route::get('/delete-mahasiswa/{id}', [MahasiswaStudiController::class, 'destroy'])->name('delete-mahasiswa');