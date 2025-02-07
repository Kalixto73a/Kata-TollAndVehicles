<?php

namespace App\Http\Controllers\Api;

use App\Models\Vehicle;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\StationVehicle;

class StationVehicleController extends Controller
{
    public function store(Request $request)
    {
        // Validar los datos recibidos
        $request->validate([
            'stations_id' => 'required|integer|exists:stations_vehicles,stations_id',
            'vehicles_id' => 'required|integer|exists:stations_vehicles,vehicles_id',
        ]);

        // Buscar el registro correspondiente
        $stationVehicle = StationVehicle::where('stations_id', $request->stations_id)
            ->where('vehicles_id', $request->vehicles_id)
            ->first();

        if (!$stationVehicle) {
            return response()->json([
                'message' => 'El registro no existe en stations_vehicles',
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
