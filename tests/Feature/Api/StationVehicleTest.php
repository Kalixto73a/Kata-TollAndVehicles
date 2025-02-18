<?php

namespace Tests\Feature\Api;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Models\Station;
use App\Models\Vehicle;
use App\Models\StationVehicle;

class StationVehicleTest extends TestCase
{

    /** @test */
    public function test_ThePassCountIncrements()
    {
        // Crear una estación
        $station = Station::factory()->create();

        // Crear un vehículo
        $vehicle = Vehicle::factory()->create();

        // Crear un registro en la tabla station_vehicles
        $stationVehicle = StationVehicle::factory()->create([
            'stations_id' => $station->id,
            'vehicles_id' => $vehicle->id,
            'pass_count' => 5, // Valor inicial
        ]);

        // Enviar la solicitud POST a la ruta increment
        $response = $this->postJson(route('apiUpdateStationsVehicles'), [
            'stations_id' => $station->id,
            'vehicles_id' => $vehicle->id,
        ]);

        // Afirmar que la respuesta tiene estado 200
        $response->assertStatus(200);

        // Afirmar que el mensaje de éxito está presente
        $response->assertJson([
            'message' => 'Se ha registrado el paso del vehículo por la estación',
        ]);

        // Afirmar que el pass_count se ha incrementado
        $this->assertDatabaseHas('stations_vehicles', [
            'id' => $stationVehicle->id,
            'pass_count' => 6, // Valor incrementado
        ]);
    }

    /** @test */
    public function test_IfStation_VehicleDontExistReturn404()
    {
        // Crear registros válidos en las tablas stations y vehicles
        $station = Station::factory()->create();
        $vehicle = Vehicle::factory()->create();
    
        // Asegúrate de que no exista un registro con station_id y vehicle_id en station_vehicles
        $invalidStationId = $station->id + 1; // Un ID que no existe
        $invalidVehicleId = $vehicle->id + 1; // Un ID que no existe
    
        // Enviar solicitud POST con IDs no válidos
        $response = $this->postJson(route('apiUpdateStationsVehicles'), [
            'stations_id' => $invalidStationId,
            'vehicles_id' => $invalidVehicleId,
        ]);
    
        // Afirmar que la respuesta tiene estado 404
        $response->assertStatus(404);
    
        // Afirmar que el mensaje de error está presente
        $response->assertJson([
            'message' => 'stations_id o vehicles_id no existen en sus tablas respectivas',
        ]);
    }

    /** @test */
    public function test_ValidateTheRequiredFields()
    {
        // Enviar solicitud POST sin datos
        $response = $this->postJson(route('apiUpdateStationsVehicles'), []);

        // Afirmar que la respuesta tiene estado 422 (error de validación)
        $response->assertStatus(422);

        // Afirmar que los errores de validación están presentes
        $response->assertJsonValidationErrors(['stations_id', 'vehicles_id']);
    }
}

