<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Category;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::all();
        return view('admin\product\index', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $product = new Product();
        $categories = Category::all();
        return view('admin.product.create', compact('product','categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductRequest $request)
    {
        // $data = $request->validate();
        $product = new Product;

        $product->name = $request->name;

        if($request->has('category_id')){
            $product->category_id = $request->category_id;
        }

        if($request->hasfile('image')){
            $file = $request->file('image');
            $filename = time(). '.' . $file->getClientOriginalExtension();
            $file->move('uploads/product/', $filename);
            $product->image = $filename;
        }

        $product->image=$filename;
        $product ->price=$request->price;
        $product ->quantity=$request->quantity;
        $product->save();

        return redirect('admin/product')->with('message', 'Product added successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($product_id)
    {
        $product = Product::find($product_id);
        $categories = Category::all();
        return view('admin.product.edit', compact('product','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductRequest  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(StoreProductRequest $request, $product_id)
    {
        $product = Product::find($product_id);

        $product->name = $request->name;

        if ($request->has('category_id')) {
            $product->category_id = $request->category_id;
        }

        if($request->hasfile('image')){
            $file = $request->file('image');
            $filename = time(). '.' . $file->getClientOriginalExtension();
            $file->move('uploads/product/', $filename);
            $product->image = $filename;
        }

        $product->image=$filename;
        $product ->price=$request->price;
        $product ->quantity=$request->quantity;
        $product->update();

        return redirect('admin/product')->with('message', 'Product Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($product_id)
    {
        $data = Product::find ($product_id);
        if($data){
            $destination = 'uploads/product/'.$data->image;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $data->delete();
            return redirect('admin/product')->with('message', 'Product Deleted Sucessfully');
        }

        else

        $data->delete();
        return redirect('admin/product')->with('message', 'ProductID not found');
    }
}
