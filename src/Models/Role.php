<?php

namespace Harvest\Models;

class Role extends BaseModel
{
    public $id;
    public $name;
    public $user_ids;
    public $created_at;
    public $updated_at;
}
