<?php
namespace Database\Factories;

use App\Models\Station;
use App\Models\Vehicle;
use App\Models\StationVehicle;
use Illuminate\Database\Eloquent\Factories\Factory;

class StationVehicleFactory extends Factory
{
    protected $model = StationVehicle::class;

    public function definition()
    {
        return [
            'stations_id' => Station::factory(),
            'vehicles_id' => Vehicle::factory(),
            'pass_count' => 1,
        ];
    }
}

