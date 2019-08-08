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
    return view('home');
});

Route::any('/Registration',function () 
{
    return view('Register');
});

Route::get('/Login','UserController@show_login');
Route::post('/registerUser','UserController@Store_User');
ROute::post('/loginUser','UserController@Login');
Route::any('/index','UserController@showUsers');
Route::any('/delete/{id}','UserController@delete_user');
Route::any('/update/{id}','UserController@update_data');
Route::any('/updateUser/{id}','UserController@edit_data');