<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.category.addCategory');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function manageCategory()
    {
        $categories     =  Category::all();
        return view( 'backend.category.manageCategory', [ 'categories' => $categories ] );
    }

    public function save(Request $request)
    {
        $category        = new Category();
        $category        ->category_name         =     $request    ->category_name;
        $category        ->category_description  =     $request    ->category_description;
        $category        ->publication_status    =     $request    ->publication_status;
        $category        ->save();
        return redirect( '/category/add' )      ->with( 'message', 'category info save succrssfully');
    }

    public function unpublished($id)
    {
        $category       =  Category::find($id);
        $category       -> publication_status = 0;
        $category       -> save();
        return redirect( '/managecategory' )    ->with( 'message', 'Unpublish' );

    }

    public function published($id)
    {
        $category       =  Category::find($id);
        $category       ->publication_status = 1;
        $category       ->save();
        return redirect( '/managecategory' )    ->with( 'message', 'publish' );
    }

    public function categoryEdit($id) 
    {
        $category       =  Category::find($id);
        return view( 'backend.category.editCategory', [ 'category' => $category ] );

    }

    public function categoryUpdate(Request $request)
    {
        $category       = Category::find( $request  ->category_id );
        $category       ->category_name             = $request  ->category_name;
        $category       ->category_description      = $request  ->category_description;
        $category       ->publication_status        = $request  ->publication_status;
        $category       ->save();
        return redirect( '/managecategory' )    ->with( 'message', 'category info update successfully' );
    }

    public function categoryDelete($id)
    {
        $category       =  Category::find($id);
        $category       ->delete();
        return redirect('/managecategory')      ->with('message', 'category info update successfully');
    }
}
