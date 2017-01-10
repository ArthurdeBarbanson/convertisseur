<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ConvertisseurControllerTest extends WebTestCase
{
    public function testConvert()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/convert');
    }

}
