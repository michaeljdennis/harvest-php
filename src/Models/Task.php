<?php

namespace Harvest\Models;

class Task extends BaseModel
{
    public $id;
    public $name;
    public $billable_by_default;
    public $default_hourly_rate;
    public $is_default;
    public $is_active;
    public $created_at;
    public $updated_at;
}
