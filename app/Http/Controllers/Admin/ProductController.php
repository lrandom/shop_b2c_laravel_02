<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Category;
use App\Models\Discount;
use App\Models\Image;
use App\Models\Product;
use App\Models\User;
use App\Models\Variant;
use App\Models\VariantValue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller implements ICRUD
{
    //
    public function list()
    {
        // TODO: Implement list() method.
    }

    public function add()
    {
        // TODO: Implement add() method.
        $categories = Category::all();
        $discounts = Discount::all();
        $variants = Variant::all();
        return view('be.product.add', compact('categories', 'discounts', 'variants'));
    }

    public function doAdd(Request $request)
    {
        $files = $request->file('img');
        if (!$files || count($files) == 0) {
            return redirect()->back()->with('error', 'Vui lòng chọn ít nhất một hình ảnh');
        }


        try {
            DB::beginTransaction();
            //xử lý dữ liệu để chèn vào product
            $data = $request->all();
            unset($data['_token']);
            unset($data['variant']);
            unset($data['img']);
            $data['user_id'] = 1;
            $product = Product::create($data);

            //chèn vào bảng variant_value_products
            $variants = $request->input('variants');
            //dd($variants);
            foreach ($variants as $variant) {
                $variantArr = explode('|', $variant);//1/Color/2 => [1,'color',2]
                $variantValueProduct = array();
                $variantValueProduct['product_id'] = $product->id;
                $variantValueProduct['variant_value_id'] = $variantArr[2];
                $variantValueProduct['variant_id'] = $variantArr[0];
                $variantValueProduct['variant_name'] = $variantArr[1];
                DB::table('variant_value_products')->insert(
                    $variantValueProduct
                );
            }

            //chèn vào bảng image
            //upload image
            for ($i = 0; $i < count($files); $i++) {
                $file = $files[$i];
                //upload từng file
                $fileName = time() . $i . $file->getClientOriginalName();
                $file->storeAs('/products', $fileName, 'public');
                //chèn vào bảng image
                $image = new Image();
                $image->imageable_id = $product->id;
                $image->imageable_type = Product::class;
                $image->path = 'storage/products/' . $fileName;
                $image->save();
            }

            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', $e->getMessage());
        }
        // TODO: Implement doAdd() method.
        return redirect()->back()->with('success', 'Thêm sản phẩm thành công');
    }

    public function edit($id)
    {
        // TODO: Implement edit() method.
    }

    public function doEdit($id, Request $request)
    {
        // TODO: Implement doEdit() method.
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
    }


}
