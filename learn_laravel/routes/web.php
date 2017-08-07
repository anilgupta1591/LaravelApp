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
    return view('welcome');
});

Route::any('/firstFunction','UserController@myFirstFunction');

//Route::get('register/verify/{confirmationCode}', 'RegistrationController@confirm');
Route::get('register/verify/{token}', 'Auth\RegisterController@verify'); 

Route::get('user/mailsend', 'UserController@testMail');


Route::post('/firstFunction/create','UserController@create');

Route::get('/user/list','UserController@index',function(){
    
})->name('user_list')->middleware('auth');

Route::any('/user/edit/{id}','UserController@edit',function(){
    
})->middleware('auth');

Route::post('/user/delete/{id}','UserController@destroy')->name('user_delete');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/logout', 'Auth\LoginController@logout');

Route::get('/hello', function() {
    return 'hello';
})->middleware('client_credentials');
