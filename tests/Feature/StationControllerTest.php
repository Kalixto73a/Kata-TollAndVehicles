<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Station;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class StationControllerTest extends TestCase
{
        /* use RefreshDatabase; // Esto limpia la base de datos en cada test
    
        public function test_it_displays_a_list_of_stations()
        {
            // Ejecutar migraciones antes de la prueba
            $this->artisan('migrate');
    
            $station1 = Station::factory()->create([
                'name' => 'Ap-7(Málaga-Calahonda)',
                'city' => 'Málaga-Calahonda',
            ]);
    
            $response = $this->get(route('stations'));
    
            $response->assertStatus(200);
            $response->assertViewIs('stations');
    
            // Verificar que la variable $stations se pasa correctamente a la vista
            $response->assertViewHas('groupedStations', function ($groupedStations) use ($station1) {
                dump($groupedStations); // Ver qué está recibiendo realmente la vista
            
                return collect($groupedStations)->pluck('station')->contains($station1);
            });
            
        } */
}
