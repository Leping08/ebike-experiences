<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ContactPageTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_contact_page_loads()
    {
        $response = $this->get(route('contact'));

        $response->assertStatus(200);
    }
}
