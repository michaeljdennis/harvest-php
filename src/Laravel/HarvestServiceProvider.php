<?php

namespace Harvest\Laravel;

use Harvest\Harvest;
use Illuminate\Support\ServiceProvider;

class HarvestServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('harvest', Harvest::class);
    }
}
