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
Route::get(  '/add-product',                   'AdminController@addProduct' )             ->name( 'add-product' );
Route::get(  '/manage-product',                'AdminController@manageProduct' )          ->name( 'manage-product' );
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
Route::get(  '/brand/add',                     'brandController@index')                   ->name( 'add-brand' );
Route::get(  '/brand/manage',                  'brandController@manageBrand')             ->name( 'manage-brand' );
Route::post( '/brand/save',                    'brandController@saveBrand')               ->name( 'new-brand' );
Route::get(  '/brand/unpublish/{id}',          'brandController@unpublishBrand')          ->name( 'unpublish-brand' );
Route::get(  '/brand/publish/{id}',            'brandController@publishBrand')            ->name( 'publish-brand' );
Route::get(  '/brand/edit/{id}',               'brandController@brandEdit')               ->name( 'edit-brand' );
Route::get(  '/brand/delete/{id}',             'brandController@brandDelete')             ->name( 'delete-brand' );
Route::post( '/brand/update',                  'brandController@brandUpdate')             ->name( 'update-brand' );
