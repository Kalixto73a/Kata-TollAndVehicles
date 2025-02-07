<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StationVehicle;

class StationVehicleController extends Controller
{
    public function index()
    {
        $stationVehicles = StationVehicle::all();
        $stationVehicles->each(function ($stationVehicle) {
            $stationVehicle->totalPrice = $this->calculateTollPrice($stationVehicle->id);
        });
        return view('stationVehicles', compact('stationVehicles'));
    }
    private function calculateTollPrice($stationVehicleId)
    {
        $stationVehicle = StationVehicle::with(['vehicle.vehicleType'])->findOrFail($stationVehicleId);

        $vehicle = $stationVehicle->vehicle;
        $vehicleType = $vehicle->vehicleType;

        $baseFee = $vehicleType->base_fee;
        $additionalFee = $vehicleType->additional_base_fee * ($vehicle->axles);

        $totalPriceOfFee = $baseFee + $additionalFee;
        $totalPrice = $totalPriceOfFee * $stationVehicle->pass_count;
        
        return $totalPrice;
    }
}
