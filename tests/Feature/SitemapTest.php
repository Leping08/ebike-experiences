<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SitemapTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_the_site_map_page_loads(): void
    {
        // Testing
        $response = $this->get(route('sitemap'));

        $response->assertStatus(302);

        // @todo make sure contents are xml
    }
}
