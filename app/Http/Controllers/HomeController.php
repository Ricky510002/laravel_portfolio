<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Items;
use App\Models\User;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $items = Items::orderBy("id", "desc")->paginate(12);

        $user_univ = Auth::user()->univ;

       
        $recommend_items = Items::where('school_name', $user_univ)->paginate(12);
        
        return view("home",["items" => $items, "recommend_items" => $recommend_items, "user_univ" => $user_univ]);
    }


    
    public function search(Request $request)
    {
       
        //$items = Items::where('item_title', $request->item_title)->get();
        $keyword = $request->input('search');
        
        $items = Items::where('item_title','like', '%'.$keyword.'%')->paginate(12);

        
        
        return view('home',['items' => $items]);
    }

    
 }
