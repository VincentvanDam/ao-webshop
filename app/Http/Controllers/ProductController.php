<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\categories;
use App\Products;

class ProductController extends Controller{
    public function index()
    {
        $products = Products::All();
        return view ('products.index')->with('products',$products);
    }
}
