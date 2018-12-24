<?php

namespace Harvest\Endpoints;

use Harvest\Models\Company;

class Companies extends BaseEndpoint
{
    public function getPath(): string
    {
        return 'company';
    }

    public function getResponseKey(): string
    {
        return 'company';
    }

    public function getModelClass(): string
    {
        return Company::class;
    }
}
