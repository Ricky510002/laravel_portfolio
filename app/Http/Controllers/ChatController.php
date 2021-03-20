<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Items;
use App\Models\User;
use App\Models\Message;
use DateTime;

class ChatController extends Controller
{
    public function index($id) {
        $messages = Message::where('chat_place_id',$id)->get();
        
        
        $item = Items::find($id);
        $item->sold_check = now();
        $item->buyer_id= Auth::user()->id;
        $item->save();
     
        return view('messages.chat', ['messages' => $messages, 'item' => $id]);
    
    }

    public function createMessage(Request $request,$id){
        $message = new Message();

        $message->chat_place_id = $id;
        $message->sender_id = Auth::user()->id;
        $message->body= $request->body;
        
        
        
        $message->save();

        return redirect("{$id}/chat");
    }

    
    
    



}
