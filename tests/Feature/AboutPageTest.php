<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AboutPageTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     * @test
     */
    public function test_about_page_loads()
    {
        $response = $this->get(route('about'));

        $response->assertStatus(200);
    }
}
