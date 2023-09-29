<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   $category = Category::all();
       return view('admin.category.index',['category' =>$category]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $category = [
            'name' => $request->input('name'),
        ];

        if($request->hasFile('image')){
            $file = $request->file('image');
            $storee = $file->store('upload','public');
            $category['image'] = $storee;
        }

        Category::create($category);
        return redirect()->route('category.index')->with('data created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {   
        // dd($category);
        return view('admin.category.edit',['category' => $category]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        
        $category->name = $request->name;
    

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $path = $file->store('uploads', 'public');
            $category->image = $path;
    
            if ($category->image && Storage::exists($category->image)) {
                Storage::delete($category->image);
            }
        $category->save();
        }
        return redirect()->route("category.index")->with("success", "Category updated success");
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    { 
        
        $category->delete();
        return redirect()->route("category.index")->with("success", "Category updated success");

    }
}
