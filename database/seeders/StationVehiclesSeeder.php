<?php

namespace Database\Seeders;

use App\Models\Station;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StationVehiclesSeeder extends Seeder
{
    public function run(): void
    {
        $stationVehicles = [
            [
                'station_id' => Station::all()->random()->id,
                'vehicle_id' => 1,
            ],
            [
                'station_id' => Station::all()->random()->id,
                'vehicle_id' => 1,
            ],
            [
                'station_id' => Station::all()->random()->id,
                'vehicle_id' => 2,
            ],
            [
                'station_id' => Station::all()->random()->id,
                'vehicle_id' => 2,
            ],
            [
                'station_id' => Station::all()->random()->id,
                'vehicle_id' => 2,
            ],
            [
                'station_id' => Station::all()->random()->id,
                'vehicle_id' => 3,
            ],
            [
                'station_id' => Station::all()->random()->id,
                'vehicle_id' => 4,
            ],
            [
                'station_id' => Station::all()->random()->id,
                'vehicle_id' => 5,
            ],
            [
                'station_id' => Station::all()->random()->id,
                'vehicle_id' => 5,
            ],
            [
                'station_id' => Station::all()->random()->id,
                'vehicle_id' => 6,
            ],
            [
                'station_id' => Station::all()->random()->id,
                'vehicle_id' => 7,
            ],
            [
                'station_id' => Station::all()->random()->id,
                'vehicle_id' => 7,
            ],
            [
                'station_id' => Station::all()->random()->id,
                'vehicle_id' => 8,
            ],
            [
                'station_id' => Station::all()->random()->id,
                'vehicle_id' => 9,
            ],
        ];
    }
}
