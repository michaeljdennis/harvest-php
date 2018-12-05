<?php

namespace Harvest;

use Harvest\Endpoints\BaseEndpoint;

class Request
{
    private $httpClient;

    private $endpoint;

    private $collection;

    public function __construct(Client $httpClient, BaseEndpoint $endpoint)
    {
        $this->httpClient = $httpClient;
        $this->endpoint = $endpoint;
        $this->collection = [];
    }

    public function send() : Response
    {
        $response = $this->httpClient->get($this->endpoint->getUrl());

        $this->processResponse($response);

        return new Response($this->collection);
    }

    private function processResponse($response) : void
    {
        if (!property_exists($response, $this->endpoint->getResponseKey())) {
            $tmp = new \stdClass();
            $tmp->{$this->endpoint->getResponseKey()} = [$response];
            $response = $tmp;
        }

        $this->populateModels($response);
    }

    private function populateModels(object $result) : void
    {
        foreach ($result->{$this->endpoint->getResponseKey()} as $object) {
            $modelClass = $this->endpoint->getModelClass();
            $model = new $modelClass;

            $this->hydrateProperties($model, $object);

            $this->collection[] = $model;
        }
    }

    private function hydrateProperties(object $model, object $object) : void
    {
        foreach ($model as $key => $value) {
            if (property_exists($model, $key)) {
                $model->$key = $object->$key;
            }
        }
    }

    public function data()
    {
        return $this->collection;
    }

    public function __toString()
    {
        return json_encode($this->collection);
    }
}
