<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Items;
use App\Models\User;

class ItemController extends Controller
{
    function show(){
        return view("item_form");
    }

    function upload(Request $request){
						$request->validate([
					'image' => 'required|file|image|mimes:png,jpeg,jpg',
					'item_title' => 'required | max:100',
					'price' => 'required | integer',
					'item_explanation' => 'required ',
					'item_state' => 'required',
					'shipping' => 'required',
					'from_where' => 'required',
					
				]);
				$image = $request->file('image');
			
				if($image) {
					//アップロードされた画像を保存する
					$path = $image->store('uploads',"public");
					//画像の保存に成功したらDBに記録する
					if($path){
						$item = new Items();
						
						$item->user()->associate(Auth::user());
						$item->item_title = $request->item_title;
						$item->price = $request->price;
						$item->item_explanation = $request->item_explanation;
						$item->item_state = $request->item_state;
						$item->school_name = $request->school_name;
						$item->shipping = $request->shipping;
						$item->from_where = $request->from_where;
						
						$item->file_name = $image->getClientOriginalName();
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

		public function detail($id)
		{
			$item = Items::find($id);
				

			return view('item_detail',['item' => $item]);
		}

		// public function my_item()
		// {
		// 	//$items = User::with('itemGet')->get(); 		
		// 	$items = Items::where('user_id', Auth::user()->id)->get();
		

		// 	return view('my_item', ['items' => $items]);
		// }

		public function item_edit($id)
    {

			$item = Items::find($id);
        
      return view('item_edit', ['item' => $item]);
    }

		public function item_update(Request $request , $id)
    {
				$item = Items::find($id);
				
        //$user->name = $request->name;と同じ
				$item->fill($request->all()); //代入のための書き換え部分をまとめて処理  user.phpのfillableで受け取るものを決める
				
      
        $item->save();
      
        return redirect("/home/$id");

		}
		
		public function item_delete(Request $request)
		{
		  Items::find($request->id)->delete();
	    $id = Auth::user()->id;
			return redirect("/user/$id");
		}





	
}
