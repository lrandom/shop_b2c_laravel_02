<?php

namespace App\Http\Controllers\Api;

use App\Models\Product;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function getHome()
    {
        $lastProducts = Product::with('image')->orderBy('id', 'DESC')->limit(8)->get();
        $topViewProducts = Product::with('image')->orderBy('views', 'DESC')->limit(8)->get();
        $topSoldProducts = Product::with('image')->orderBy('sold', 'DESC')->limit(8)->get();

        return response()->json([
            'lastProducts' =>  array_merge($lastProducts->toArray(), $lastProducts->toArray()),
            'topViewProducts' => array_merge($topViewProducts->toArray(), $topViewProducts->toArray()),
            'topSoldProducts' => array_merge($topSoldProducts->toArray(), $topSoldProducts->toArray()),
        ], 200);
    }
}
