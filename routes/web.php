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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/','HomeController@index');
Route::get('/guide','ShowsController@guide');
Route::get('/galleries','ShowsController@gallery');
Route::get('/home','HomeController@first'); 
Route::get('/signup','HomeController@signup'); 
Route::get('/profile','UsersController@profile');


// Route::get('/about-us',function() {
//     return view('about');
// });

Route::get('/master',function() {
    return view('layouts.master');
});

Route::get('/posts','PostsController@index');
Route::get('/posts/{id}','PostsController@show')->where('id','[0-9]+')->name('posts.show');


