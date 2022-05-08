<?php

namespace App\Http\Controllers;

use App\Models\Cat;
use App\Models\Product;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        $products = Product::all();
        $data = compact('products');
        return view('pages.index', $data);
    }
    public function cart(Request $request){
        $products = Product::query()->where(['id'=>$request->id])->get();
        return view('pages.cart',['products'=>$products]);
    }
    public function categories(){
        $cats = Cat::all();
        $data = compact('cats');
        return view('pages/categories', $data);
    }


    public function checkout(){
        return view('pages/checkout');
    }

    public function contact(){
        return view('pages/contact');

    }

    public function product(){
        $products = Product::all();
        $data = compact('products');
        return view('pages.product', $data);
    }
}
