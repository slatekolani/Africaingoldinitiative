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
    public function testBasicTest()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function testContactFormCanSubmit()
    {
        config(['mail.default' => 'array']);

        $response = $this->postJson('/contact', [
            'name' => 'Website Visitor',
            'email' => 'visitor@example.com',
            'phone' => '+255745654722',
            'country' => 'Tanzania',
            'message' => 'I would like to learn more about Africa In Gold.',
        ]);

        $response->assertOk()
            ->assertJsonStructure(['message']);
    }
}
