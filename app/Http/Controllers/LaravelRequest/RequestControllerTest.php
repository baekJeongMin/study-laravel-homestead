<?php

namespace App\Http\Controllers\LaravelRequest;

use Illuminate\Support\Facades\Crypt;
use Tests\TestCase;

/**
 * Class RequestControllerTest
 * @package App\Http\Controllers\LaravelRequest
 * @coversDefaultClass \App\Http\Controllers\LaravelRequest\RequestController
 */
class RequestControllerTest extends TestCase
{
    /**
     * @covers ::get
     */
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

    /**
     * @covers ::psrTest
     */
    public function testPsrTest()
    {
        // Given
        $params = [
            'id' => 1
        ];

        // When
        $response = $this->json('GET', '/request/psr-test', $params);

        // THen
        var_dump($response->getContent());
        $response->assertStatus(200);
    }

    /**
     * @covers ::session
     */
    public function testSession()
    {
        // Given
        $params = [
            'id' => 1,
            'name' => 'nameee'
        ];

        // When
        $response = $this->json('GET', '/request/session', $params);
        $response = $this->json('GET', '/request/session', $params);

        // THen
        $response->assertStatus(200);
    }

    /**
     * @covers ::cookie
     */
    public function testCookie()
    {
        // Given
        $cookies = [
            'id' => Crypt::encrypt(1),
            'name' => Crypt::encrypt('test'),
            'test' => 'plain text'
        ];

        // When
        $response = $this->call('GET', '/request/cookie', [], $cookies);

        // THen
        $response->assertStatus(200);
    }

}
