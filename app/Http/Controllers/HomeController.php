<?php

namespace App\Http\Controllers;
use App\Category;
use App\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() 
    {
    	$categories		= Category::where( 'publication_status', 1 )
    					->get();
    	$newProduct		= Product::where( 'publication_status', 1 )
    					->orderBy( 'id', 'DESC' )
    					->take(4)
    					->get();
    								
        return view('frontend.home.home', ['categories'  => $categories, 'newProduct' => $newProduct]);
    }

    public function categoryProduct()
    {
    	$categories		= Category::where( 'publication_status', 1 )
    					->get();
    	$newProduct		= Product::where( 'publication_status', 1 )
    					->orderBy( 'id', 'DESC' )
    					->take(4)
    					->get();
    	return view('frontend.category.categoryContent', ['categories'  => $categories, 'newProduct' => $newProduct]);

    }
}
