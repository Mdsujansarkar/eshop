<?php

namespace App\Http\Controllers;
use App\Category;
use App\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() 
    {
    	$newProduct		= Product::where( 'publication_status', 1 )
    					->orderBy( 'id', 'DESC' )
    					->take(4)
    					->get();
    								
        return view('frontend.home.home', ['newProduct' => $newProduct]);
    }

    public function categoryProduct($id)
    {
    	$categoryProducts  = Product::where('category_id', $id)
    					  ->where('publication_status', 1)
    					  ->get();
    	return view('frontend.category.categoryContent', ['categoryProducts' => $categoryProducts]);

    }
    public function productsDetaiils($id)
    {
    	$product = Product::find($id);
    	return view('frontend.category.productDetail', ['product' => $product]);
    }
}
