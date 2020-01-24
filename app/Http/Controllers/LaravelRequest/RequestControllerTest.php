<?php

namespace App\Http\Controllers\LaravelRequest;

use Tests\TestCase;

class RequestControllerTest extends TestCase
{

    public function testGet()
    {
        // Given
        $params = [
            'id' => 1
        ];

        // When
        $response = $this->json('GET', '/request/test?name=test', $params);

        // THen
        $response->assertStatus(200);
    }
}
