<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::all();
        return view('admin.category.index', compact('categories'));
    }
    public function create(){
        return view('admin.category.create');
    }
    public function store(Request $request){
        $this->validate($request,[
            'name'=>'required|unique:categories|max:255',
            'color'=>'required',
        ]);
        $category = Category::create([
            'name' => $request->get('name'),
            'slug' => str_slug($request->get('name')),
            'description' => $request->get('description'),
            'color' => $request->get('color'),


        ]);
    $message = $category ? 'Categoria agragada correctamente' : 'La categoria no pudo agregarse';
    return redirect()->route('category.index')->with('message',$message);
    }
    public function show(Category $category){
    return $category;
    }
    public function edit(Category $category){
 return view('admin.category.edit', compact('category'));
    }
    public function destroy(Category $category){
$deleted = $category->delete();
$message = $deleted ? 'Cateoria eliminada':'No se pudo eliminar';
return redirect()->route('category.index')->with('message',$message);
    }
    public function update(Request $request,Category $category){
   $category->fill($request->all());
   $category->slug = str_slug($request->get('name'));
   $updated=$category->save();
   $message= $updated ? 'Categoria actualizada':'La categoria no se actualizo';
   return redirect()->route('category.index')->with('message',$message);
    }
}
