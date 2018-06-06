<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Products;
use App\ShoppingCart;

class ProductController extends Controller{
    public function index(){
        $products = Products::All();
        return view('products.index', compact('products'));
    }

    public function display($id){
        $products = Products::findOrFail($id);
        return view('products.product_details', compact('products'));
    }
}
