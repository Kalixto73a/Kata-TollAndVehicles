<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VehicleTypesSeeder extends Seeder
{
    public function run(): void
    {
        $vehicleTypes = [
            [
                'name' => 'Coche',
            ],
            [
                'name' => 'Moto',
            ],
            [
                'name' => 'Camión',
            ],
        ];
    }
}
