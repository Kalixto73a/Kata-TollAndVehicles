<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Station;
use App\Models\Vehicle;
use App\Models\StationVehicle;
use Illuminate\Foundation\Testing\RefreshDatabase;

class StationVehicleTest extends TestCase
{

    /** @test */
    public function it_can_create_a_station_vehicle()
    {
        // Crear datos de prueba
        $station = Station::factory()->create();
        $vehicle = Vehicle::factory()->create();

        // Crear un registro en la tabla stations_vehicles
        $stationVehicle = StationVehicle::create([
            'stations_id' => $station->id,
            'vehicles_id' => $vehicle->id,
            'pass_count' => 3,
        ]);

        // Verificar que el registro se ha creado correctamente
        $this->assertDatabaseHas('stations_vehicles', [
            'id' => $stationVehicle->id,
            'stations_id' => $station->id,
            'vehicles_id' => $vehicle->id,
            'pass_count' => 3,
        ]);
    }

    /** @test */
    public function it_belongs_to_a_station()
    {
        // Crear datos de prueba
        $station = Station::factory()->create();
        $vehicle = Vehicle::factory()->create();
        $stationVehicle = StationVehicle::factory()->create([
            'stations_id' => $station->id,
            'vehicles_id' => $vehicle->id,
        ]);

        // Verificar la relación con Station
        $this->assertInstanceOf(Station::class, $stationVehicle->station);
        $this->assertEquals($station->id, $stationVehicle->station->id);
    }

    /** @test */
    public function it_belongs_to_a_vehicle()
    {
        // Crear datos de prueba
        $station = Station::factory()->create();
        $vehicle = Vehicle::factory()->create();
        $stationVehicle = StationVehicle::factory()->create([
            'stations_id' => $station->id,
            'vehicles_id' => $vehicle->id,
        ]);

        // Verificar la relación con Vehicle
        $this->assertInstanceOf(Vehicle::class, $stationVehicle->vehicle);
        $this->assertEquals($vehicle->id, $stationVehicle->vehicle->id);
    }

    /** @test */
    /** @test */
public function it_has_many_station_vehicles()
    {
        // Crear datos de prueba
        $station = Station::factory()->create();
        $vehicle1 = Vehicle::factory()->create();
        $vehicle2 = Vehicle::factory()->create();

        // Crear registros en la tabla stations_vehicles asociados a la misma estación
        $stationVehicle1 = StationVehicle::factory()->create([
            'stations_id' => $station->id,
            'vehicles_id' => $vehicle1->id,
        ]);
        $stationVehicle2 = StationVehicle::factory()->create([
            'stations_id' => $station->id,
            'vehicles_id' => $vehicle2->id,
        ]);

        // Recargar la estación para asegurarse de que las relaciones estén cargadas
        $station->refresh();

        // Verificar la relación hasMany
        $this->assertCount(2, $station->stationVehicles);
        $this->assertTrue($station->stationVehicles->contains($stationVehicle1));
        $this->assertTrue($station->stationVehicles->contains($stationVehicle2));
    }
}
