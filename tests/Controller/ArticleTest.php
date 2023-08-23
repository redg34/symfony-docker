<?php
namespace App\Tests\Controller;

use PHPUnit\Framework\TestCase;
use GuzzleHttp\Client;

class ArticleTest extends TestCase {
    private $_client;
    
    protected function setUp(): void {
        parent::setUp(); // Appel de la méthode setUp() parente

        $this->_client = new Client([
            'base_uri' => 'http://host.docker.internal/',
            'defaults' => [
                'exceptions' => false
            ]
        ]);
    }
    
    public function testArticlesEndpoint(): void {
        $response = $this->_client->get('articles');
        
        // Ensure a 200 Http status code after a GET
        $this->assertEquals(200, $response->getStatusCode());
        
        // Ensure got Welcome to latte and code as content of response
        $expectedResponseBody = 'Welcome to Latte and Code ';
        $this->assertEquals($expectedResponseBody, (string) $response->getBody());
    }
    
    public function testPostDoesRepondsWithNotFound(): void {
        $this->expectException(\GuzzleHttp\Exception\ClientException::class);
        $response = $this->_client->post('articles', []);
    }
}
