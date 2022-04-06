<?php

namespace App\Http\Controllers\Api;

use App\Models\Product;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{

    public function detail($id)
    {
        $product = Product::find($id);
        $mightYouLikeProducts = Product::all();
        return response()->json([
            'product'=>$product,
            'mightYouLikeProducts' => $mightYouLikeProducts,
        ], 200);
    }
}
