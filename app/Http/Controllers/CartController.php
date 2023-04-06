<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addToCart(Request $request)
    {
        $data=array();
        $data['id']=$request->id;
        $data['name']=$request->name;
        $data['quantity']=$request->quantity;
        $data['price']=$request->price;
        echo "<pre>";
        print_r($data);
    }


}
