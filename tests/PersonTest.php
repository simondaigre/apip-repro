<?php

namespace App\Tests;

use ApiPlatform\Symfony\Bundle\Test\ApiTestCase;

class PersonTest extends ApiTestCase
{
    public function testGetCollection(): void
    {
        $client = static::createClient();
        $response = $client->request('GET', '/api/people', [
            'headers' => [
                'accept' => ['application/json'],
            ],
        ]);

        dd($response->getContent());
    }
}
