<?php

namespace Harvest\Models;

class BaseModel
{
    public function __toString()
    {
        return json_encode($this);
    }
}
