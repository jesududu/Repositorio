<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function __construct()
    {
        //Si no esxiste la variable de sesion carrito se crea guardado en un array vacio
        if (!\Session::has('cart')) \Session::put('cart', array());
    }

//Show Cart
    public function show()
    {
        $cart = \Session::get('cart');
        $total = $this->total();
        return view('store.cart', compact('cart','total'));
    }

//Add Cart
    public function add(Product $product)
    {
        $cart = \Session::get('cart');
        $product->quantity = 1;
        $cart[$product->slug] = $product;
        //Actualizamos la variable de session
        \Session::put('cart', $cart);

        return redirect()->route('cart-show');
    }

//Delete cart
    public function delete(Product $product)
    {
        $cart = \Session::get('cart');
        unset($cart[$product->slug]);
        \Session::put('cart', $cart);

        return redirect()->route('cart-show');
    }

//Trash cart
    public function trash()
    {
        \Session::forget('cart');

        return redirect()->route('cart-show');
    }

    //Update
    public function update(Product $product, $quantity)
    {
        $cart = \Session::get('cart');
        $cart[$product->slug]->quantity = $quantity;
        \Session::put('cart', $cart);

        return redirect()->route('cart-show');
    }

    //Total
    public function total()
    {
        $cart = \Session::get('cart');
        $total = 0;
        foreach ($cart as $item) {
            $total += $item->price * $item->quantity;
        }
        return $total;
    }
    public function orderDetail(){
        if(count(\Session::get('cart'))<=0) return redirect()->route('home');
        $cart = \Session::get('cart');
        $total = $this->total();
        return view('store.order-detail',compact('cart','total'));

    }
}
