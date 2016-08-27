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

Auth::routes();

//Route::get('/logout',function(){
//    Auth::logout();
//    return redirect('/');
//});

Route::get("/logout",'Auth\LoginController@logout');

Route::get('/', 'LivroController@lista');

Route::get('/home', 'LivroController@lista');

Route::get('/login', 'LivroController@lista');

Route::get('/livros/novo', 'LivroController@novo');

Route::get('/api','LivroController@api');