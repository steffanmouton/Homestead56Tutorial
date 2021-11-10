<?php

namespace App\Providers;

use App\Services\Twitter;
use Illuminate\Support\ServiceProvider;

class SocialServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton(Twitter::class, function() {
            return new Twitter(config('services.twitter.secret'));
        });
    }

    public function boot()
    {
        //
    }
}
