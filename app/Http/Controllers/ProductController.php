<?php

namespace App\Http\Controllers;
use App\Models\product;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        // dd($products);
        return view('products.index', compact('products'));
    }

    public function show($id)
    {
        $product = Product::where('product_id', $id)->firstOrFail();
        return view('products.show', compact('product'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'price' => 'required|numeric',
            'description' => 'nullable|string',
        ]);

        Product::create($request->all());

        return redirect('/products')->with('success', 'Product created successfully.');
    }

    public function edit($id)
    {
        $product = Product::where('product_id', $id)->firstOrFail();
        

        return view('products.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string',
            'price' => 'required|numeric',
            'description' => 'nullable|string',
        ]);

        $product = Product::where('product_id', $id)->firstOrFail();
        $product->update($request->all());

        return redirect('/products')->with('success', 'Product updated successfully.');
    }

    public function destroy($id)
    {
        Product::where('product_id', $id)->delete();

        return redirect('/products')->with('success', 'Product deleted successfully.');
    }

    public function search(Request $request)
    {
        $name = $request->get('name'); 
     
        $results = Product::where('name', 'like', '%' . $name . '%')->get();
    
        return response()->json($results);
    }

}