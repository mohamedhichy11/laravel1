<?php

use Illuminate\Support\Facades\Route;



use App\Http\Controllers\InternauteController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\HotelController;


Route::get('/', [InternauteController::class, 'index']);

// Routes pour les Internautes
Route::resource('internautes', InternauteController::class);

// Routes pour les Réservations
Route::resource('reservations', ReservationController::class);

// Routes pour les Hôtels
Route::resource('hotels', HotelController::class);

Route::post('/reservations', [ReservationController::class, 'store'])->name('reservation.store');


Route::get('/hotels/{id}', [HotelController::class, 'show'])->name('hotels.show');
