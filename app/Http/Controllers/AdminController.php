<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Product;
use App\User;
use App\Cart;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    //
    public function AdminView()
    {
        $prod = Product::all();
        $us = User::all();

        $orders = Cart::where("isOrder", true)->get();
        $total = 0;

        foreach ($orders as $o) {
            $total += $o->amount;
        }

        return view("panel.index", compact("prod", "us", "orders", "total"));
    }

    public function addProductView()
    {
        return view("panel.add-product");
    }

    public function addProduct(Request $req)
    {

        $file = $req->file('file');
        if ($req->hasFile('file')) {
            $product = new Product();
            $product->price = $req->price;
            $product->name = $req->name;
            $product->description = $req->description;
            $product->brand = $req->brand;
            $product->p_code = $req->code;
            Storage::putFileAs('public/upload', $file, $req->file("file")->getClientOriginalName());
            $product->img_path = 'storage/upload/' . $req->file("file")->getClientOriginalName();
            $product->save();
        }
        return back();
    }
    public function allProducts(){

//        $products = Product::all()->simplePaginate(15);
        $products =DB::table('products')->simplePaginate(5);

        return view('panel.products',['products'=>$products]);
    }
}
