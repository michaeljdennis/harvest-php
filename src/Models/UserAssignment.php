<?php

namespace Harvest\Models;

class UserAssignment extends BaseModel
{
    public $id;
    public $project;
    public $user;
    public $is_active;
    public $is_project_manager;
    public $hourly_rate;
    public $budget;
    public $created_at;
    public $updated_at;
}
