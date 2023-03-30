<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HomePageTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     * @test
     */
    public function test_home_page_loads()
    {
        $response = $this->get(route('home'));

        $response->assertStatus(200);
    }
}
