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
Route::get('/','DisplayController@index' );
Route::get('/about','RoutingController@about');
Route::get('/contact','RoutingController@contact');
// Route::get('/about','RoutingController@about');
Route::get('/mission','RoutingController@mission');
Route::get('/login','RoutingController@login');
Route::get('/show','RoutingController@show');
Route::get('/adminlogin','RoutingController@adminlogin');
Route::get('/adminregister','RoutingController@adminregister');
Route::get('/dashboard','RoutingController@dashboard');
Route::get('/addproduct','RoutingController@addproduct');
// Route::get('/singleproduct','RoutingController@singleproduct');
Route::get('/deleteproduct/{id}','ProductController@destroy');
Route::resource('/admin','AdminController');
Route::resource('/productdetail','DisplayController');


//end shopping cart
Route::get('/showuser','UserController@index');
Route::POST('/profile','UserController@update');

Route::get('/chapters','ChaptersController@create');
Route::get('/success','ChaptersController@success');
Route::POST('/chapters','ChaptersController@store');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
