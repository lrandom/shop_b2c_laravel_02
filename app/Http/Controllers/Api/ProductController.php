<?php

namespace App\Http\Controllers\Api;

use App\Models\Product;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{

    public function getProductsByCategoryId($categoryId)
    {
        $products = Product::with('image')->where('category_id', $categoryId)->paginate(16);
        return response()->json($products, 200);
    }

    public function detail($id)
    {
        $product = Product::with('images')->find($id);
        $mightYouLikeProducts = Product::with('image')->get();
        return response()->json([
            'product' => $product,
            'mightYouLikeProducts' => $mightYouLikeProducts,
        ], 200);
    }
}
