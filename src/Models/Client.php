<?php

namespace Harvest\Models;

class Client extends BaseModel
{
    public $id;

    public $name;

    public $is_active;

    public $address;

    public $currency;

    public $created_at;

    public $updated_at;
}
