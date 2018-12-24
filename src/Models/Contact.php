<?php

namespace Harvest\Models;

class Contact extends BaseModel
{
    public $id;

    public $client;

    public $title;

    public $first_name;

    public $last_name;

    public $email;

    public $phone_office;

    public $phone_mobile;

    public $fax;

    public $created_at;

    public $updated_at;
}
