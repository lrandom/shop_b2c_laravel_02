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
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller implements ICRUD
{
    //
    public function list()
    {
        // TODO: Implement list() method.
        $list = Product::orderBy('updated_at', 'DESC')->paginate($this->paginateItems);
        return view('be.product.list', compact('list'));
    }

    public function search(Request $request)
    {
        $q = $request->q;
        // TODO: Implement list() method.
        $list = Product::where('name','LIKE','%'.$q.'%')->orWhere('content','LIKE','%'.$q.'%')->orderBy('updated_at', 'DESC')->paginate($this->paginateItems);
        return view('be.product.list', compact('list'));
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
            unset($data['variants']);
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
        $obj = Product::find($id);
        $categories = Category::all();
        $discounts = Discount::all();
        $variants = Variant::all();
        $variantValueProducts = DB::table('variant_value_products')->where('product_id', $id)->get();
        return view('be.product.edit', compact('obj', 'categories', 'discounts', 'variants', 'variantValueProducts'));
    }

    public function doEdit($id, Request $request)
    {
        // TODO: Implement doEdit() method.

        try {
            DB::beginTransaction();
            //Sửa DB
            $data = $request->all();
            unset($data['_token']);
            unset($data['removeImages']);
            unset($data['img']);
            unset($data['variants']);
            //Tiến hành cập nhật vào DB
            Product::where('id', $id)->update($data);

            //Sửa variant_value_products table
            $variants = $request->input('variants');
            DB::table('variant_value_products')->where('product_id', $id)->delete();
            //Chèn cái mới vào
            foreach ($variants as $variant) {
                $variantArr = explode('|', $variant);//1/Color/2 => [1,'color',2]
                $variantValueProduct = array();
                $variantValueProduct['product_id'] = $id;
                $variantValueProduct['variant_value_id'] = $variantArr[2];
                $variantValueProduct['variant_id'] = $variantArr[0];
                $variantValueProduct['variant_name'] = $variantArr[1];
                DB::table('variant_value_products')->insert(
                    $variantValueProduct
                );
            }
            //END SỬA VARIANT


            $removeImages = $request->removeImages;
            if ($removeImages && $removeImages != "") {
                //convert removeImages thành mảng
                $removeImages = explode("|", $removeImages);
                // dd($removeImages);
                foreach ($removeImages as $removeImageId) {
                    //Xoá ảnh trong storage đi
                    //Xoá dữ liệu ảnh trong DB
                    $image = Image::find($removeImageId);
                    if ($image) {
                        Storage::disk('public')->delete($image->path);//xoả ảnh trong storage
                        $image->forceDelete();//xoá dữ liệu ảnh trong DB
                    }
                }
            }

            //chèn vào bảng image
            //upload image
            $files = $request->file('img');
            //dd($files);
            if ($files && count($files) != 0) {
                for ($i = 0; $i < count($files); $i++) {
                    try {
                        $file = $files[$i];
                        //upload từng file
                        $fileName = time() . $i . $file->getClientOriginalName();
                        $file->storeAs('/products', $fileName, 'public');
                        //chèn vào bảng image
                        $image = new Image();
                        $image->imageable_id = $id;
                        $image->imageable_type = Product::class;
                        $image->path = 'storage/products/' . $fileName;
                        $image->save();
                    } catch (\Exception $exception) {
                        dd($exception->getMessage());
                    }

                }
            }
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('failed', 'Sửa sản phẩm thành công');
        }
        return redirect()->back()->with('success', 'Sửa sản phẩm thành công');
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
    }


}
