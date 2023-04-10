<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use App\Models\Product;
use App\Http\Requests\StoreStockRequest;
use App\Http\Requests\UpdateStockRequest;

class StockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view ('admin.stock.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('admin.stock.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreStockRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStockRequest $request)
{
   // Validate the request data
    $request->validate([

        'name' =>'required|exists:product,name',
        'quantity' => 'required|integer|min:1',
    ]);

    // Get the product by name
$product = Product::where('name', $request->products)->firstOrFail();

// Get the associated stock object or create a new one
$stock = $product->stock ?? new Stock;
$stock->product_id = $product->id;

// Update the stock quantity
$stock->quantity += $request->quantity;
$stock->save();

// Update the product's stock level
$product->stock_level = $stock->quantity;
$product->save();

return redirect()->route('admin.stocks')->with('success', 'Stock added successfully.');

 }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function show(Stock $stock)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function edit(Stock $stock)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateStockRequest  $request
     * @param  \App\Models\Stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStockRequest $request, Stock $stock)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function destroy(Stock $stock)
    {
        //
    }
}
