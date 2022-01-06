<?php

namespace App\Providers;

use App\ShopCart\ShopCart;
use Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if ($this->app->environment('local'))
        {
            $this->app->register(IdeHelperServiceProvider::class);
        }

        $this->app->bind('shop-cart', ShopCart::class);
        $this->app->singleton(ShopCart::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
