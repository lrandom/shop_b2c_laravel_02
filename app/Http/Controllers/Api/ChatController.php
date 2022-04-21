<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{
    public function addMess(Request $request)
    {
        $chat = new Message();
        $userId = Auth::id();
        $chat->message = $request->message;
        $chat->user_id = $userId;
        $chat->save();
        return response()->json(['success' => true, 'message' => 'Thêm thành công']);
    }
}
