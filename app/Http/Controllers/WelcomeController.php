<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Items;

class WelcomeController extends Controller
{
    public function show()
    {
        $uploads = Items::orderBy("id", "desc")->get();

        return view("welcome",["images" => $uploads]);
    }
}
