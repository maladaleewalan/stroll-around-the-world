<?php

use App\Story;

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

Route::get('/firstpage',function() {
    $stories = Story::orderBy('created_at','desc')->get();    
    return view('firstpage',['stories' => $stories]);
})->name('firstpage');


Route::get('/master',function() {
    return view('layouts.master');
});
Route::resource('/stories','StoriesController');
Route::resource('/users','UsersController');
Route::resource('/posts', 'PostsController');
Route::resource('/guides', 'GuidesController');


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/stories/country/{id}','StoriesController@indexStoriesCountry')->name('stories.indexStoriesCountry');
Route::get('/posts/country/{id}','PostsController@indexPostsCountry')->name('posts.indexPostsCountry');
Route::get('/guides/country/{id}','GuidesController@indexGuidesCountry')->name('guides.indexGuidesCountry');
Route::get('/guides/{id}/{regionid}','GuidesController@indexGuidesCountryRegion')->name('guides.indexGuidesCountryRegion');
Route::get('/guides/create/country/{id}','GuidesController@createGuidesEachCountry')->name('guides.createGuidesEachCountry');