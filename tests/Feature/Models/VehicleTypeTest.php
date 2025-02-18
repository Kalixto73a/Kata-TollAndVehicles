<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Vehicle;
use App\Models\VehicleType;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class VehicleTypeTest extends TestCase
{
    public function it_can_create_a_vehicle_type()
    {
        // Crear un tipo de vehículo
        $vehicleType = VehicleType::create([
            'vehicle_type' => 'Car',
            'base_fee' => 50.00,
            'additional_base_fee' => 10.00,
        ]);

        // Verificar que el tipo de vehículo se ha creado correctamente
        $this->assertDatabaseHas('vehicles_types', [
            'id' => $vehicleType->id,
            'vehicle_type' => 'Car',
            'base_fee' => 50.00,
            'additional_base_fee' => 10.00,
        ]);
    }

    /** @test */
    public function it_has_many_vehicles()
    {
        // Crear un tipo de vehículo
        $vehicleType = VehicleType::factory()->create();

        // Crear dos vehículos asociados al tipo de vehículo
        $vehicle1 = Vehicle::factory()->create(['vehicles_type_id' => $vehicleType->id]);
        $vehicle2 = Vehicle::factory()->create(['vehicles_type_id' => $vehicleType->id]);

        // Verificar la relación hasMany
        $this->assertCount(2, $vehicleType->vehicles);
        $this->assertTrue($vehicleType->vehicles->contains($vehicle1));
        $this->assertTrue($vehicleType->vehicles->contains($vehicle2));
    }
}
