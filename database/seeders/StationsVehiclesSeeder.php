<?php

namespace Database\Seeders;

use App\Models\Station;
use App\Models\StationVehicle;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StationsVehiclesSeeder extends Seeder
{
    public function run(): void
    {
        $stationVehicles = [
            [
                'stations_id' => 1,
                'vehicles_id' => 1,
                'pass_count' => 2,
            ],
            [
                'stations_id' => 3,
                'vehicles_id' => 2,
                'pass_count' => 2,
            ],
            [
                'stations_id' => 4,
                'vehicles_id' => 2,
                'pass_count' => 1,
            ],
            [
                'stations_id' => 6,
                'vehicles_id' => 3,
                'pass_count' => 1,
            ],
            [
                'stations_id' => 4,
                'vehicles_id' => 4,
                'pass_count' => 1,
            ],
            [
                'stations_id' => 3,
                'vehicles_id' => 5,
                'pass_count' => 2,
            ],
            [
                'stations_id' => 1,
                'vehicles_id' => 6,
                'pass_count' => 1,
            ],
            [
                'stations_id' => 4,
                'vehicles_id' => 7,
                'pass_count' => 2,
            ],
            [
                'stations_id' => 6,
                'vehicles_id' => 8,
                'pass_count' => 1,
            ],
            [
                'stations_id' => 1,
                'vehicles_id' => 9,
                'pass_count' => 2,
            ],
        ];
        foreach ($stationVehicles as $stationVehicle) {
            StationVehicle::create($stationVehicle);
        }
    }
}
