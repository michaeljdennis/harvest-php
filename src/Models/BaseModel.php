<?php

namespace Harvest\Models;

class BaseModel
{
    public function __toString() : string
    {
        return json_encode($this);
    }
}
