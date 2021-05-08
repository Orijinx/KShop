<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Cart;
use App\storage;
use App\Product;
use App\Cart_conn;
use App\tags;

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

        $alltags = tags::all();
        $alltags = $alltags->sortBy(["parent_id"]);

        if (Auth::check()) {

            $cart = Cart::where("id", Auth::user()->cart_id)->first();
            $cart_con = Cart_conn::where("cart_id", Auth::user()->cart_id)->get();
            $cart->amount = 0;
            foreach ($cart_con as $item) {
                $cart->amount += $item->Product->price * $item->quantity;
                $cart->save();
            }
            return view("shop", compact("cart", "cart_con", "products", "alltags"));
        } else {

            return view('shop', ['products' => $products, "alltags" => $alltags]);


        }


    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function ShopTagView($id)
    {


        $products = DB::table('products')->where("tag_id", "=", $id)->simplePaginate(5);
        $tag = tags::where("id", $id)->first();
        $alltags = tags::all();
        $alltags = $alltags->sortBy(["parent_id"]);
        $parent_tags = collect();
        $son_tags = collect();
        if ($tag->parent_id) {
//            $parent_tags = collect();

            $parent_tag = tags::where("id", $tag->parent_id)->first();
//            array_push($parent_tags, $parent_tag);
            $parent_tags->push($parent_tag);
            while ($parent_tag->parent_id != null) {
                $parent_tag = tags::where("id", $parent_tag->parent_id)->first();

                //                array_push($parent_tags, $parent_tag);
                $parent_tags->push($parent_tag);
            }
            $parent_tags = $parent_tags->sortBy(["parent_id"]);
//        $parent_tag = tags::where("id",$tag->parent_id)->first();
        }


        $bid = $tag->id;

   do{
       tags::where("parent_id",$id);
   } while()
//
//        if ($tag->son_id) {
////            $son_tags = collect();
//            $son_t = \App\tags_connect::where("parent_id", $tag->id);
//            foreach ($son_t as $s) {
//                $prod = product::where("tag_id", $s->id)->get();
//                if (isset($prod)) {
//                    foreach ($prod as $p) {
//                        $products->push($p);
//
//                    }
//                }
//                $son_tags->push($s);
//                while ($s->son_id != null) {
//                    $s = tags::where("id", $s->son_id)->first();
//                    $prod = product::where("tag_id", $s->id)->get();
//                    if (isset($prod)) {
//                        foreach ($prod as $p) {
//                            $products->push($p);
//
//                        }
//
//                    }
////                array_push($parent_tags, $parent_tag);
//                    $son_tags->push($s);
//                }
//            }
//
//
//
//            $son_tags = $son_tags->sortBy(["son_id"]);
//        }
        if (Auth::check()) {

            $cart = Cart::where("id", Auth::user()->cart_id)->first();
            $cart_con = Cart_conn::where("cart_id", Auth::user()->cart_id)->get();
            $cart->amount = 0;
            foreach ($cart_con as $item) {
                $cart->amount += $item->Product->price * $item->quantity;
                $cart->save();
            }
            return view("shop", compact("cart", "cart_con", "products", "parent_tags", "tag", "alltags", "son_tags"));
        } else {

            return view('shop', ['products' => $products, "tag" => $tag, "parent_tags" => $parent_tags, "alltags" => $alltags, "son_tags" => $son_tags]);


        }


    }

    public function OrderView()
    {

    }

}

