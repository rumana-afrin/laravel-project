<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class SubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
       
        $subcategory = Subcategory::with(['category'])->get();
        return view('admin.subcategory.index',['subcategory' => $subcategory]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category = Category::all();
        return view('admin.subcategory.create',['category' => $category]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $subcategory =[
            'category_id'=>$request->input('category_id'),
            'name'=>$request->input('name'),
        ];

        Subcategory::create($subcategory);
        return redirect()->route('subcategory.index')->with('success');
    }

    /**
     * Display the specified resource.
     */
    public function show(Subcategory $subcategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Subcategory $subcategory)
    {
        // dd($subcategory);
        $category = Category::all();
       return view('admin.subcategory.edit',['subcategory' => $subcategory, 'category' => $category]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Subcategory $subcategory)
    {
    
            $subcategory->category_id = $request->input('category');
            $subcategory->name = $request->input('name');
     

       $subcategory->save();
       return redirect()->route('subcategory.index')->with('success');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Subcategory $subcategory)
    {
        $subcategory->delete();
        return redirect()->route('subcategory.index')->with('success');

    }
}
