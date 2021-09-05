<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Variant;
use App\Models\VariantValue;
use Illuminate\Http\Request;
use PHPUnit\Exception;

class VariantValueController extends Controller
{
    //
    public function list()
    {
        // TODO: Implement list() method.
        $list = VariantValue::orderBy('updated_at', 'DESC')->paginate($this->paginateItems);
        return view('be.variant_value.list', compact('list'));
    }

    public function add()
    {
        // TODO: Implement add() method.
        $variants = Variant::all();
        return view('be.variant_value.add',compact('variants'));
    }

    public function doAdd(Request $request)
    {
        // TODO: Implement doAdd() method.
        try {
            $data = $request->all();
            unset($data['_token']);
            VariantValue::create($data);
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Thêm thất bại');
        }
        return redirect(route('admin.variant_value.list'))->with('success', 'Thêm thành công');
    }

    public function edit($id)
    {
        // TODO: Implement edit() method.
        $obj = VariantValue::find($id);
        $variants = Variant::all();
        return view('be.variant_value.edit', compact('obj','variants'));
    }

    public function doEdit($id, Request $request)
    {
        // TODO: Implement doEdit() method.
        try {

            $data = $request->all();
            unset($data['_token']);
            VariantValue::where('id', $id)->update($data);
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Sửa thất bại');
        }
        return redirect()->back()->with('success', 'Sửa thành công');
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
        try {
            VariantValue::where('id', $id)->delete();
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Xoá thất bại');
        }
        return redirect()->back()->with('success', 'Xoá thành công');
    }
}
