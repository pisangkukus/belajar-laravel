<?php

use App\Http\Controllers\ItemController;
use Illuminate\Support\Facades\Route;
use App\Models\Core;
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

Route::get('/', function () {
    return view('home',[
        "title"=>"Home",
    ]);
});


Route::get('/about',function(){
    return view('/about',[
        "title"=>"About",
        "name"=>"Kwang",
        "email"=>"hongkwang321@gmail.com",
        "image"=>"parkiran.jpg"
    ]);
});

Route::get ('/core',[ItemController::class,'index']);

Route::get ('/core/{item:slug}',[ItemController::class,'showDetails']);

Route::get('/category/{category:slug}',[ItemController::class,'category']);

Route::get('/categories',[ItemController::class,'categories']);

Route::get('/stores/{store:username}',[ItemController::class,'stores']);