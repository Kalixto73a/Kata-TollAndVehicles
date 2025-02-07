<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Foundation\Testing\RefreshDatabase;

class DatabaseSeeder extends Seeder
{
    use RefreshDatabase;
    public function run(): void
    {
        $this->call([
            VehiclesTypesSeeder::class,
            StationsSeeder::class,
            VehiclesSeeder::class,
            StationsVehiclesSeeder::class,
        ]);
    }
}
