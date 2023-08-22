<?php

namespace App\Tests\Controller;

use PHPUnit\Framework\TestCase;
use GuzzleHttp\Client;

class ArticleTest extends TestCase
{
    public function testArticlesEndpoint(): void
    {
        $client = new Client([
            'base_uri' => 'http://host.docker.internal/',
            'defaults' => [
                'exceptions' => false
            ]
        ]);
        
        $response = $client->get('articles');
        $this->assertEquals(200, $response->getStatusCode());

        $expectedResponseBody = 'Welcome to Latte and Code ';
        $this->assertEquals($expectedResponseBody, (string) $response->getBody());
    }
}
