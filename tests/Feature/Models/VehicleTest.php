<?php
namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Vehicle;
use App\Models\VehicleType;
use App\Models\Station;
use Illuminate\Foundation\Testing\RefreshDatabase;

class VehicleTest extends TestCase
{
    /** @test */
    public function it_can_create_a_vehicle()
    {
        // Crear un tipo de vehículo de prueba
        $vehicleType = VehicleType::factory()->create();

        // Crear un vehículo
        $vehicle = Vehicle::create([
            'name' => 'Test Vehicle',
            'license_plate' => 'ABC-123',
            'axles' => 2,
            'vehicles_type_id' => $vehicleType->id,
        ]);

        // Verificar que el vehículo se ha creado correctamente
        $this->assertDatabaseHas('vehicles', [
            'id' => $vehicle->id,
            'name' => 'Test Vehicle',
            'license_plate' => 'ABC-123',
            'axles' => 2,
            'vehicles_type_id' => $vehicleType->id,
        ]);
    }

    /** @test */
    public function it_belongs_to_a_vehicle_type()
    {
        // Crear un tipo de vehículo de prueba
        $vehicleType = VehicleType::factory()->create();

        // Crear un vehículo asociado al tipo de vehículo
        $vehicle = Vehicle::factory()->create([
            'vehicles_type_id' => $vehicleType->id,
        ]);

        // Verificar la relación con VehicleType
        $this->assertInstanceOf(VehicleType::class, $vehicle->vehicleType);
        $this->assertEquals($vehicleType->id, $vehicle->vehicleType->id);
    }

    /** @test */
    /** @test */
    /** @test */
/** @test */
    public function it_belongs_to_many_stations()
    {
        // Crear un vehículo de prueba
        $vehicle = Vehicle::factory()->create();

        // Crear dos estaciones de prueba
        $station1 = Station::factory()->create();
        $station2 = Station::factory()->create();

        // Asociar el vehículo a las estaciones
        $vehicle->stations()->attach($station1->id, ['pass_count' => 3]);
        $vehicle->stations()->attach($station2->id, ['pass_count' => 5]);

        // Recargar el vehículo para asegurarse de que las relaciones estén cargadas
        $vehicle->refresh();

        // Verificar la relación belongsToMany
        $this->assertCount(2, $vehicle->stations);
        $this->assertTrue($vehicle->stations->contains($station1));
        $this->assertTrue($vehicle->stations->contains($station2));

        // Verificar los datos del pivot (pass_count)
        $this->assertEquals(3, $vehicle->stations->find($station1->id)->pivot->pass_count);
        $this->assertEquals(5, $vehicle->stations->find($station2->id)->pivot->pass_count);
    }
}
