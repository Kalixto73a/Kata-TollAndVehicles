<?php

namespace App\Http\Controllers\Api;

use App\Models\Station;
use App\Models\Vehicle;
use Illuminate\Http\Request;
use App\Models\StationVehicle;
use App\Http\Controllers\Controller;

class StationVehicleController extends Controller
{
    public function store(Request $request)
{
    // Validar que stations_id exista en stations y vehicles_id exista en vehicles
    $request->validate([
        'stations_id' => 'required|integer',
        'vehicles_id' => 'required|integer',
    ]);

    $stationVehicle = StationVehicle::where('stations_id', $request->stations_id)
        ->where('vehicles_id', $request->vehicles_id)
        ->first();

    $stationExists = Station::find($request->stations_id);
    $vehicleExists = Vehicle::find($request->vehicles_id);

    if (!$stationExists || !$vehicleExists) {
        return response()->json([
            'message' => 'stations_id o vehicles_id no existen en sus tablas respectivas',
        ], 404);
    }

    // Incrementar el valor de pass_count
    $stationVehicle->pass_count += 1;
    $stationVehicle->save();

    // Respuesta en caso de éxito
    return response()->json([
        'message' => 'Se ha registrado el paso del vehículo por la estación',
        'stationVehicle' => $stationVehicle,
    ], 200);
}

}
