<?php

namespace App\Observers;

use App\Product;


class ProductObserver
{
    /**
     * Handle the product "created" event.
     * Create: php artisan make:observer ProductObserver --model=Product
     * @param  \App\Product  $product
     * @return void
     */
    public function creating(Product $product)
    {
        #--- poner el nombre del producto en mayuscula
        $product->title = strtoupper($product->title);

        if ($product->quantity < 10) {
            $product->price = 2 * 2;
        } else if ($product->quantity >= 10) {
            $product->price = 5 * 5;
        }

    }

    /**
     * Handle the product "deleted" event.
     *
     * @param  \App\Product  $product
     * @return void
     */
    public function deleted(Product $product)
    {
        //
    }

    /**
     * Handle the product "updated" event.
     *
     * @param  \App\Product  $product
     * @return void
     */
    public function updated(Product $product)
    {
        //
    }

    /**
     * Handle the product "restored" event.
     *
     * @param  \App\Product  $product
     * @return void
     */
    public function restored(Product $product)
    {
        //
    }

    /**
     * Handle the product "force deleted" event.
     *
     * @param  \App\Product  $product
     * @return void
     */
    public function forceDeleted(Product $product)
    {
        //
    }
}
