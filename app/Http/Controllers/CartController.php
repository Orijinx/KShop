<?php

namespace App\Http\Controllers;

use App\Cart;
use Illuminate\Http\Request;
use App\Cart_conn;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    //
    public function addItem(Request $req){
        $cart_conn = Cart_conn::where("id",$req->id)->first();
        $cart_conn->quantity++;
        $cart_conn->save();
        return back();
    }
    //
    public function delItem(Request $req){
        $cart_conn = Cart_conn::where("id",$req->id)->first();
        $cart_conn->quantity--;
        $cart_conn->save();
        return back();
    }
    public function destroyItem(Request $req){
        $cart_conn = Cart_conn::where("id",$req->id)->first();
        $cart_conn->delete();
        return back();
    }
    public function addToCart(Request $req){
        if (Auth::check()) {
            $cart_conn = new Cart_conn();
            $cart_conn->product_id = $req->id;
            $cart_conn->cart_id = Auth::user()->cart_id;
            $cart_conn->save();
            return redirect('/cart');
        }else{
            return back()->with("status","Вы не авторизованы");
        }
    }
}
