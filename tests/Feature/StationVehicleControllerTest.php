<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Station;
use App\Models\Vehicle;
use App\Models\VehicleType;
use App\Models\StationVehicle;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class StationVehicleControllerTest extends TestCase
{
    public function test_it_displays_stations_with_vehicles_and_prices()
    {   
        $station = Station::factory()->create();
        $vehicleType = VehicleType::factory()->create();
        $vehicle = Vehicle::factory()->create(['vehicles_type_id' => $vehicleType->id]);
        $stationVehicle = StationVehicle::factory()->create([
            'stations_id' => $station->id,
            'vehicles_id' => $vehicle->id,
            'pass_count' => 2,
        ]);


        $response = $this->get(route('stations'));


        $response->assertStatus(200);


        $response->assertViewIs('stations');


        $response->assertViewHas('groupedStations');


        $response->assertSeeText($station->name);
        $response->assertSeeText($vehicle->license_plate);
    }
    public function test_it_displays_stations_with_vehicles_and_price()
    {

        $station = Station::factory()->create(['name' => 'Ap-7(Málaga-Calahonda)']); 
        $vehicleType = VehicleType::factory()->create();
        $vehicle = Vehicle::factory()->create(['vehicles_type_id' => $vehicleType->id]);
        $stationVehicle = StationVehicle::factory()->create([
            'stations_id' => $station->id,
            'vehicles_id' => $vehicle->id,
            'pass_count' => 2,
        ]);
    
    
        $response = $this->get(route('stations'));
    
      
        $response->assertStatus(200);
    
      
        $response->assertViewIs('stations');
    
       
        $response->assertViewHas('groupedStations');
    
    
        $response->assertSeeText('Ap-7(Málaga-Calahonda)'); 
        $response->assertSeeText($vehicle->license_plate);
        $response->assertSeeText($vehicleType->vehicle_type);
    }
}
