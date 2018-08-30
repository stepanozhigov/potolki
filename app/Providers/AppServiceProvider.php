<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use TCG\Voyager\Http\Controllers\ContentTypes\Image as tcgImage;
use App\Http\Controllers\Voyager\Image as tcgAppImage;
class AppServiceProvider extends ServiceProvider
{
    
    /**
     * Bootstrap any application services.
     *
     * @return void
     */


    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //$this->app->bind('TCG\Voyager\Http\Controllers\ContentTypes\Image1', 'App\Http\Controllers\Voyager\Image');
        //dd($this->app->bind('TCG\VoyageentTypes\Image', 'App\Http\Controllers\Voyager\Image'));
        $this->app->bind(VoyagerBreadController::class, MyBreadController::class);
    }
}
