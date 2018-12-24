<?php

namespace Harvest\Endpoints;

use Harvest\Models\User;

class Users extends BaseEndpoint
{
    public function getPath(): string
    {
        return 'users';
    }

    public function getResponseKey(): string
    {
        return 'users';
    }

    public function getModelClass(): string
    {
        return User::class;
    }
}
