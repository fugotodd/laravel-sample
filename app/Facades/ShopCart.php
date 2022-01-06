<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class ShopCart extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'shop-cart';
    }

}
