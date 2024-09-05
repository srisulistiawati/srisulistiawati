<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function add(Request $request)
    {
        $productId = $request->input('product_id');
        $quantity = $request->input('quantity', 1);

        // Retrieve product details
        $product = \App\Models\Product::findOrFail($productId);

        // Add to cart
        $cart = Session::get('cart', []);
        if (isset($cart[$productId])) {
            $cart[$productId]['quantity'] += $quantity;
        } else {
            $cart[$productId] = [
                'product' => $product,
                'quantity' => $quantity
            ];
        }
        Session::put('cart', $cart);

        return redirect()->route('product.show', $productId)->with('success', 'Product added to cart');
    }
}
