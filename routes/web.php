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


Route::get('/', 'PageController@getTeksten');

Route::get('/login','UserController@index');
Route::post('/login',['as'=>'users.store', 'uses'=>'UserController@insertUser']);

Route::get('/invite',function(){
    return view('invitation');});

Route::get('/whoareyou','UserController@index');
Route::get('/whoareyou','UserController@getUserCredentials');

Route::get('/whoweare',function(){
    return view('whoweare');
});

Route::get('/whatwedo',function(){
    return view('whatwedo');
});
Route::get('/whotocontact',function(){
    return view('whotocontact');
});

Route::get('/whotocontact', 'ContactMailController@contactUS');
Route::post('/whotocontact', ['as'=>'contactus.store','uses'=>'ContactMailController@contactUSPost']);

