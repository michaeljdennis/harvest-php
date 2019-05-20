<?php

namespace Harvest;

use Harvest\Config\Environment;
use Harvest\Endpoints\EndpointFactory;

class Harvest
{
    protected $environment;

    protected $httpClient;

    protected $endpoint;

    public function __construct(Environment $environment, Client $httpClient)
    {
        $this->environment = $environment;
        $this->httpClient = $httpClient;
    }

    public function __get($name): self
    {
        $this->setEndpoint($name);

        return $this;
    }

    public function setEndpoint(string $name): void
    {
        $this->endpoint = EndpointFactory::get($name);
    }

    public function __call($name, $args)
    {
        if (is_null($this->endpoint)) {
            $this->setEndpoint($name);

            return $this;
        }

        if (is_null($this->endpoint)) {
            throw new \RuntimeException('Endpoint not set.');
        }

        if (!method_exists($this->endpoint, $name)) {
            throw new \RuntimeException('Method '.$name.' does not exist on '.get_class($this->endpoint).'.');
        }

        call_user_func_array([$this->endpoint, $name], $args);

        if (strlen($this->endpoint->getUrl()) === 0) {
            return $this;
        }

        $request = new Request($this->httpClient, $this->endpoint);
        $response = $request->send();

        $this->endpoint = null;

        return $response;
    }
}
