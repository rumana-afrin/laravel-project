<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $latest = Product::with(['category', 'subcategory'])->latest()->take(4)->get();
        $product = Product::with(['category', 'subcategory'])->get();
        $category = Category::all();
        return view('website.content', ['p' => $latest, 'product' => $product, 'category' => $category]);
    }

    public function cart($id)
    {
        $cartId = Product::with(['category', 'subcategory'])->findOrFail($id);
        return response()->json($cartId);
    }

    public function cartitem()
    {
        return view('website.cart');
    }

    public function homesubcat($id)
    {$category = Category::all();
       $subcategory = Subcategory::find($id);
    //    dd($subcategory);
        return view('website.category',['subcategory' => $subcategory,'category' => $category]);
    }
}
