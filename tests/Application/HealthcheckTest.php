<?php

declare(strict_types=1);

namespace App\Tests\Application;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class HealthcheckTest extends WebTestCase
{
    public function testSuccess(): void
    {
        // This calls KernelTestCase::bootKernel(), and creates a
        // "client" that is acting as the browser
        $client = static::createClient();

        // Request a specific page
        $client->request('GET', '/healthcheck');

        // Validate a successful response and some content
        $this->assertResponseIsSuccessful();
    }
}
