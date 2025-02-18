<?php
namespace Database\Factories;

use App\Models\Vehicle;
use Illuminate\Database\Eloquent\Factories\Factory;

class VehicleFactory extends Factory
{
    protected $model = Vehicle::class;

    public function definition()
    {
        return [
                'name' => 'Porsche 911',
                'license_plate' => '4792HNY',
                'axles' => 0,
                'vehicles_type_id' => 1,
        ];
    }
}

