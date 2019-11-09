<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Connectors\BitrixConnector;

class BitrixProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    { 
        $this->app->bind(BitrixConnector::class, function ($app) {
			return new BitrixConnector();
		});
    }
}
