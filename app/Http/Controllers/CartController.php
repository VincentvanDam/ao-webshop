<?php

namespace App\Http\Controllers;

use App\Products;
use App\ShoppingCart;
use App\Order;
use Session;
use Illuminate\Http\Request;
use Stripe\Charge;
use Stripe\Stripe;
use Auth;


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
        if (!Session::has('cart')) {
            return view('cart.index');
        }
        $oldCart = Session::get('cart');
        $cart = new ShoppingCart($oldCart);
        return view('cart.index', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);
    }

    public function getCheckout(){
        if (!Session::has('cart')) {
            return view('cart.index');
        }
        $oldCart = Session::get('cart');
        $cart = new ShoppingCart($oldCart);
        $total = $cart->totalPrice;
        return view('cart.checkout', ['total' => $total]);
    }

    public function postCheckout(Request $request)
    {
        if (!Session::has('cart')) {
            return redirect()->route('cart.getCart');
        }
        $oldCart = Session::get('cart');
        $cart = new ShoppingCart($oldCart);
        Stripe::setApiKey('sk_test_LyaKReg8xUARTSBLA5SgcuYe');
        try {
            $charge = Charge::create(array(
                "amount" => $cart->totalPrice * 100,
                "currency" => "eur",
                "source" => $request->input('stripeToken'), // obtained with Stripe.js
                "description" => "Test Charge"
            ));
            $order = new Order();
            $order->cart = serialize($cart);
            $order->address = $request-input('address');
            $order->name = $request-input('name');
            $order->payment_id = $charge->id;

            Auth::user()->order()->save();
        } catch (\Exception $e) {
            return redirect()->route('checkout')->with('error', $e->getMessage());
        }
        Session::forget('cart');
        return redirect()->route('product.index')->with('success', 'Successfully purchased products!');
    }
}
