<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\HabitacionController;
use App\Http\Controllers\ReservaController;
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
    Route::delete('/hoteles/{hotel}', [HotelController::class, 'destroy'])->name('hoteles.destroy');
    Route::put('/hoteles/{hotel}', [HotelController::class, 'update'])->name('hoteles.update');
    Route::get('/hoteles/{hotel}/edit', [HotelController::class, 'edit'])->name('hoteles.edit');
    
    

    //rutas de habitaciones
    Route::get('/habitaciones', [HabitacionController::class,'index'])->name('habitaciones.index');
    //Route::get('/habitaciones', [HabitacionController::class,'index'])->name('habitaciones.index');
    Route::post('/habitaciones', [HabitacionController::class, 'store'])->name('habitaciones.store');
    Route::get('/habitaciones/create', [HabitacionController::class, 'create'])->name('habitaciones.create');
    Route::delete('/habitaciones/{habitacion}', [HabitacionController::class, 'destroy'])->name('habitaciones.destroy');
    Route::put('/habitaciones/{habitacion}', [HabitacionController::class, 'update'])->name('habitaciones.update');
    Route::get('/habitaciones/{habitacion}/edit', [HabitacionController::class, 'edit'])->name('habitaciones.edit');


    //Rutas de reservas
    Route::get('/reservas', [ReservaController::class,'index'])->name('reservas.index');
    Route::post('/reservas', [ReservaController::class, 'store'])->name('reservas.store');
    Route::get('/reservas/create', [ReservaController::class, 'create'])->name('reservas.create');
    Route::delete('/reservas/{reserva}', [ReservaController::class, 'destroy'])->name('reservas.destroy');
    Route::put('/reservas/{reserva}', [ReservaController::class, 'update'])->name('reservas.update');
    Route::get('/reservas/{reserva}/edit', [ReservaController::class, 'edit'])->name('reservas.edit');

}); 
require __DIR__.'/auth.php';
