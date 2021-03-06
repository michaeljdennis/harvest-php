<?php

namespace Harvest\Endpoints;

use Harvest\Models\UserAssignment;

class UserAssignments extends BaseEndpoint
{
    public function getPath(): string
    {
        return 'user_assignments';
    }

    public function getResponseKey(): string
    {
        return 'user_assignments';
    }

    public function getModelClass(): string
    {
        return UserAssignment::class;
    }

    public function fromProject(int $id)
    {
        $this->fromPath = 'projects';
        $this->fromId = $id;
    }
}
