<?php

use PHPUnit\Framework\TestCase;

use Harvest\Response;

class ResponseTest extends TestCase
{
    public function testCollection()
    {
        $collection = [
            'key' => 'value',
            'array' => [
                1,
                2,
                3,
            ]
        ];

        $ressponse = new Response($collection);

        $this->assertSame($collection, $ressponse->data());
    }
}
