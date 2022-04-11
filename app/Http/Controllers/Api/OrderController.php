<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController
{
    function makeOrder(Request $request)
    {
        try {
            DB::beginTransaction();
            $data = $request->all();
            $user = $request->user();
            $order = Order::create([
                'user_id' => $user->id,
                'sub_total' => $data['sub_total'],
                'total' => $data['total'],
                'tax' => $data['tax'],
                'note' => $data['note'],
                'address' => $data['address'],
                'phone' => $data['phone'],
                'name' => $data['name'],
                'status' => 1,
            ]);
            $products = $data['products'];
            foreach ($products as $product) {
                OrderProduct::create([
                    'order_id' => $order->id,
                    'product_id' => $product['id'],
                    'quantity' => $product['quantity'],
                    'price' => $product['price'],
                    'name' => $product['name'],
                ]);
            }
            DB::commit();
            return response()->json($order, 201);

        } catch (\Exception $exception) {
            DB::rollBack();
            return response()->json([
                'message' => 'Không thể đặt hàng. Vui lòng thử lại' . $exception->getMessage()
            ], 503);
        }
    }

}
