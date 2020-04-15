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


Route::get(  '/', 'HomeController@index');
/**
 * Adminn panel controller
 */
Route::get(  '/admin',                         'AdminController@index' );

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