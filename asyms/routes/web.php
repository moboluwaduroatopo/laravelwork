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


Route::get('/', function () {
    return view('auth/login');
});
Route::get('/adminprofile','UserController@adminprofile');
Route::get('/tprofile','UserController@tprofile');
Route::get('/sprofile','UserController@sprofile');
Route::get('/create','UserController@create');
Route::get('/teacherreg','UserController@teacherreg');

Route::POST('/profile','UserController@updateprofile');

Route::get('/dashboard','UserController@dashboard');
Route::get('/sdashboard','UserController@sdashboard');
Route::get('/userlist','UserController@userlist');
Route::get('/deleteuser/{id}','UserController@destroy');


Route::resource('/product','ProductController');
Route::get('/deleteproduct/{id}','ProductController@destroy');
Route::resource('/productlist','DisplayproductController');
Route::get('/shoplist','DisplayproductController@shoplist');
Route::resource('/shop','ShopproductController');
Route::get('/deleteshop/{id}','ShopproductController@destroy');
Route::resource('/sales','SalesController');
Route::get('/todaysales','DisplayproductController@todaysales');
Route::get('/allsales','DisplayproductController@allsales');
Route::resource('/remain','RemainproductController');
Route::get('/deleteremain/{id}','RemainproductController@destroy');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
