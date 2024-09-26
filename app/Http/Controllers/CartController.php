<?php

// app/Http/Controllers/CartController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function addToCart($productId) {
        $cartItem = Cart::where('product_id', $productId)->where("quantity",1)->first();
        
        if ($cartItem) {
            $cartItem->quantity += 1;
            $cartItem->save();
        } else {
            Cart::create([
                'user_id' => Auth::id(), // Static user
                'product_id' => $productId,
                'quantity' => 1
            ]);
        }
        
        return redirect('/cart')->with('success', 'Product added to cart.');
    }

    public function viewCart() {
        $cartItems = Cart::with('product')->where('user_id', Auth::id())->get();
        //dd($cartItems);
        // Calculate total price
        $totalPrice = $cartItems->sum(function($cartItem) {
            return $cartItem->product->price * $cartItem->quantity;
        });

        return view('cart.index', compact('cartItems', 'totalPrice'));
    }

    public function checkout() {
        Cart::where('user_id', 1)->delete();
        return redirect('/cart')->with('success', 'Checkout completed.');
    }
}
