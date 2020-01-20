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
Route::get('/','DisplayproductController@index' );
Route::get('/about','RoutingController@about');
Route::get('/contact','RoutingController@contact');
// Route::get('/about','RoutingController@about');
Route::get('/signup','RoutingController@signup');
Route::get('/login','RoutingController@login');
Route::get('/show','RoutingController@show');
Route::get('/adminlogin','RoutingController@adminlogin');
Route::get('/adminregister','RoutingController@adminregister');
Route::get('/dashboard','RoutingController@dashboard');
Route::get('/addproduct','RoutingController@addproduct');
// Route::get('/singleproduct','RoutingController@singleproduct');
Route::resource('/registration','RegistrationController');
Route::resource('/product','ProductController');
Route::get('/deleteproduct/{id}','ProductController@destroy');
Route::resource('/admin','AdminController');
Route::resource('/cart','CartController');
Route::resource('/productdetail','DisplayproductController');

//start shopping cart
Route::POST('/cart_add','CartsController@addtocart');
Route::get('/cart-show','CartsController@cartshow');
Route::POST('/update-cart','CartsController@updatecart');
Route::get('/checkout','CartsController@checkout');
Route::get('/delete-cart/{id}','CartsController@deletecart');
//end shopping cart
Route::get('/showuser','UserController@index');
Route::get('/deleteproduct/{id}','ProductController@destroy');
Route::get('/order','CartController@index');
Route::get('/orderproduct','CartController@create');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
