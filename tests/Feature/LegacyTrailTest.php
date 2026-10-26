<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LegacyTrailTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_legacy_trail_page_loads(): void
    {
        // Testing
        $response = $this->get(route('trails.sarasota.legacy-trail'));

        $response->assertStatus(200);
    }
}
