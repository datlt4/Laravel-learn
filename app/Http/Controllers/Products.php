<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Products extends Controller
{
    public function index()
    {
        $title = "Laravel Course";
        // return $title;
        // $x = 1;
        // $y = 2;
        // return view("products.index", compact("title", "x", "y"));
        // $name = "Trang";
        // return view("products.index")->with("name", $name);

        // $myphone = ["name" => "Samsung Galaxy A8 Star", "Year" => 2019, "isFavorited" => true];
        // return view("products.index", compact("myphone"));
        print_r(route("user"));

        // return view("products.index");
        return view("products.index");
    }

    public function about()
    {
        return "This is About page";
    }

    // public function detail($branch)
    // public function detail($id)
    public function detail($branch, $id)
    {

        return "Product's id = " . $id . "  branch: " . $branch;

        // return view("products.index", ["product" => ["name" => "S23 ulatr", "year" => "2023"]]);

        // $phones = ["apple" => "Iphone 14 PRM", "samsung" => "Samssung Galaxy S23 Ulatr"];
        // return view("products.index", ["branch" => $phones[$branch] ?? "Unknown branch"]);
    }
}
