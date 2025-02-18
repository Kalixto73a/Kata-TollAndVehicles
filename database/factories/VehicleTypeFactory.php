<?php

namespace Database\Factories;

use App\Models\VehicleType;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\VehicleType>
 */
class VehicleTypeFactory extends Factory
{
    protected $model = VehicleType::class;
    public function definition(): array
    {
        return [
            'vehicle_type' => 'Coche',
            'base_fee' => 100,
            'aditional_base_fee' => 0,
        ];
    }
}
