<?php

namespace Database\Seeders;

use App\Models\Vehicle;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class VehiclesSeeder extends Seeder
{
    public function run(): void
    {
        $vehicles = [
            [
                'name' => 'Porsche 911',
                'license_plate' => '4792HNY',
                'axles' => 0,
                'vehicles_type_id' => 1,
            ],
            [
                'name' => 'Ford Mustang',
                'license_plate' => '2947EHF',
                'axles' => 0,
                'vehicles_type_id' => 1,
            ],
            [
                'name' => 'Volskwagen Golf',
                'license_plate' => '8052JYD',
                'axles' => 0,
                'vehicles_type_id' => 1,
            ],
            [
                'name' => 'Honda CB 750 Hornet',
                'license_plate' => '3405JJW',
                'axles' => 0,
                'vehicles_type_id' => 2,
            ],
            [
                'name' => 'CFMOTO 800NK Advanced',
                'license_plate' => '2429GMO',
                'axles' => 0,
                'vehicles_type_id' => 2,
            ],
            [
                'name' => 'Suzuki GSX1300 Hayabusa',
                'license_plate' => '0201OEN',
                'axles' => 0,
                'vehicles_type_id' => 2,
            ],
            [
                'name' => 'DAF XF',
                'license_plate' => '5367NEO',
                'axles' => 5,
                'vehicles_type_id' => 3,
            ],
            [
                'name' => 'Daimler Truck GenH2',
                'license_plate' => '5594JSL',
                'axles' => 6,
                'vehicles_type_id' => 3,
            ],
            [
                'name' => 'Ford Trucks F-Max',
                'license_plate' => '1293QNI',
                'axles' => 4,
                'vehicles_type_id' => 3,
            ],
            [
                'name' => 'Porsche 911',
                'license_plate' => '4792HNY',
                'axles' => 0,
                'vehicles_type_id' => 1,
            ],
            [
                'name' => 'Ford Mustang',
                'license_plate' => '2947EHF',
                'axles' => 0,
                'vehicles_type_id' => 1,
            ],
            [
                'name' => 'Volskwagen Golf',
                'license_plate' => '8052JYD',
                'axles' => 0,
                'vehicles_type_id' => 1,
            ],
            [
                'name' => 'Honda CB 750 Hornet',
                'license_plate' => '3405JJW',
                'axles' => 0,
                'vehicles_type_id' => 2,
            ],
            [
                'name' => 'CFMOTO 800NK Advanced',
                'license_plate' => '2429GMO',
                'axles' => 0,
                'vehicles_type_id' => 2,
            ],
            [
                'name' => 'Suzuki GSX1300 Hayabusa',
                'license_plate' => '0201OEN',
                'axles' => 0,
                'vehicles_type_id' => 2,
            ],
            [
                'name' => 'DAF XF',
                'license_plate' => '5367NEO',
                'axles' => 5,
                'vehicles_type_id' => 3,
            ],
            [
                'name' => 'Daimler Truck GenH2',
                'license_plate' => '5594JSL',
                'axles' => 6,
                'vehicles_type_id' => 3,
            ],
            [
                'name' => 'Ford Trucks F-Max',
                'license_plate' => '1293QNI',
                'axles' => 4,
                'vehicles_type_id' => 3,
            ],
        ];
        foreach ($vehicles as $vehicle) {
            Vehicle::create($vehicle);
        }
    }
}
