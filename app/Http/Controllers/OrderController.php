<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;
use App\order_conn;
use Illuminate\Support\Facades\Auth;


class OrderController extends Controller
{
    //
    public function MakeOrder(Request $req){
        $cart = Cart::where("id",$req->cart_id)->first();
        $cart->isOrder = true;
        $cart->save();
        $order = new order_conn();
        $order->user_id = Auth::id();
        $order->cart_id = $cart->id;
        $order->save();

        $new_cart = new Cart();
        $new_cart->save();

        Auth::user()->cart_id = $new_cart->id;
        Auth::user()->save();
        return back();

    }
}
