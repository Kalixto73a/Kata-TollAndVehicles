<?php

namespace Database\Seeders;

use App\Models\VehicleType;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class VehiclesTypesSeeder extends Seeder
{
    public function run(): void
    {
        $vehicleTypes = [
            [
                'vehicle_type' => 'Coche',
                'base_fee' => 100,
                'aditional_base_fee' => 0,
            ],
            [
                'vehicle_type' => 'Moto',
                'base_fee' => 50,
                'aditional_base_fee' => 0,
            ],
            [
                'vehicle_type' => 'Camión',
                'base_fee' => 0,
                'aditional_base_fee' => 50,
            ],
        ];
        foreach ($vehicleTypes as $vehicleType) {
            VehicleType::create($vehicleType);
        }
    }
}
