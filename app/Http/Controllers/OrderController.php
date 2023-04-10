<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderDetails;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function placeOrder(Request $request){
        $order = [
            'total' => $request->total,
            'discount' => $request->discount,
            'table_id' => $request->table_id,
            'status' => 'Pending'
        ];
        $newOrder = Order::create($order);
        foreach($request->cartItems as $cartItem){
            $orderDetails = [
                'order_id' => 1,
                'product_id' => $cartItem['id'],
                'KOT_Details' => 'Pending',
                'quantity' => $cartItem['quantity'],
                'product_cost' => $cartItem['price']
            ];
            OrderDetails::create($orderDetails);
        }
        return response()->json(['message'=>'success'],200);
    }
}
