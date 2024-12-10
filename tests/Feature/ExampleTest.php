<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testItHasRoutes()
    {
        $response = $this->get('/my-deal');

        $response->assertStatus(200);

        $response = $this->get('/status-description');

        $response->assertStatus(200);

        $response = $this->get('/payment');

        $response->assertStatus(200);

        $response = $this->get('/offer-agreement');

        $response->assertStatus(200);

        $response = $this->get('/document-list');

        $response->assertStatus(200);
    }
}
