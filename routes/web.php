<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\karyawanController;
use App\Http\Controllers\landingPageController;

// Route untuk halaman utama
Route::get('/', [landingPageController::class, 'index'])->name('home');

Route::prefix('/karyawan')->name('karyawan.')->group(function() {
    Route::get('/index', [KaryawanController::class, 'index'])->name('index');
    Route::get('/create', [KaryawanController::class, 'create'])->name('create');
    Route::post('/store', [KaryawanController::class, 'store'])->name('store');
    
    Route::get('/{karyawan}', [KaryawanController::class, 'show'])->name('show'); // View details
    Route::get('/{karyawan}/edit', [KaryawanController::class, 'edit'])->name('edit'); // Edit form
    
    Route::patch('/{id}', [KaryawanController::class, 'update'])->name('update'); // Update action
    Route::delete('/{id}', [KaryawanController::class, 'destroy'])->name('delete'); // Delete action
});
