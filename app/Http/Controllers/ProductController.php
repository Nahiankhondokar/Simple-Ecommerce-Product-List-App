<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\productCreateRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::query()->orderByDesc('id')->get();
        return view('dashboard', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(productCreateRequest $request)
    {
        Product::query()->create([
            'name'          => $request->name,
            'desc'          => $request->desc,
            'price'         => $request->price,
            'quantity'      => $request->quantity,
        ]);

        return redirect()->route('product.index')->with('success', 'Product created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::find($id);
        if(!$product){
            return redirect()->route('product.index')->with('error', 'Product not found');
        }

        return view('product.view', ['product'=>$product]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::find($id);
        if(!$product){
            return redirect()->route('product.index')->with('error', 'Product not found');
        }

        return view('product.edit', ['product'=>$product]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product = Product::find($id);
        if(!$product){
            return redirect()->route('product.index')->with('error', 'Product not found');
        }
        $product->name      = $request->name;
        $product->price     = $request->price;
        $product->quantity  = $request->quantity;
        $product->desc      = $request->desc;
        $product->save();

       return redirect()->route('product.index')->with('success', 'Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::find($id);
        if(!$product){
            return redirect()->route('product.index')->with('error', 'Product not found');
        }

        $product->delete();
        return redirect()->route('product.index')->with('success', 'Product deleted successfully');
    }
}
