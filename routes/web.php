<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MataPelajaranController;
use App\Http\Controllers\SubMataPelajaranController;
use Illuminate\Support\Facades\Route;


// login
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate'])->name('authenticate');
// logout
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');


// midleware auth group
Route::middleware(['auth'])->group(function () {
    Route::get('/', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/mata-pelajaran',[MataPelajaranController::class, 'index'])->name('admin.mata_pelajaran');
    Route::get('/mata-pelajaran/create',[MataPelajaranController::class, 'create'])->name('admin.mata_pelajaran.create');
    Route::post('/mata-pelajaran/store',[MataPelajaranController::class, 'store'])->name('admin.mata_pelajaran.store');
    Route::get('/mata-pelajaran/{id}/edit',[MataPelajaranController::class, 'edit'])->name('admin.mata_pelajaran.edit');
    Route::get('/mata-pelajaran/{id}',[MataPelajaranController::class, 'show'])->name('admin.mata_pelajaran.show');
    Route::put('/mata-pelajaran/{id}',[MataPelajaranController::class, 'update'])->name('admin.mata_pelajaran.update');
    Route::delete('/mata-pelajaran/{id}',[MataPelajaranController::class, 'destroy'])->name('admin.mata_pelajaran.destroy');
    
    // admin.sub_mata_pelajaran
    Route::get('/sub-mata-pelajaran',[SubMataPelajaranController::class, 'index'])->name('admin.sub_mata_pelajaran');
    Route::get('/sub-mata-pelajaran/create',[SubMataPelajaranController::class, 'create'])->name('admin.sub_mata_pelajaran.create');
    Route::post('/sub-mata-pelajaran/store',[SubMataPelajaranController::class, 'store'])->name('admin.sub_mata_pelajaran.store');
    Route::get('/sub-mata-pelajaran/{id}/edit',[SubMataPelajaranController::class, 'edit'])->name('admin.sub_mata_pelajaran.edit');
    Route::get('/sub-mata-pelajaran/{id}',[SubMataPelajaranController::class, 'show'])->name('admin.sub_mata_pelajaran.show');
    Route::put('/sub-mata-pelajaran/{id}',[SubMataPelajaranController::class, 'update'])->name('admin.sub_mata_pelajaran.update');
    Route::delete('/sub-mata-pelajaran/{id}',[SubMataPelajaranController::class, 'destroy'])->name('admin.sub_mata_pelajaran.destroy');
    
});
