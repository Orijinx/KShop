<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Cart;
use App\storage;
use App\Product;
use App\Cart_conn;

class MainController extends Controller
{
    //Обработка главной страницы
    public function IndexView()
    {
        $products = Product::all()->take(8);//8 объектов продукции для отображения на главной странице
        if (Auth::check()) {

            $cart = Cart::where("id", Auth::user()->cart_id)->where("isOrder", false)->first();
            $cart_con = Cart_conn::where("cart_id", Auth::user()->cart_id)->get();
            $cart->amount = 0;

            foreach ($cart_con as $item) {
                $cart->amount += $item->Product->price * $item->quantity;
                $cart->save();
            }
            return view("welcome", compact("products", "cart"));
        } else {

            return view("welcome", compact("products"));


        }
    }

    public function CartView()
    {
        if (Auth::check()) {

            $cart = Cart::where("id", Auth::user()->cart_id)->first();
            $cart_con = Cart_conn::where("cart_id", Auth::user()->cart_id)->get();
            $cart->amount = 0;
            foreach ($cart_con as $item) {
                $cart->amount += $item->Product->price * $item->quantity;
                $cart->save();
            }
            return view("cart", compact("cart", "cart_con"));
        } else {
            return back();
        }
    }

    public function ProductView($id)
    {
        $product = Product::where("id", $id)->first();

        if (Auth::check()) {
            $cart = Cart::where("id", Auth::user()->cart_id)->where("isOrder", false)->first();
            $cart_con = Cart_conn::where("cart_id", Auth::user()->id)->get();
            $cart->amount = 0;
            foreach ($cart_con as $item) {
                $cart->amount += $item->Product->price * $item->quantity;
                $cart->save();
            }
            return view("product", compact("cart", "product"));

        } else {
            return view("product", compact("product"));
        }

    }

    public function ShopView()
    {
        $products = DB::table('products')->simplePaginate(5);

        if (Auth::check()) {

            $cart = Cart::where("id", Auth::user()->cart_id)->first();
            $cart_con = Cart_conn::where("cart_id", Auth::user()->cart_id)->get();
            $cart->amount = 0;
            foreach ($cart_con as $item) {
                $cart->amount += $item->Product->price * $item->quantity;
                $cart->save();
            }
            return view("shop", compact("cart", "cart_con","products"));
        } else {

            return view('shop', ['products' => $products]);



        }


    }

    public function OrderView(){

    }

}

