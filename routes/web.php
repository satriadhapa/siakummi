<?php

use App\Http\Controllers\BerandaController;
use App\Http\Controllers\MahasiswaStudiController;
use App\Http\Controllers\MataKuliahController;
use App\Http\Controllers\ProdiController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProgramStudiController;

//Route::get('/', function () {return view('halaman depan.beranda');});

Route::get('/', [BerandaController::class, 'index'])->name('beranda');
Route::get('/prodi', [ProdiController::class, 'index'])->name('prodi');
Route::get('/mahasiswa', [MahasiswaStudiController::class, 'index'])->name('mahasiswa');
Route::get('/matakuliah', [MataKuliahController::class, 'index'])->name('matakuliah');

Route::get('/detail-mahasiswa', [MahasiswaStudiController::class, 'details'])->name('detail-mahasiswa');

Route::get('/create-prodi', [ProgramStudiController::class, 'create'])->name('create-prodi');
Route::get('/create-mahasiswa', [MahasiswaStudiController::class, 'create'])->name('create-mahasiswa');
Route::get('/create-matakuliah', [MataKuliahController::class, 'create'])->name('create-matakuliah');

// rute crud mahasiswa
Route::post('/simpan-mahasiswa', [MahasiswaStudiController::class, 'store'])->name('simpan-mahasiswa');
Route::get('/edit-mahasiswa/{id}', [MahasiswaStudiController::class, 'edit'])->name('edit-mahasiswa');
Route::post('/update-mahasiswa/{id}', [MahasiswaStudiController::class, 'update'])->name('update-mahasiswa');
Route::get('/delete-mahasiswa/{id}', [MahasiswaStudiController::class, 'destroy'])->name('delete-mahasiswa');

// rute crud matakuliah
Route::post('/simpan-matakuliah', [MataKuliahController::class, 'store'])->name('simpan-matakuliah');
Route::get('/edit-matakuliah/{id}', [MataKuliahController::class, 'edit'])->name('edit-matakuliah');
Route::post('/update-matakuliah/{id}', [MataKuliahController::class, 'update'])->name('update-matakuliah');
Route::get('/delete-matakuliah/{id}', [MataKuliahController::class, 'destroy'])->name('delete-matakuliah');