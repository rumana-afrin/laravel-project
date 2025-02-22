<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = Product::with(['category', 'subcategory'])->get();
        return view('admin.product.index', ['product' => $product]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category = Category::all();
        $subcategory = Subcategory::all();

        return view('admin.product.create',['category' => $category, 'subcategory' => $subcategory]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {   
        $data = [
            'category_id' => $request->input('category_id'),
            'subcategory_id' => $request->input('subcategory_id'),
            'name' => $request->input('name'),
            'details' => $request->input('details'),
            'price' => $request->input('price'),
            'quantity' => $request->input('quantity'),
            'discount' => $request->input('discount'),
            'active' => $request->input('active'),
            'status' => $request->input('status'),
            'featured' => $request->input('featured'),
        ];
    
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $path = $file->store('uploads', 'public'); 
            $data['image'] = $path;
        }
    
        $product = Product::create($data);
    
        
        return redirect()->route('product.index')->with('success', 'content created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $category = Category::all();
        $subcategory = Subcategory::all();
        return view ('admin.product.edit',['category' => $category, 'subcategory' => $subcategory, 'product' => $product]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route("product.index")->with("success", "Category updated success");

    }
}
