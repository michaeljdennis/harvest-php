<?php

namespace Harvest\Endpoints;

use Harvest\Models\TaskAssignment;

class TaskAssignments extends BaseEndpoint
{
    public function getPath(): string
    {
        return 'task_assignments';
    }

    public function getResponseKey(): string
    {
        return 'task_assignments';
    }

    public function getModelClass(): string
    {
        return TaskAssignment::class;
    }

    public function fromProject(int $id)
    {
        $this->fromPath = 'projects';
        $this->fromId = $id;
    }
}
