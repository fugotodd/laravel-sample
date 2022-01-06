<?php

namespace App\ShopCart;

use App\Models\Product;
use Illuminate\Support\Facades\Session;

class ShopCart
{
    private $key = 'shop_cart';

    protected $items;

    public function __construct()
    {
        $this->items = collect();
        $this->loadFromSession();
    }

    function loadFromSession()
    {
        if ($data = Session::get($this->key))
        {
            $this->items = collect($data['items']);
        }else{
            $this->saveToSession();
        }
    }

    protected function saveToSession()
    {
        Session::put($this->key, [
            'items' => $this->items
        ]);
    }

    function addItem(Product $product, $qty = 1)
    {
        $item = $this->items->get($product->id);
        if (!$item)
        {
            $this->items->put($product->id, [
                'title' => $product->title,
                'cover' => $product->cover,
                'price' => $product->price,
                'qty' => $qty,
            ]);
        }

        $this->saveToSession();
    }

    function removeItem($pid)
    {
        $this->items->forget($pid);
        $this->saveToSession();
    }

    function getItem($id)
    {
        return $this->items->get($id);
    }

    function hasItem($id)
    {
        return $this->items->has($id);
    }
}
