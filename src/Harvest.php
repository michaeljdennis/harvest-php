<?php

namespace Harvest;

use Harvest\Endpoints\EndpointFactory;

class Harvest
{
    protected $httpClient;

    protected $endpoint;

    public function __construct(Client $httpClient)
    {
        $this->httpClient = $httpClient;
    }

    public function __get($name) : Harvest
    {
        $this->endpoint = EndpointFactory::get($name);

        return $this;
    }

    public function __call($name, $args) : Response
    {
        if (is_null($this->endpoint)) {
            throw new \RuntimeException('Endpoint not set.');
        }

        if (!method_exists($this->endpoint, $name)) {
            throw new \RuntimeException('Method ' . $name . ' does not exist on ' . get_class($this->endpoint) . '.');
        }

        call_user_func_array([$this->endpoint, $name], $args);

        if (is_null($this->endpoint->getUrl())) {
            return $this;
        }

        return new Response($this->httpClient, $this->endpoint);
    }
}
