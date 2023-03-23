<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;


class POSController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $categories = Category::all();
        return view('admin.pos.index', compact('categories', 'products'));

    }


    public function getProductsByCategory($category)
{
    $category = Category::with('products')->findOrFail($category);
    $products = $category->products;
    return view('admin.pos.index', compact('category', 'products'));
}



//    public function search(Request $request)
  //  {
//
    //}

    // public function redirect{
    //     return view();
    // }
}
