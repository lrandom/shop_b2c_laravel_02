<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController
{
    function makeOrder(Request $request)
    {
        $data = $request->all();
        $order = Order::create($data);
        $products = $data['products'];
        $order->products()->attach($products);
        return response()->json($order, 201);
    }

}
