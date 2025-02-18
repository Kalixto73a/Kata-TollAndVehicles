<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HomeControllerTest extends TestCase
{
    public function test_it_displays_the_home_page()
    {
        // Hacer una solicitud GET a la ruta que llama al método index
        $response = $this->get(route('home'));

        // Verificar que la respuesta sea exitosa (código 200)
        $response->assertStatus(200);

        // Verificar que la vista correcta se está utilizando
        $response->assertViewIs('home');
    }
}
