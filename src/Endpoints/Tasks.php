<?php

namespace Harvest\Endpoints;

use Harvest\Models\Task;

class Tasks extends BaseEndpoint
{
    public function getPath() : string
    {
        return 'tasks';
    }

    public function getResponseKey() : string
    {
        return 'tasks';
    }

    public function getModelClass() : string
    {
        return Task::class;
    }
}
