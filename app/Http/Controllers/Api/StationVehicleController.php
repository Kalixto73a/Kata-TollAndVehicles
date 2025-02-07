<?php

namespace App\Http\Controllers\Api;

use App\Models\Vehicle;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\StationVehicle;

class StationVehicleController extends Controller
{
    public function update(Request $request, string $id)
    {
        $Vehicle = StationVehicle::find($id);
        if (!$Vehicle) {
            return response()->json(['message' => 'Vehicle not found'], 404);
        }
        $validated = $request->validate([
            'station_id' => 'foreign_key:stations,id',
            'vehicle_id' => 'foreign_key:vehicles,id',
            'pass_count' => 'required|integer|min:1',
        ]);
        $stationVehicle = StationVehicle::where('station_id', $request->station_id)
                                    ->where('vehicle_id', $request->vehicle_id)
                                    ->first();
                                    
        $station_id = $validated['station_id']?? $Vehicle->station_id;
        $vehicle_id = $validated['vehicle_id']?? $Vehicle->vehicle_id;
        $pass_count = $validated['pass_count']?? $Vehicle->pass_count;

        $Vehicle->update([
            'station_id' => $station_id,
            'vehicle_id' => $vehicle_id,
            'pass_count' => $pass_count,
        ]);

        $Vehicle->save();
        return response()->json($Vehicle, 200);  
    }
}
