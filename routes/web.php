<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('hello', function(){
//     return view('hello');
// });
//
// Route::get('home', 'AccueilController@show');
// Route::get('user/{id}', function($id){
//     return 'User :'.$id;
// });
// Route::get('contact', 'AccueilController@contact');
// Route::get('magasin', 'AccueilController@magasin');

Auth::routes();
Route::get('/contact', 'ContactController@index');
Route::get('/home', 'AccueilController@index');
Route::get('/magasin', 'MagasinController@index');
Route::get('/', 'HomeController@index');
Route::get('/panier', 'PanierController@index');
Route::get('/logout', 'Auth\LoginController@logout');
