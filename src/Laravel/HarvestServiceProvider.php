<?php

namespace Harvest\Laravel;

use Illuminate\Support\ServiceProvider;

class HarvestServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('harvest', function () {
            return new Harvest();
        });
    }
}
