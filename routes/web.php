<?php

use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\UserController;
Use App\Http\Controllers\ProductController;
Use App\Http\Controllers\CriticsandSuggestionsController;
// Use Session;

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

Route::get('/login', function () {
    return view('login');
});

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/logout', function (){
    Session::forget('user');
    return redirect('login');
});

Route::get('/critics', function () {
    return view('criticsandsuggestions');
});


Route::post("/login", [UserController::class, "login"]);
Route::get("/", [ProductController::class, "index"]);
Route::get("detail/{id}", [ProductController::class, "detail"]);
Route::get("/search", [ProductController::class, "search"]);
Route::post("add_to_cart", [ProductController::class, "add_to_cart"]);
Route::get("/cartlist", [ProductController::class, "cartList", "totalPrice"]);
Route::get("removecart/{id}", [ProductController::class, "removeCart"]);
// Route::get("ordernow", [ProductController::class, "totalPrice"]);
Route::view('/signup', 'signup');
Route::post("/signup", [UserController::class, "signup"]);

Route::get('/critics', [CriticsandSuggestionsController::class, 'index']);
Route::post('add', [CriticsandSuggestionsController::class, 'add']);