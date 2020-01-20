<?php
use Illuminate\Http\Requests;


Route::post('register', 'AuthController@register');
Route::post('login', 'AuthController@login');
Route::get('profile', 'AuthController@getAuthenticatedUser');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('test',function(){
    return response()->json([
        'user'=>['fname'=>'tawa',
        'lname'=>'adio']
    ]); 
});