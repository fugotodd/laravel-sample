<?php

namespace App\Http\Controllers;

use App\Facades\ShopCart;
use App\Http\Requests\AddCartRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    function addCart(AddCartRequest $request)
    {
        $product = Product::find($request->get('pid'));
        ShopCart::addItem($product);
        return response()->json(ShopCart::getItem($product->id));
    }

    function remove($pid)
    {
        ShopCart::removeItem($pid);
        return response()->json();
    }
}
