<?php

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
Route::get('/','RoutingController@index');
Route::get('/order','RoutingController@order');
Route::get('/addproduct','RoutingController@addproduct');
// Route::get('/about','RoutingController@about');
 Route::get('/updateprofile', 'AuthController@updateprofile');
Route::get('/productlist','RoutingController@productlist');
Route::get('/invoice','RoutingController@invoice');
Route::resource('/registration','RegistrationController');

Route::post('addcat','CategoriesController@store');
   Route::get('addcat','CategoriesController@index');
   Route::get('catid','CategoriesController@catid');
   Route::get('/deletecat/{id}','CategoriesController@destroy');

 
//pro
Route::post('addproduct','ProductController@store');
//Route::get('product','ProductController@edit');
//allproductbyuser
Route::get('/deleteproduct/{id}','ProductController@destroy');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
