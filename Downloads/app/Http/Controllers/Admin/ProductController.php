<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\Http\Requests\SaveProductRequest;
use App\Category;

class ProductController extends Controller
{
    public function index(){
        $products = Product::orderBy('id','desc')->paginate(5);
        return view('admin.product.index',compact('products'));

    }
    public function create(){
        $categories = Category::orderBy('id','desc')->pluck('name','id');
        return view('admin.product.create',compact('categories'));
    }
    public function store(SaveProductRequest $request){

        $data=[
            'name'=>$request->get('name'),
            'slug'=> str_slug($request->get('name')),
            'description'=>$request->get('description'),
            'extract'=>$request->get('extract'),
            'price'=>$request->get('price'),
            'image'=>$request->get('image'),
            'visible'=>$request->has('visible')?1:0,
            'category_id'=>$request->get('category_id'),

        ];
        $product = Product::create($data);
        $message = $product ? 'Producto agregado':'El producto no se agrego';
        return redirect()->route('product.index')->with('message',$message);
    }
    public function edit(Product $product){
        $categories = Category::orderBy('id','desc')->pluck('name','id');
        return view('admin.product.edit', compact('categories','product'));

    }
    public function update(SaveProductRequest $request,Product $product){
        $product->fill($request->all());
        $product->slug= str_slug($request->get('name'));
        $product->visible =$request->has('visible')?1:0;
        $updated = $product->save();
        $message =$updated ? 'Producto actualizado': 'El producto no se actualizo';
        return redirect()->route('product.index')->with('message',$message);
    }
    public function destroy(Product $product){
        $deleted = $product->delete();
        $message = $deleted ? 'Producto eliminado':'El producto no se elimino';
        return redirect()->route('product.index')->with('message',$message);
    }

    }
