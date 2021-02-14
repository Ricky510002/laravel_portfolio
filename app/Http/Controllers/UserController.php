<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\User\UpdateRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class UserController extends Controller
{
    public function show()
    {
        $user = Auth::user();  
        //$users = User::get();  
        
        return view('users.show', ['user' => $user]);
    }

    public function edit()
    {
        $user = Auth::user(); //Auth::userはログイン中のユーザー情報を取得できる
        
        return view('users.edit', ['user' => $user]);
    }

    public function update(UpdateRequest $request)
    {
        $user = Auth::user();
        //$user->name = $request->name;と同じ
        $user->fill($request->all()); //代入のための書き換え部分をまとめて処理  user.phpのfillableで受け取るものを決める
      
        $user->save();
        
        // return redirect()->back()->with(['message' => '更新しました']);
        return redirect("/users");

    }

    public function delete(User $user)
	{
        
		$user->delete();

		return redirect("/home");
    }
    


}

