<?php

namespace Database\Seeders;

use App\Models\Station;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StationsSeeder extends Seeder
{
    public function run(): void
    {
        $stations = [
            [
                'name' => 'Ap-7(Málaga-Calahonda)',
                'city' => 'Málaga-Calahonda',
            ],
            [
                'name' => 'Ap-7(Calahonda-Marbella)',
                'city' => 'Calahonda-Marbella',
            ],
            [
                'name' => 'Ap-7(Málaga-Marbella)',
                'city' => 'Málaga-Marbella',
            ],
            [
                'name' => 'Ap-7(Marbella-San Pedro Alcántara)',
                'city' => 'Marbella-San Pedro Alcántara',
            ],
            [
                'name' => 'Ap-7(San Pedro Alcántara-Estepona)',
                'city' => 'San Pedro Alcántara-Estepona',
            ],
            [
                'name' => 'Ap-7(Marbella-Estepona)',
                'city' => 'Marbella-Estepona',
            ],
            ];
            foreach ($stations as $station) {
                Station::create($station);
            }
    }
}
