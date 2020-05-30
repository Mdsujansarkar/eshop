<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get( '/', 								'HomeController@index');
Route::get( '/category/product/{id}',			'HomeController@categoryProduct')		 ->name( 'category-content' );
Route::get( '/product/details/{id}/{name}',		'HomeController@productsDetaiils')		 ->name( 'productsDetaiils' );


Route::post( '/addToCart',						'CartController@addTocart')				 ->name( 'add-to-cart' );
Route::get(  '/cart/show',						'CartController@addToCardShow')			 ->name( 'add-to-show' );
Route::get(  '/cart/delete/{rowId}',			'CartController@deleteCart')			 ->name( 'delete-cart-item' );
Route::post( '/cart/update',					'CartController@updateCart')			 ->name( 'cart-update' );



/**
 * Customer Check out
 */
Route::get(  '/customer/check/out',			    'CheckOutController@index')				     ->name( 'CustomercheckOut' );
// Route::post( '/customer/checkout',				'CheckOutController@checkoutProduct')	 ->name( 'customer-chechout' );
Route::post( '/customer/registration',	        'CheckOutController@customerSignUp')	 ->name( 'customer-sign-up' );

Route::get(  '/checkout/shipping',			    'CheckOutController@customerShopping')  ->name( 'customer-shopping' );
Route::post( '/shopping/info',					'CheckOutController@customerAddress')	 ->name( 'new-shipping-info' );
Route::get(  '/checkout/payment',				'CheckOutController@shoppingPayment')	 ->name( 'shopping-payment' );
Route::post( '/order/confarm',					'CheckOutController@orderConform')		 ->name( 'payment-confarm' );
Route::get(	 '/order/complite',					'CheckOutController@orderComplite')		 ->name( 'order-complite' );
// Route::post( '/checkout/shipping',				'CheckOutController@customerLogin')		 ->name( 'login-info-customer' );
Route::post( '/checkout/customer/login',        'CheckOutController@customerLogin')		 ->name( 'customer-login' );
Route::post( '/customer/logout',				'CheckOutController@customerLogout')	 ->name( 'customer-logout' );
Route::get(  '/customer/login',					'CheckOutController@customerLoginNew')	 ->name( 'new-customer-login' );

// Route::post( '/checkout/shipping',			    'CheckOutController@customerShopping')	 ->name( 'new-shipping-info' );


/**
 * Adminn panel controller
 */
Route::get(  '/admin',                          'AdminController@index' );

/**
 * Admin blick add 
 */
Route::get(  '/admin/login',                    'AdminController@login' );
Route::get(  '/admin/registration',             'AdminController@registration');

/**
 * Add categorie
 */
Route::get(  '/category/add',                  'CategoryController@index' )               ->name( 'add-category' );
Route::get(  '/managecategory',                'CategoryController@manageCategory' )      ->name( 'manage-category' );
Route::post( '/category/save',                 'CategoryController@save' )                ->name( 'new-category' );
Route::get(  '/category/unpublished/{id}',     'CategoryController@unpublished')          ->name( 'unpublish-category' );
Route::get(  '/category/published/{id}',       'CategoryController@published')            ->name( 'publish-category' );
Route::get(  '/category/edit/{id}',            'CategoryController@categoryEdit')         ->name( 'edit-category' );
Route::post( '/catagory/update',               'CategoryController@categoryUpdate')       ->name( 'update-category' );
Route::get(  '/catagory/delet/{id}',           'CategoryController@categoryDelete')       ->name( 'delete-category' );
/**
 * Brand Product Section
 * @Brand
 */
Route::get(  '/brand/add',                     'BrandController@index')                   ->name( 'add-brand' );
Route::get(  '/brand/manage',                  'BrandController@manageBrand')             ->name( 'manage-brand' );
Route::post( '/brand/save',                    'BrandController@saveBrand')               ->name( 'new-brand' );
Route::get(  '/brand/unpublish/{id}',          'BrandController@unpublishBrand')          ->name( 'unpublish-brand' );
Route::get(  '/brand/publish/{id}',            'BrandController@publishBrand')            ->name( 'publish-brand' );
Route::get(  '/brand/edit/{id}',               'BrandController@brandEdit')               ->name( 'edit-brand' );
Route::get(  '/brand/delete/{id}',             'BrandController@brandDelete')             ->name( 'delete-brand' );
Route::post( '/brand/update',                  'BrandController@brandUpdate')             ->name( 'update-brand' );
/**
 * product route
 * All product ate add
 */
Route::get(  '/product/add',                   'ProductController@addProduct')            ->name( 'add-product' );
Route::get(  '/manage/product',                'ProductController@manageProduct')         ->name( 'manage-product' );
Route::post( '/save/product',                  'ProductController@saveProduct')           ->name( 'save-product' );
Route::get(  '/unpublish/product/{id}',        'ProductController@unpublishedProduct')    ->name( 'unpublish-product' );
Route::get(  '/publish/product/{id}',          'ProductController@publishedProduct')      ->name( 'publish-product' );
Route::get(  '/product/edit/{id}',             'ProductController@editProduct')           ->name( 'edit-product' );
Route::post( '/product/update/',               'ProductController@updateProduct')         ->name( 'update-product' );
Route::get(  '/product/delete/{id}',           'ProductController@deleteProduct')         ->name( 'delete-product' );

/**
 * Order Manage
 */
Route::get( '/manage/order',				   'OrderController@manageOrder')			  ->name( 'manage-order' );
Route::get( '/manage/view/order/{id}',		   'OrderController@viewOrder')			  	  ->name( 'view-order-details' );
Route::get( '/manage/view/invoicce/{id}',	   'OrderController@orderInvoice')			  ->name( 'order-invoice' );
Route::get( '/manage/view/download/{id}',	   'OrderController@orderDownload')			  ->name( 'order-download' );


Route::get( '/search/product',                 'OrderController@ordersearch')             ->name('product-search');










Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
