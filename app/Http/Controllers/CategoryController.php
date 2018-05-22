<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Products;

class CategoryController extends Controller{
    public function index(){
        $categories = Category::All();
        return view('categories.index', compact('categories'));
    }

    public function display($id)
    {
        $categories = Category::findOrFail($id);
        return view('categories.categorie_details', compact('categories'));

    }
}
