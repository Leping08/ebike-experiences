<?php

namespace Tests\Feature;

use Tests\TestCase;

class WebManifestTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_the_web_manifest_loads(): void
    {
        $response = $this->get(route('webmanifest'));

        $response->assertStatus(200)
            ->assertHeader('Content-Type', 'application/manifest+json')
            ->assertJsonPath('name', config('app.seo_name'))
            ->assertJsonPath('icons.0.src', asset('/android-chrome-192x192.png'));
    }
}
