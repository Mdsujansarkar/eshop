<?php

namespace App\Http\Controllers;
use App\Brand;
use Illuminate\Http\Request;

class brandController extends Controller
{
    public function index()
    {
        return view( 'backend.brand.addBrand' );
    }

    public function manageBrand()
    {
        $brands      =Brand::all();
        return view( 'backend.brand.manageBrand',   ['brands'   => $brands] );
    }

    public function saveBrand(Request $request)
    {
        $brand      = new Brand();
        $brand      ->brand_name            =       $request    ->brand_name;
        $brand      ->brand_description     =       $request    ->brand_description;
        $brand      ->publication_status    =       $request    ->publication_status;
        $brand      ->save();
        return redirect( '/brand/add' )       ->with( 'message', 'Brand Name save' );
    }

    public function unpublishBrand($id)
    {
        $brand      = Brand::find($id);
        $brand      ->publication_status    = 1;
        $brand      ->save();
        return redirect( '/brand/manage' )->with( 'message', 'Brand Name save' );
    }

    public function publishBrand($id)
    {
        $brand      = Brand::find($id);
        $brand      ->publication_status    = 0;
        $brand      ->save();
        return redirect( '/brand/manage' )->with( 'message', 'Brand Name save' );
    }

    public function brandEdit($id)
    {
        $brand      = Brand::find($id);
        return view('backend.brand.edit-brand', [ 'brand'  => $brand ]);

    }

    public function brandDelete($id)
    {
        $brand      = Brand::find($id);
        $brand      ->Delete();
        return redirect('/brand/manage')->with('message', 'Brand Name save' );
    }
    public function brandUpdate(Request $request)
    {
        $brand       = Brand::find($request->brand_id);
        $brand       ->brand_name             = $request     ->brand_name;
        $brand       ->brand_description      = $request     ->brand_description;
        $brand       ->publication_status        = $request     ->publication_status;
        $brand       ->save();
        return redirect( '/brand/manage' )->with( 'message', 'Brand Name save' );
    }
}
