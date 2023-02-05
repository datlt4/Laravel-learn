<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        $title = "Laravel Course";
        $x = 1;
        $y = 2;
        //return view("products.index", compact("title", "x", "y"));
        $name = "Trang";
        //return view("products.index")->with("name", $name);
        $myphone = ["name" => "Samsung Galaxy A8 Star", "Year" => 2019, "isFavorited" => true];
        //return view("products.index", compact("myphone"));
        return view("products.index", ["myphone" => $myphone]);
    }

    public function detail($id)
    {
        return "Product's id = " . $id;
    }

    public function about()
    {
        return "This is About page";
    }
}
