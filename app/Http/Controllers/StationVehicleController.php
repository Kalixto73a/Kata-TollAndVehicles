<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StationVehicle;

class StationVehicleController extends Controller
{
    public function stations()
    {
        // Cargar las relaciones station y vehicle junto con su tipo
        $stationVehicles = StationVehicle::with(['station', 'vehicle.vehicleType'])->get();
    
        // Agrupar por station_id y calcular el precio total por peaje
        $groupedStations = [];
        foreach ($stationVehicles as $stationVehicle) {
            $stationId = $stationVehicle->station->id;
    
            // Si el peaje no está en el array, lo inicializamos
            if (!isset($groupedStations[$stationId])) {
                $groupedStations[$stationId] = [
                    'station' => $stationVehicle->station,
                    'totalPrice' => 0,
                    'vehicles' => [],
                ];
            }
    
            // Calcular el precio del vehículo actual
            $vehiclePrice = $this->calculateTollPrice($stationVehicle);
    
            // Sumar al precio total del peaje
            $groupedStations[$stationId]['totalPrice'] += $vehiclePrice;
    
            // Agregar el vehículo a la lista del peaje
            $groupedStations[$stationId]['vehicles'][] = [
                'license_plate' => $stationVehicle->vehicle->license_plate,
                'name' => $stationVehicle->vehicle->name,
                'pass_count' => $stationVehicle->pass_count,
                'price' => $vehiclePrice,
            ];
        }
    
        return view('stations', compact('groupedStations'));
    }
    public function vehicles()
    {
        // Cargar las relaciones station, vehicle y vehicleType
        $stationVehicles = StationVehicle::with(['station', 'vehicle.vehicleType'])->get();
    
        // Agrupar por station_id y calcular el precio total por peaje
        $groupedStations = [];
        foreach ($stationVehicles as $stationVehicle) {
            $stationId = $stationVehicle->station->id;
    
            // Si el peaje no está en el array, lo inicializamos
            if (!isset($groupedStations[$stationId])) {
                $groupedStations[$stationId] = [
                    'station' => $stationVehicle->station,
                    'totalPrice' => 0,
                    'vehicles' => [],
                ];
            }
    
            // Calcular el precio del vehículo actual
            $vehiclePrice = $this->calculateTollPrice($stationVehicle);
    
            // Sumar al precio total del peaje
            $groupedStations[$stationId]['totalPrice'] = $vehiclePrice;
    
            // Agregar el vehículo a la lista del peaje
            $groupedStations[$stationId]['vehicles'][] = [
                'license_plate' => $stationVehicle->vehicle->license_plate,
                'name' => $stationVehicle->vehicle->name,
                'pass_count' => $stationVehicle->pass_count,
                'price' => $vehiclePrice,
                'vehicle_type' => $stationVehicle->vehicle->vehicleType->vehicle_type ?? 'Desconocido',
            ];
        }
    
        return view('vehicles', compact('groupedStations'));
    }
    private function calculateTollPrice($stationVehicle)
    {
        if (!$stationVehicle->vehicle || !$stationVehicle->vehicle->vehicleType) {
            return 0;
        }
    
        $vehicle = $stationVehicle->vehicle;
        $vehicleType = $vehicle->vehicleType;

        $baseFee = $vehicleType->base_fee ?? 0;
        $additionalBaseFee = $vehicleType->aditional_base_fee ?? 0;
        $axles = $vehicle->axles ?? 0;
        
        $passCount = $stationVehicle->pass_count ?? 0;
    
        $additionalFee = $additionalBaseFee * $axles;
        $totalPrice = $baseFee + $additionalFee;
    
        return $totalPrice * $passCount;
    }

}
