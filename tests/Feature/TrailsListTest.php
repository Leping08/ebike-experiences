<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TrailsListTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_the_site_map_page_loads(): void
    {
        // Testing
        $response = $this->get(route('trails.index'));

        $response->assertStatus(200);
    }
}
