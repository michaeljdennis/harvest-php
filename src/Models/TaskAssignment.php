<?php

namespace Harvest\Models;

class TaskAssignment extends BaseModel
{
    public $id;
    public $project;
    public $task;
    public $is_active;
    public $billable;
    public $hourly_rate;
    public $budget;
    public $created_at;
    public $updated_at;
}
