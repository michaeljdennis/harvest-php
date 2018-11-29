<?php

namespace Harvest\Laravel;

use Illuminate\Support\ServiceProvider;
use Harvest\Harvest;

class HarvestServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('harvest', Harvest::class);
    }
}
