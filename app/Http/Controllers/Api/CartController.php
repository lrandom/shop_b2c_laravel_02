<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;

class CartController extends Controller
{
    const CART_KEY = 'CART';

    //thêm sp vào giỏ hàng
    public function addItemToCart($id, Request $request)
    {
        if ($request->session()->exists(self::CART_KEY)) {
            //đã có giỏ hàng
            $cart = $request->session()->get(self::CART_KEY);
            //dd($cart);
            $found = false;
            for ($i = 0; $i < count($cart); $i++) {
                if ($id == $cart[$i]['product']->id) {
                    //có sp trong giỏ hàng
                    $cart[$i]['quantity'] = $cart[$i]['quantity'] + 1;
                    $found = true;
                    break;
                }
            }

            $product = Product::find($id);
            if (!$found) {
                //không có sp
                array_push($cart, [
                    'product' => $product,
                    'quantity' => 1
                ]);
            }
            $request->session()->put(self::CART_KEY, $cart);
        } else {
            //chưa có giỏ hàng
            $cart = [];
            $product = Product::find($id);

            array_push($cart, [
                'product' => $product,
                'quantity' => 1
            ]);
            $request->session()->put(self::CART_KEY, $cart);
        }

        return response()->json(['msg' => 'Add item success', 'cart' => $cart], 200);
    }

    //xoá một sản phẩm trong giỏ hàng
    public function deleteItemCart($id, Request $request)
    {
        $cart = $request->session()->get(self::CART_KEY);
        $cartClc = collect($cart);
        $cart = $cartClc->filter(function ($item) use ($id) {
            return $item['product']->id != $id;
        });
        $cart = collect($cart->values());//đánh lại chỉ số
        $request->session()->put(self::CART_KEY, $cart->toArray());
        return response()->json(['msg' => 'Delete item success', 'cart' => $cart], 200);
    }

    //cập nhật số lượng sản phẩm trong giỏ hàng
    public function updateItemQuantity($id, $quantity, Request $request)
    {
        $cart = $request->session()->get(self::CART_KEY);
        $cartClc = collect($cart);
        $cart = $cartClc->map(function ($item) use ($id, $quantity) {
            if ($item['product']->id == $id) {
                //tang/giam sl
                $item['quantity'] = $item['quantity'] + $quantity;
                return $item;
            }
            return $item;
        });

        $cart = $cart->toArray();
        $request->session()->put(self::CART_KEY, $cart);
        return response()->json(['msg' => 'Update item quantity success', 'cart' => $cart], 200);
    }

    //Xoá toàn bộ giỏ hàng
    public function clearAll(Request $request)
    {
        $request->session()->flush();
        return response()->json(['msg' => 'Clear all item in the cart'], 200);
    }


    //lấy về toàn bộ sp trong giỏ hàng
    public function getItems(Request $request)
    {
        $cart = $request->session()->get(self::CART_KEY);
        return response()->json(['cart' => $cart], 200);
    }
}
