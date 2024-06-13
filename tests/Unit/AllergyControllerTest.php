<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\Allergie;

class AllergyControllerTest extends TestCase
{
    use RefreshDatabase;

    public function testIndex()
    {
        // Arrange
        $allergy = Allergie::factory()->create();

        // Act
        $response = $this->call('GET', '/allergies');

        // Assert
        $response->assertStatus(200);
        $response->assertViewHas('results');
        $response->assertViewHas('allegrns');
    }
}
