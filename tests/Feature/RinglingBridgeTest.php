<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RinglingBridgeTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     * @test
     */
    public function test_legacy_trail_page_loads()
    {
        // Testing
        $response = $this->get(route('trails.sarasota.ringling-bridge'));

        $response->assertStatus(200);
    }
}
