<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    /**
     * Log in the user.
     *
     * @bodyParam   email    email
     * @bodyParam   password   password
     * @bodyParam   phone    sdt đăng nhập
     * @bodyParam   password   mật khẩu
     * @bodyParam   full_name   họ tên
     *
     * @response {
     *  "user": "thong tin đăng ký user",
     *  "message": "Đăng ký thành công",
     * }
     */
    public function signup(Request $request)
    {
        //return response()->json( ['message' => 'Đăng ký không thành công. Vui lòng thử lại'], 400);
        //$validated = $request->validated();
        $validated['password'] = Hash::make($request['password']);
        try {
            $user = User::create([
                'name' => trim($request->input('email')),
                'full_name' => trim($request->input('full_name')),
                'phone' => strtolower($request->input('email')),
                'email' => strtolower($request->input('email')),
                'password' => Hash::make($request->input('password'))
            ]);
        } catch (\Exception $exception) {
            return response()->json( ['message' => 'Đăng ký không thành công. Vui lòng thử lại'], 400);
        }

        //Mail::to($request->email)->send(new ConfirmUser($user));
        return response()->json(
            ["user" => $user, 'message' => 'Đăng ký thành công'], 200);
    }


    /**
     * Log in the user.
     *
     * @bodyParam   email    email đăng nhập
     * @bodyParam   password   password đăng nhập
     *
     * @response {
     *  "token": "eyJ0eXA...",
     *  "message": "Đăng nhập thành công",
     * }
     */
    public function login(Request $request)
    {
        $email = $request['email'];
        $password = $request['password'];
        $check = Auth::attempt([
            'email' => $email,
            'password' => $password,
        ]);
        if ($check) {
            $user = User::where('email', $email)->first();
            if ($user) {
                $accessToken = $user->createToken('poco')->accessToken;
                return response()->json(['token' => $accessToken, 'message' => 'Đăng nhập thành công'], 200);
            }
        }
        return response()->json(['message' => 'Đăng nhập thất bại, Eamil chưa được đăng ký hoặc mật khẩu không đúng'], 400);
    }
}

?>