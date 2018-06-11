<?php

namespace App\Http\Controllers;

use App\ShoppingCart;
use Session;
use Illuminate\Http\Request;
use App\Products;


class CartController extends Controller{

    public function addProduct(Request $request, $id){
        $product = Products::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new ShoppingCart($oldCart);
        $cart->add($product, $product->id);

        $request->session()->put('cart', $cart);
        return redirect()->route('product.index');
    }

    public function getCart(){
        if (Session::has('cart')) {
            return view('cart.index', ['products' => null]);
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('cart.index', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);
    }
}
