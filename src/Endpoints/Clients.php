<?php

namespace Harvest\Endpoints;

use Harvest\Models\Client;

class Clients extends BaseEndpoint
{
    public function getPath(): string
    {
        return 'clients';
    }

    public function getResponseKey(): string
    {
        return 'clients';
    }

    public function getModelClass(): string
    {
        return Client::class;
    }
}
