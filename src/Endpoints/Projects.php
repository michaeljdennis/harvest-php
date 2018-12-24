<?php

namespace Harvest\Endpoints;

use Harvest\Models\Project;

class Projects extends BaseEndpoint
{
    public function getPath(): string
    {
        return 'projects';
    }

    public function getResponseKey(): string
    {
        return 'projects';
    }

    public function getModelClass(): string
    {
        return Project::class;
    }
}
