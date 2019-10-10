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
Route::get('/home','HomeController@first'); 




Route::get('/master',function() {
    return view('layouts.master');
});

Route::resource('/stories','StoriesController');
Route::resource('/users','UsersController');
Route::resource('/posts', 'PostsController');
Route::resource('/guides', 'GuidesController');





