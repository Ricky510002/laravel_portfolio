<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Items;

class ItemController extends Controller
{
    function show(){
        return view("item_form");
    }

    function upload(Request $request){
        $request->validate([
			'image' => 'required|file|image|mimes:png,jpeg,jpg'
		]);
		$Items = $request->file('image');
	
		if($Items) {
			//アップロードされた画像を保存する
			$path = $Items->store('uploads',"public");
			//画像の保存に成功したらDBに記録する
			if($path){
				$item = new Items();
				$item->file_name = $Items->getClientOriginalName();
				$item->file_path = $path;
				$item->save();

				// Items::create([
				// 	"file_name" => $Items->getClientOriginalName(),
				// 	"file_path" => $path
				// ]);
			}
		}

		return redirect("/home");
		}
		
}
