<?php

namespace Harvest\Endpoints;

class EndpointFactory
{
    public static function get($name)
    {
        $endpoint = 'Harvest\Endpoints\\'.ucfirst($name);

        if (!class_exists($endpoint)) {
            throw new \RuntimeException('Endpoint '.$name.' does not exist.');
        }

        return new $endpoint();
    }
}
