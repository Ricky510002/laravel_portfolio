<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Items;

class WelcomeController extends Controller
{
    public function show()
    {
        $items = Items::orderBy("id", "desc")->paginate(12);

        return view("welcome",["items" => $items]);
    }

    public function search(Request $request)
    {
       
        //$items = Items::where('item_title', $request->item_title)->get();
        $keyword = $request->input('search');
        
        $items = Items::where('item_title','like', '%'.$keyword.'%')->paginate(12);

        
        
        return view('welcome',['items' => $items]);
    }
}
