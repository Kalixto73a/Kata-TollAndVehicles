<?php

namespace App\Http\Controllers;

use App\Models\VehicleType;
use Illuminate\Http\Request;

class VehicleTypeController extends Controller
{
    public function index()
    {
        $vehiclesTypes = VehicleType::all();
        return view('vehiclesTypes', compact('vehiclesTypes'));
    }
}
