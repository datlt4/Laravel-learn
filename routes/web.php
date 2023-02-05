<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
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

//Route::get("product", [ProductsController::class, "index"]);

Route::get("product/{id}", [ProductsController::class, "detail"]);

Route::get('/', function () {
    return view('home');
    //return env("APP_NAME");
});

Route::get('/user', function () {
    return "Đặng Thị Huyền Trang";
});

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
