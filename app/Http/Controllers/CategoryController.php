<?php

namespace App\Http\Controllers;
use App\Models\category;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function category()
    {
        $categorys = category::all();
        return response()->json($categorys);
    }

    public function show($id)
    {
        $category = category::where('category_id', $id)->firstOrFail();
        return response()->json($category);
    }

    public function create()
    {
        return view('categorys.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'price' => 'required|numeric',
            'description' => 'nullable|string',
        ]);

        category::create($request->all());

        return redirect('/categorys')->with('success', 'category created successfully.');
    }

    public function edit($id)
    {
        $category = category::where('category_id', $id)->firstOrFail();
        

        return view('categorys.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string',
            'price' => 'required|numeric',
            'description' => 'nullable|string',
        ]);

        $category = category::where('category_id', $id)->firstOrFail();
        $category->update($request->all());

        return redirect('/categorys')->with('success', 'category updated successfully.');
    }

    public function destroy($id)
    {
        category::where('category_id', $id)->delete();

        return redirect('/categorys')->with('success', 'category deleted successfully.');
    }

    public function search(Request $request)
    {
        $name = $request->get('name'); 
     
        $results = category::where('name', 'like', '%' . $name . '%')->get();
    
        return response()->json($results);
    }

}