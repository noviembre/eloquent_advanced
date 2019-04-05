<?php

namespace App\Providers;

use App\Observers\ProductObserver;
use Illuminate\Support\ServiceProvider;
use App\Product;
class ProductModelServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //Create:
        # php artisan make:provider ProductModelServiceProvider
        # It will tell laravel that we are observing Product model on the ProductObserver class.

        # 1. Autoloading of files
        # dumbo
        # 2. Configure the cache
        # php artisan config:cache

        Product::observe(ProductObserver::class);
    }
}
