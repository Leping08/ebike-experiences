<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class GatewayToTheBeachesTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_gateway_to_the_beaches_page_loads(): void
    {
        // Testing
        $response = $this->get(route('trails.sarasota.gateway-to-the-beaches'));

        $response->assertStatus(200);
    }
}
