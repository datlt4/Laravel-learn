<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Pages extends Controller
{
    public function index()
    {
        return view("index");
    }

    public function about()
    {
        // return view("about");

        // $name = "gNart";
        // return view("about")->with("name", "gNart");


        $names = array(["Dang", "Thi", "Huyen", "gNart"]);
        // return view("about")->with("names", $names[0]);
        // return view("about", ["names" => $names[0]]);
        return view('about')->with("names", $names[0]);
    }
}
