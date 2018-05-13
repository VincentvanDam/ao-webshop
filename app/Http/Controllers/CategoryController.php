<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\categories;
use App\Articles;

class CategoryController extends Controller{
    public function index()
    {
        $categories = categories::All();
        return view ('categories.index')->with('categories',$categories);
    }
}
