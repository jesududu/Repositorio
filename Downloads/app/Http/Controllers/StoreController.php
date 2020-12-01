<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;

class StoreController extends Controller
{

    public function index(){
    $products = Product::all();
    //dd($products);
        return view('store.products', compact('products'));
    }
    public function show($slug){
        $product =Product::where('slug',$slug)->first();
        //dd($product);
        return view('store.show', compact('product'));

    }

    }
