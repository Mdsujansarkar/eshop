<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Brand;
use App\Product;
use Image;
use DB;

class ProductController extends Controller
{
    public function addProduct()
    {
        $categories         = Category::where( 'publication_status', 1 )      ->get();
        $brands             = Brand::where( 'publication_status', 1 )         ->get();

        return view( 'backend.product.addProduct', [
            'categories'    =>      $categories,
            'brands'        =>      $brands
        ] );
    }
    protected function validateCheck($request)
    {
        $this->validate($request, [
            'product_name'   => 'required'
        ]);
    }

    protected function UploadImage($request)
    {

        $productImage       = $request          ->file( 'product_image' );
        // $photo = $request->file('image')->getClientOriginalName();
        $imageName          = $productImage     ->getClientOriginalName();

        // return $imageName;
        $directoryName      = 'product-imags/';

        $imageurl           = $directoryName . $imageName;
        // $productImages -> move( $directoryName,$imageName );
        Image::make($productImage)              ->save( $imageurl );
        return $imageurl;
    }

    protected function saveProductbasicInfo($request, $imageurl)
    {
        $product = new Product();

        $product        ->category_id          = $request      ->category_id;
        $product        ->brand_id             = $request      ->brand_id;
        $product        ->product_name         = $request      ->product_name;
        $product        ->product_price        = $request      ->product_price;
        $product        ->product_quantity     = $request      ->product_quantity;
        $product        ->product_long_desc    = $request      ->product_long_desc;
        $product        ->product_short_desc   = $request      ->product_short_desc;
        $product        ->product_image        = $imageurl;
        $product        ->publication_status   = $request      ->publication_status;
        $product        ->save();
    }

    public function saveProduct(Request $request)
    {
        $this               ->validateCheck( $request );

        $imageurl           = $this     ->UploadImage( $request );
        $this               ->saveProductbasicInfo( $request, $imageurl );
        return redirect( '/product/add' )->with(' message', 'Message save' );
    }

    public function manageProduct()
    {
        $products = DB::table('products')
            ->join('categories', 'products.category_id', '=', 'categories.id')
            ->join('brands', 'products.brand_id', '=', 'brands.id')
            ->select('products.*', 'categories.category_name', 'brands.brand_name')
            ->paginate(2);

        return view('backend.product.manageProduct',['products' => $products]);
    }

    public function unpublishedProduct($id)
    {
        $product    = Product::find($id);
        $product    ->publication_status      = 0;
        $product    ->save();

        return redirect( '/manage/product' )->with( ' message', 'Message save' );
    }

    public function publishedProduct($id)
    {
        $product    = Product::find($id);
        $product    ->publication_status      = 1;
        $product    ->save();

        return redirect('/manage/product')->with(' message', 'Message save');
    }

    public function editProduct($id)
    {
        $product    = Product::find($id);
        $categories = Category::where( 'publication_status', 1 )->get();
        $brands     = Brand::where( 'publication_status', 1 )->get();
        return view( 'backend.product.editProduct', [
            'product'       => $product,
            'categories'    => $categories,
            'brands'        => $brands
        ]);
    }
    public function productUpdateInfo($request, $product, $imageurl=null)
    {
        
        $product->category_id              = $request->category_id;
        $product->brand_id                 = $request->brand_id;
        $product->product_name             = $request->product_name;
        $product->product_price            = $request->product_price;
        $product->product_quantity         = $request->product_quantity;
        $product->product_short_desc       = $request->product_short_desc;
        $product->product_long_desc        = $request->product_long_desc;
        if($imageurl){
            $product->product_image        = $imageurl;
        }
        $product->publication_status       = $request->publication_status;
        $product->save();
    }
    public function updateProduct(Request $request)
    {
      $productImage = $request->file('product_image');
      $product = Product::find($request->product_id);
      if($productImage) {
            unlink($product->product_image);
            $imageurl = $this->UploadImage($request);
            $this->productUpdateInfo($request, $product, $imageurl);
      }else{
            $this->productUpdateInfo($request, $product);
      }
        return redirect('/manage/product')->with(' message', 'Message save');
    }

    public function deleteProduct($id)
    {
        $product    = Product::find($id);
        $product    ->Delete();

        return redirect('/manage/product')->with(' message', 'Message save');

    }
}
