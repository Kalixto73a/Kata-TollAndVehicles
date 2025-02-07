<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StationVehicleController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/stations', [StationVehicleController::class, 'stations'])->name('stations');
Route::get('/vehicles', [StationVehicleController::class, 'vehicles'])->name('vehicles');

