<?php

use App\Http\Controllers\Api\StationVehicleController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/stationsVehicles', [StationVehicleController::class, 'store'])->name('apiUpdateStationsVehicles');
