<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Cart;
class CartController extends Controller
{
    public function addTocart(Request $request)
    {

    	$product = Product::find($request->id);
    	// array format
		Cart::add([ 
		    'id'          => $request->id, // inique row ID
		    'name'        => $product->product_name,
		    'qty'         => $request->qty,
		    'price'       => $product->product_price,
		    'weight'      =>1,
		    'options'     => [
		    	'image'   =>$product->product_image
		    ]
		    
		]);

		return redirect('/cart/show')->with("message","cart add successfully");
    }

    public function addToCardShow()
    {
    	$cartCollection = Cart::content();
    	
    	return view('frontend.cart.cart',['cartCollection' => $cartCollection]);
    }

    public function deleteCart($id)
    {
    	Cart::remove($id);
    	return redirect('/cart/show');
    }

    public function updateCart(Request $request)
    {
    	Cart::update($request->rowId, $request->qty);
    	return redirect('/cart/show');

    }
}
