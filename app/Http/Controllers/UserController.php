<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\User\UpdateRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\Items;
use App\Models\User;


class UserController extends Controller
{
    public function show($id)
    {
        $user = User::find($id);  
        //$users = User::get();  
        $items = Items::where('user_id', $id)->paginate(12);
        $bought_items = Items::where('buyer_id', $id)->paginate(12);
        $was_bought_items = Items::where('user_id',Auth::user()->id)->whereNotNull('sold_check')->paginate(12);

        
		
        return view('users.show', ['user' => $user, 'items' => $items, 'bought_items' => $bought_items, 'was_bought_items' => $was_bought_items]);
    }

    public function edit($id)
    {
        //$user = Auth::user(); //Auth::userはログイン中のユーザー情報を取得できる
        $user = User::find($id);  
        return view('users.edit', ['user' => $user]);
    }

    public function update(UpdateRequest $request)
    {
        $user = Auth::user();
        //$user->name = $request->name;と同じ
        $user->fill($request->all()); //代入のための書き換え部分をまとめて処理  user.phpのfillableで受け取るものを決める
      
        $user->save();
        $id = Auth::user()->id;
        // return redirect()->back()->with(['message' => '更新しました']);
        return redirect("/user/$id");

    }

    public function delete(User $user)
	{
        
		$user->delete();

		return redirect("/home");
    }
    


}

