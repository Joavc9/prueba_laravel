<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\Http\Requests\product\ProductCreateRequest;
use App\Http\Requests\product\ProductUpdateRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::orderBy('created_at', 'asc')->get();
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductCreateRequest $request)
    {
        Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $request->image ? $request->file('image')->store('public') : "public/no_image.png",
            'price' => $request->price,
            'category' => $request->category,
        ]);
        return redirect()->route('products.index')->with('success', 'Producto creado correctamente');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::all();
        $product = Product::FindOrfail($id);
        return view('products.edit', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductUpdateRequest $request)
    {
        $product = Product::FindOrfail($request->id);
        $product->name = $request->name;
        $product->description = $request->description;
        $product->image = $request->image ? $request->file('image')->store('public') : $product->image;
        $product->price = $request->price;
        $product->category = $request->category;
        $product->save();
        return redirect()->route('products.index')->with('success', 'Producto actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $product = Product::FindOrfail($request->id);
        if ($product->image == "public/no_image.png") {
            $product->delete();
        } else {
            Storage::delete($product->image);
            $product->delete();
        }
        return redirect()->route('products.index')->with('success', 'Producto eliminado correctamente');
    }
}
