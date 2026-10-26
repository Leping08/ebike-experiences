<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TrainDepotTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_venice_train_depot_page_loads(): void
    {
        // Testing
        $response = $this->get(route('trails.venice.train-depot'));

        $response->assertStatus(200);
    }
}
