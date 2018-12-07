<?php

namespace Harvest\Endpoints;

use Harvest\Models\Role;

class Roles extends BaseEndpoint
{
    public function getPath() : string
    {
        return 'roles';
    }

    public function getResponseKey() : string
    {
        return 'roles';
    }

    public function getModelClass() : string
    {
        return Role::class;
    }
}
