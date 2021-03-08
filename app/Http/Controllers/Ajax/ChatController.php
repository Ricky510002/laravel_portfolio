<?php

namespace App\Http\Controllers\Ajax;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Message;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{
    public function getMessages($id) {

        $res = [];
        $res['right'] = Message::where('chat_place_id',$id)->where('sender_id', Auth::user()->id)->get();
        $res['left'] = Message::where('chat_place_id',$id)->where('sender_id','!=', Auth::user()->id)->get();
        
        return  $res;
        
    }
    
    
    public function create(Request $request, $id) { 
        $message = new Message();

        
        $message->chat_place_id = $id;
        $message->sender_id = Auth::user()->id;
        $message->body= $request->message;
        
        $message->save();
    
        return "sample";
    }
}
