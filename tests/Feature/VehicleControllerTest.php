<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Station;
use App\Models\Vehicle;
use App\Models\VehicleType;
use App\Models\StationVehicle;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class VehicleControllerTest extends TestCase
{
    public function test_it_displays_a_list_of_vehicles_by_station()
    {

        $this->artisan('migrate');


        $vehicleType = VehicleType::factory()->create([
            'vehicle_type' => 'Automóvil',
        ]);

        $station = Station::factory()->create([
            'name' => 'Peaje Central',
        ]);

        $vehicle = Vehicle::factory()->create([
            'name' => 'Toyota Corolla',
            'license_plate' => 'ABC-123',
            'vehicles_type_id' => $vehicleType->id,
        ]);


        $stationVehicle = StationVehicle::factory()->create([
            'stations_id' => $station->id,
            'vehicles_id' => $vehicle->id,
            'pass_count' => 5,
        ]);

        $response = $this->get(route('vehicles'));


        $response->assertStatus(200);


        $response->assertViewIs('vehicles');


      


        $response->assertViewHas('groupedStations', function ($groupedStations) use ($station, $vehicle) {

            return isset($groupedStations[$station->id]) &&
                $groupedStations[$station->id]['station']->id === $station->id &&
                collect($groupedStations[$station->id]['vehicles'])->contains(function ($v) use ($vehicle) {
                    return $v['license_plate'] === $vehicle->license_plate &&
                        $v['name'] === $vehicle->name &&
                        $v['pass_count'] === 5;
                });
        });


        $response->assertSeeText('Automóvil');
        $response->assertSeeText('Toyota Corolla (ABC-123)');
        $response->assertSeeText('Precio: 500.00€');
    }
}
