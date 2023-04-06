<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\CustomerDetail;
use App\Models\Product;


class POSController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $categories = Category::all();
        $customer = CustomerDetail::all();
        return view('admin.pos.index', compact('categories', 'products', 'customer'));

    }


    public function getProductsByCategory($category)
{
    $category = Category::with('products')->findOrFail($category);
    $products = $category->products;
    return view('admin.pos.index', compact('category', 'products'));
}


public function getProduct(Request $request, $id) {
    $category = Category::findOrFail($id);
    return response()->json($category->products);
}


//    public function search(Request $request)
  //  {
//
    //}

    // public function redirect{
    //     return view();
    // }
}
