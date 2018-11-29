<?php

namespace Harvest\Laravel;

use Illuminate\Support\Facades\Facade;

class Harvest extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'harvest';
    }
}
