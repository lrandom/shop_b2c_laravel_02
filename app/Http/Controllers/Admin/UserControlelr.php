<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use PHPUnit\Exception;

class UserControlelr extends Controller implements ICRUD
{
    //
    public function list()
    {
        // TODO: Implement list() method.
        $list = User::orderBy('updated_at', 'DESC')->paginate($this->paginateItems);
        return view('be.user.list', compact('list'));
    }

    public function add()
    {
        // TODO: Implement add() method.
        return view('be.user.add');
    }

    public function doAdd(Request $request)
    {
        // TODO: Implement doAdd() method.
        try {
            $data = $request->all();
            $data['password'] = Hash::make($data['password']);
            unset($data['_token']);
            //DB::table('users')->insert($data);
            User::create($data);
        } catch (\Exception $e) {
            $request->validate([
                'name' => 'required',
                'email' => 'required|email|unique:users',
                'password' => 'required|min:6',
            ]);
            return redirect()->back()->with('error', 'Thêm thất bại');
        }
        return redirect(route('admin.user.list'))->with('success', 'Thêm thành công');
    }

    public function edit($id)
    {
        // TODO: Implement edit() method.
        $obj = User::find($id);
        return view('be.user.edit', compact('obj'));
    }

    public function doEdit($id, Request $request)
    {
        // TODO: Implement doEdit() method.
        try {

            $data = $request->all();
            $data['password'] = Hash::make($data['password']);
            unset($data['_token']);
            User::where('id', $id)->update($data);
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Sửa thất bại');
        }
        return redirect()->back()->with('success', 'Sửa thành công');
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
        try {
            User::where('id', $id)->delete();
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Xoá thất bại');
        }
        return redirect()->back()->with('success', 'Xoá thành công');
    }

}
