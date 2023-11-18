<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\CartItem;
use Illuminate\Support\Facades\Session;

class CartItemController extends Controller
{
    public function add_cart(Request $request){
        $producto_id = $request->product_id;
        $user_id = 1;

        $sessionCartId = Session::get('cart_id');

        if($sessionCartId == null){
            $cart = Cart::create([
                'user_id' => $user_id,
            ]);
            Session::put('cart_id', $cart->id);
        }

        CartItem::create([
            'cart_id' => Session::get('cart_id'),
            'product_id'    => $producto_id,
            'cantidad' => 1
        ]);

    }
}
