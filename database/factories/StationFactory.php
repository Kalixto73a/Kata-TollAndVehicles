<?php
namespace Database\Factories;

use App\Models\Station;
use Illuminate\Database\Eloquent\Factories\Factory;

class StationFactory extends Factory
{
    protected $model = Station::class;

    public function definition()
    {
        return [
            'name' => 'Ap-7(Málaga-Calahonda)',
            'city' => 'Málaga-Calahonda',
        ];
    }
}


