<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StationVehicle;

class StationVehicleController extends Controller
{
    public function index()
    {
        $stationVehicles = StationVehicle::all();
        return view('stationVehicles', compact('stationVehicles'));
    }
}
