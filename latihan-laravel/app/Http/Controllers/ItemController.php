<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Core;
use App\Models\User;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index(){
        return view('/core',[
            'title'=>'Katalog',
            'items'=>Core::latest()->get()
        ]);
    }

    public function showDetails(Core $item){
        return view('/item',[
            'title'=>"Item",
            'item'=>$item
        ]);
    }

    public function category(Category $category){
        return view('category',[
            'title'=>$category->name,
            'items'=>$category->item,
            'name'=>$category->name
        ]);
    }

    public function categories(Category $category){
        return view ('categories',[
            'title'=>$category->name,
            'categories'=>Category::all()
        ]);
    }

    public function stores(User $store){
        return view ('core',[
            'title'=>'Store',
            'items'=>$store->core,
        ]);
    }
}
