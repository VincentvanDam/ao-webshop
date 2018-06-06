<?php

namespace App;

use Illuminate\Http\Request;
use App\Products;
use Session;
use App\StoredItem;

class ShoppingCart{

    const SHOPPING_CART = 'shopping_cart';
    public $session;
    public $storedItems = [];


    public function __construct($session){
        $this->session = session();
        if (!empty($session)) {
            $this->storedItems = $this->session->get(self::SHOPPING_CART);
        }
    }
    public function add($productId) {
        $product = Products::findOrFail($productId);
        $qty = 0;
        $qty++;
        // If product id is not equal to null then store product in Object and push StoredItem to shopping_cart array
        if ($product != NULL) {
            $storedItem = new StoredItem($product, $qty);
            $this->storedItems = session()->push('shopping_cart', $storedItem);
        }
    }

    public function getItems() {
        // storedItems is an array
        return $this->storedItems;
    }
}
