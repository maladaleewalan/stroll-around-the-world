<?php

use App\Story;
use App\User;
use App\Country;
use App\Notification;

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
// Route::resourse('/plans', 'PlansController');
Route::resource('/stories','StoriesController');
Route::resource('/users','UsersController');
Route::resource('/posts', 'PostsController');
Route::resource('/guides', 'GuidesController');
Route::resource('/countries', 'countriesController');
Route::resource('/regions', 'regionsController');
// Route::resource('/notifications', 'notificationsController');






Auth::routes();
// Route::get('/plan', 'PlanController@index')->name('plans')

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/stories/country/{id}','StoriesController@indexStoriesCountry')->name('stories.indexStoriesCountry');
Route::get('/posts/country/{id}','PostsController@indexPostsCountry')->name('posts.indexPostsCountry');

Route::get('/posts/userlike/{id}','PostsController@userlike')->name('posts.userlike');
Route::get('/posts/userunlike/{id}','PostsController@userunlike')->name('posts.userunlike');

Route::get('/posts/country/userlike/{id}','PostsController@userlikeinindexcountry')->name('posts.userlikeinindexcountry');
Route::get('/posts/country/userunlike/{id}','PostsController@userunlikeinindexcountry')->name('posts.userunlikeinindexcountry');
Route::get('/posts/show/userlike/{id}','PostsController@userlikeinshow')->name('posts.userlikeinshow');
Route::get('/posts/show/userunlike/{id}','PostsController@userunlikeinshow')->name('posts.userunlikeinshow');

Route::get('/guides/country/{id}','GuidesController@indexGuidesCountry')->name('guides.indexGuidesCountry');
Route::get('/guides/{id}/{regionid}','GuidesController@indexGuidesCountryRegion')->name('guides.indexGuidesCountryRegion');
Route::get('/guides/create/country/{id}','GuidesController@createGuidesEachCountry')->name('guides.createGuidesEachCountry');

Route::get('/bynewuser',function() {
    if(Auth::user() == null||Auth::user()->role !== 'admin') {
        $stories = Story::orderBy('created_at','desc')->get();    
        return view('firstpage',['stories' => $stories]);
    }
    $users = User::orderBy('created_at','desc')->get();    
    return view('users.indexbynewuser',['users'=>$users]);
})->name('bynewuser');

Route::get('/checkNews',function() {
    if(Auth::user() == null||Auth::user()->role !== 'admin') {
        $stories = Story::orderBy('created_at','desc')->get();    
        return view('firstpage',['stories' => $stories]);
    }
    $stories = Story::where('status','notpass')->orderBy('created_at','desc')->get();    //เรียงจากวันที่โพสล่าสุดขึ้นก่อน (desc มากไปน้อย วันที่มากขึ้นก่อน)
    $countries = Country::get();
    return view('stories.checkNews',['stories'=>$stories , 'countries'=>$countries]);
})->name('checkNews');

Route::get('/stories/Newspass/{id}','StoriesController@Newspass')->name('stories.Newspass');
Route::get('/stories/Newsnotpass/{id}','StoriesController@Newsnotpass')->name('stories.Newsnotpass');

Route::get('/notifications/{id}',function($id) {
        if(Auth::user() == null || Auth::id() != $id) {
            $stories = Story::orderBy('created_at','desc')->get();    
            return view('firstpage',['stories' => $stories]);
        }

        $notifications = Notification::where('user_id',$id)->orderBy('created_at','desc')->get();
        return view('notifications.show',['notifications'=>$notifications]);
})->name('notifications');



