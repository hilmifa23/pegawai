<?php

use App\Http\Controllers\DepartemenController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PegawaiController;
use Illuminate\Support\Facades\Route;

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

// Login
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login/proses', [LoginController::class,'login_proses'])->name('login.proses');

// Logout
Route::get('/logout', [LoginController::class,'logout'])->name('logout');

Route::middleware(['auth'])->group(function(){

    // Dashboard
    Route::get('/', [HomeController::class, 'index'])->name('dashboard');

    // Departemen
    Route::get('/departemen', [DepartemenController::class, 'index'])->name('departemen.index');
    Route::get('/departemen/create', [DepartemenController::class, 'create'])->name('departemen.create');
    Route::post('/departemen/store', [DepartemenController::class, 'store'])->name('departemen.store');
    Route::get('/departemen/edit/{id}', [DepartemenController::class, 'edit'])->name('departemen.edit');
    Route::put('/departemen/update/{id}', [DepartemenController::class, 'update'])->name('departemen.update');
    Route::delete('/departemen/delete/{id}', [DepartemenController::class, 'delete'])->name('departemen.delete');

    // Pegawai
    Route::get('/pegawai', [PegawaiController::class, 'index'])->name('pegawai.index');
    Route::get('/pegawai/create', [PegawaiController::class, 'create'])->name('pegawai.create');
    Route::post('/pegawai/store', [PegawaiController::class, 'store'])->name('pegawai.store');
    Route::get('/pegawai/edit/{id}', [PegawaiController::class, 'edit'])->name('pegawai.edit');
    Route::put('/pegawai/update/{id}', [PegawaiController::class, 'update'])->name('pegawai.update');
    Route::delete('/pegawai/delete/{id}', [PegawaiController::class, 'delete'])->name('pegawai.delete');
    Route::get('/pegawai/{id}', [PegawaiController::class, 'detail'])->name('pegawai.detail');
});

