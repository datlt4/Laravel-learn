<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Products;
use App\Http\Controllers\Pages;
use App\Http\Controllers\Posts;
use App\Http\Controllers\Foods;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get("/product", [Products::class, "index"])->name("product");
// Route::get("/product/{id}", [Products::class, "detail"])->where("id",'[\d]+');
// Route::get("/product/{id}", [Products::class, "detail"])->where("id", '[a-zA-Z]+');
// Route::get("/product/{branch}/{id}", [Products::class, "detail"])->where(["name" => "[\w]+", "id" => "[\d]+"]);

Route::get('/', function () {
    return view('index');
    //return env("APP_NAME");
});


Route::get("/posts", [Posts::class, "index"]);

Route::resource("/foods", Foods::class);

Route::get('/about', [Pages::class, "about"])->name("about");

Route::get('/user', function () {
    return "Đặng Thị Huyền Trang";
})->name("user");

Route::get("/food",  function () {
    return ["Sushi", "Miso"];
});

Route::get('/aboutme', function () {
    return response()->json(["name" => "Trang", "age" => "24"]);
});

//response another request = redirect
Route::get("/something", function () {
    return redirect("/"); // redirect to root
});
