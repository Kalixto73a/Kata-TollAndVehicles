<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StationVehicleController;

Route::get('/', [StationVehicleController::class, 'index'])->name('home');
Route::get('/stations', [StationVehicleController::class, 'index'])->name('stations');
Route::get('/vehicles', [StationVehicleController::class, 'index'])->name('vehicles');

