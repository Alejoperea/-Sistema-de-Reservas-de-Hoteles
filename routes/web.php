<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\HabitacionController;
// use App\Http\Controllers\HabitacionController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/hoteles', [HotelController::class,'index'])->name('hoteles.index');
    Route::post('/hoteles', [HotelController::class, 'store'])->name('hoteles.store');
    Route::get('/hoteles/create', [HotelController::class, 'create'])->name('hoteles.create');
    

    //rutas de habitaciones
    Route::get('/habitaciones', [HabitacionController::class,'index'])->name('habitaciones.index');
    //Route::get('/habitaciones', [HabitacionController::class,'index'])->name('habitaciones.index');
});

require __DIR__.'/auth.php';
