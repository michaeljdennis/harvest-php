<?php

namespace Harvest;

use Harvest\Endpoints\BaseEndpoint;

class Response
{
    private $collection;

    public function __construct(array $collection)
    {
        $this->collection = $collection;
    }

    public function data() : array
    {
        return $this->collection;
    }

    public function __toString()
    {
        return json_encode($this->collection);
    }
}
