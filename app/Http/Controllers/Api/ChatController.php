<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
    public function getListMess($id)
    {
        $listMess = Message::orderBy('id','DESC')->skip(0)->take(10)->get()->reverse();
        return response()->json([
            'messages' => $listMess,
        ]);
    }
}
