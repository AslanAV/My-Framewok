<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\Service;

class AppServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        $this->app->bind('service', Service::class);
    }
}