<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ShoppingCart;
use App\Products;
use Session;
use Auth;
use Input;


class CartController extends Controller{

    public function getProduct(Request $request, $id){
        $products = Products::findOrFail($id);
        $cart = new ShoppingCart($request->session());
        $cart->add($products->id);

        return redirect('products');
    }

    public function getShoppingCart(Request $request){
        $cart = new ShoppingCart($request->session());
        $items = $cart->getItems();

        return view('cart.index', compact('items'));
    }

    public function addProduct(){
        return redirect('products');
    }

}
