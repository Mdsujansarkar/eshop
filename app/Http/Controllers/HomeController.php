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
    					->take(9)
    					->get();
        $advProducts     = Product::where( 'publication_status', 1 )
                        ->orderBy( 'id', 'ASC')
                        ->take(9)
                        ->get();
    								
        return view('frontend.home.home', [
            'newProduct' => $newProduct,
            'advProducts' => $advProducts
         ]);
    }

    public function categoryProduct($id)
    {
    	$categoryProducts  = Product::where('category_id', $id)
    					  ->where('publication_status', 1)
    					  ->paginate(6);
    	return view('frontend.category.categoryContent', ['categoryProducts' => $categoryProducts]);

    }
    public function productsDetaiils($id)
    {
    	$product = Product::find($id);
    	return view('frontend.category.productDetail', ['product' => $product]);
    }

    public function backand()
    {
        return view('backend.home.home');
    }
}
