<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::All();
        return view ('categories.index')->with('categories',$categories);
    }
}
