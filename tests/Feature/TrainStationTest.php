<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TrainStationTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     * @test
     */
    public function test_venice_train_station_page_loads()
    {
        // Testing
        $response = $this->get(route('trails.venice.train-station'));

        $response->assertStatus(200);
    }
}
