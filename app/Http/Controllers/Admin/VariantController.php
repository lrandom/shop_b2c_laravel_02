<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Variant;
use Illuminate\Http\Request;
use PHPUnit\Exception;

class VariantController extends Controller
{
    //
    public function list()
    {
        // TODO: Implement list() method.
        $list = Variant::orderBy('updated_at', 'DESC')->paginate($this->paginateItems);
        return view('be.variant.list', compact('list'));
    }

    public function add()
    {
        // TODO: Implement add() method.
        return view('be.variant.add');
    }

    public function doAdd(Request $request)
    {
        // TODO: Implement doAdd() method.
        try {
            $data = $request->all();
            unset($data['_token']);
            Variant::create($data);
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Thêm thất bại');
        }
        return redirect(route('admin.variant.list'))->with('success', 'Thêm thành công');
    }

    public function edit($id)
    {
        // TODO: Implement edit() method.
        $obj = Variant::find($id);
        return view('be.variant.edit', compact('obj'));
    }

    public function doEdit($id, Request $request)
    {
        // TODO: Implement doEdit() method.
        try {

            $data = $request->all();
            unset($data['_token']);
            Variant::where('id', $id)->update($data);
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Sửa thất bại');
        }
        return redirect()->back()->with('success', 'Sửa thành công');
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
        try {
            Variant::where('id', $id)->delete();
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Xoá thất bại');
        }
        return redirect()->back()->with('success', 'Xoá thành công');
    }
}
