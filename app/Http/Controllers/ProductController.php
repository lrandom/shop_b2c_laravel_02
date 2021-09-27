<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    //Xem chi tiet sp
    public function detail($id)
    {
        $product = Product::find($id);


        //check cookie có tồn tại hay không
        if(!isset($_COOKIE['views_product_'.$id])){
            $product->views = $product->views+1;
            $product->save();

            setcookie('views_product_' . $id,$id,time()+60 * 60); //3600 => 1 tiếng
        }

        $mightYouLikeProducts = Product::all();
        return view('fe.products.detail', compact('product', 'mightYouLikeProducts'));
    }


    //danh mục
    public function category($id)
    {
        $products = ($id==-1) ? Product::paginate(16) : Product::where('category_id', $id)->paginate();
        $category = ($id==-1) ?null : Category::find($id);
        $allCategory = Category::all();
        return view('fe.products.category', compact('products','category','allCategory'));
    }
}
