<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Client;

class ClientTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        
        // Run the seeder for clients table
        $this->artisan('db:seed', ['--class' => 'ClientsTableSeeder']);
    }

    public function test_get_client_by_phone_number_success()
    {
        $response = $this->get('/api/client/1234567890');
        $response->assertStatus(200);
        $response->assertJsonStructure([
            'id',
            'phone_number',
            'full_name',
            'accumulated_points',
            'created_at',
            'updated_at'
        ]);
    }

    public function test_get_client_by_phone_number_not_found()
    {
        $response = $this->get('/api/client/0000000000');
        $response->assertStatus(404);
        $response->assertJson(['error' => 'Client not found']);
    }
}
