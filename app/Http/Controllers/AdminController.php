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
        $brands = \App\brand::all();
        $tags = \App\tags::all();
        return view("panel.add-product", compact("brands", "tags"));
    }

    public function BrandsView()
    {
        $brands = \App\brand::all();
        return view("panel.brands", compact("brands"));
    }

    public function TagsView()
    {
        $tags = \App\tags::all();
        return view("panel.tags", compact("tags"));
    }
    public function addTag(Request $req)
    {

        $tag = new \App\tags();
        foreach ($req->son as $s){
            if($s == $req->parent){
                return back()->with("status","Секция не может быть одновременно дочерней и отцовской");
            }
        }
        $tag->name = $req->name;

        foreach ($req->son as $s){
            if($s == $req->parent){
                return back()->with("status","Секция не может быть одновременно дочерней и отцовской");
            }
        }
        if($req->son){
            $tag->son_id = $req->son;
        }
        if($req->parent){
            $tag->parent_id = $req->parent;
        }
        $tag->save();
        return back()->with("status", "Tag added");
    }

    public function addBrand(Request $req)
    {
        $brand = new \App\brand();
        $brand->name = $req->name;
        $brand->save();
        return back()->with("status", "Brand added");
    }

    public function DelBrands(Request $req)
    {
        foreach ($req->id as $id) {
            $prod = Product::where("brand_id", $id)->get();
            foreach ($prod as $p) {
                $p->brand_id = null;
                $p->save();
            }
            \App\brand::where("id", $id)->delete();
        }
        return back()->with("status","Delete Success!");
    }

    public function addProduct(Request $req)
    {

        $file = $req->file('file');
        if ($req->hasFile('file')) {
            $product = new Product();
            $product->price = $req->price;
            $product->name = $req->name;
            $product->tag_id = $req->tag;
            $product->brand_id = $req->brand;
            $product->description = $req->description;
            Storage::putFileAs('public/upload', $file, $req->file("file")->getClientOriginalName());
            $product->img_path = 'storage/upload/' . $req->file("file")->getClientOriginalName();
            $product->save();
            return back()->with("status", "Product added!");
        }
        return back()->with("status", "Bad image");
    }

    public function allProducts()
    {

//        $products = Product::all()->simplePaginate(15);
        $products = Product::Paginate(5);

        return view('panel.products', ['products' => $products]);
    }
}
