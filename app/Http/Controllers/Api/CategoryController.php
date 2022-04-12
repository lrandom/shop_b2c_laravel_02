<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Order;
use App\Models\OrderProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController
{
    public function getCategories()
    {
        $categories = Category::paginate(15);
        return response()->json($categories, 200);
    }
}

?>
