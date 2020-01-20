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
Route::get('/tdashboard','UserController@tdashboard');
Route::get('/sdashboard','UserController@sdashboard');
Route::get('/userlist','UserController@userlist');
Route::get('/deleteuser/{id}','UserController@destroy');

//Route::post('/add','CourseController@addcourse');
//Route::POST('/add','UserController@store');
Route::get('/addcourse','CourseController@getcourse');
Route::get('/courselist','CourseController@courselist');
Route::resource('/addcourses','CourseController');
Route::resource('/coursereg','RegcourseController');
Route::get('/coursereg','RegcourseController@index');
// Route::get('/coursereg','RegcourseController@user');
Route::get('/viewcourse','RegcourseController@viewcourse');
//showexamresult /exam_result/{{$d->id}}/editstudentresult
Route::get('/showexamresult','ExamresultController@create');
Route::get('/resultshow','ExamresultController@adminresult');
Route::get('/studentresult','ExamresultController@studentresult');

Route::resource('/exam_result','ExamresultController');
Route::resource('/grade','GradeController');
Route::resource('/class','ClassController');
Route::get('/gradelist','GradeController@create');
Route::get('/delete_result/{id}','ExamresultController@destroy');
Route::get('/deleteproduct/{id}','ProductController@destroy');
Route::resource('/admin','AdminController');
Route::resource('/cart','CartController');
Route::resource('/productdetail','DisplayproductController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
