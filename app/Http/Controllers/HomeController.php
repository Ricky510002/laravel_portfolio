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
        $users_univ = Auth::user()->univ;
        
        if (isset($users_univ)){
            $items = Items::where('school_name', $users_univ)->paginate(12);
        }else{
            $items = Items::orderBy("id", "desc")->paginate(12);
        }
    
        return view("home",["items" => $items]);
    }


    
    public function search(Request $request)
    {
       
        //$items = Items::where('item_title', $request->item_title)->get();
        $keyword = $request->input('search');
        
        $items = Items::where('item_title','like', '%'.$keyword.'%')->paginate(12);

        
        
        return view('home',['items' => $items]);
    }

    
 }
