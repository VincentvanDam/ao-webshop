<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Products;

class CategoryController extends Controller{
    public function index(){
        $categories = Category::All();
        return view ('categories.index')->with('categories',$categories);
    }
    //
}
