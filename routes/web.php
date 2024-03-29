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


Route::resource('/', 'JsstudysController');
Route::get('/tests', 'JsstudysController@tests')->name('jsstudys.tests');
Route::get('/upload_page', 'JsstudysController@upload_page')->name('jsstudys.upload_page');
Route::post('/upload', 'JsstudysController@upload')->name('jsstudys.upload');
Route::get('/upload', 'JsstudysController@upload')->name('jsstudys.upload');
Route::get('/photolib','JsstudysController@photolib')->name('jsstudys.photolib');
Route::get('/omikuji','JsstudysController@omikuji')->name('jsstudys.omikuji');
Route::get('/typing','JsstudysController@typing')->name('jsstudys.typing');

Route::get('/post/store','PostsController@store')->name('posts.get');
Route::post('/post/store','PostsController@store')->name('posts.store');

Route::group(['prefix'=>'users/{id}'], function(){
  Route::post('follow','UserFollowController@store')->name('user.follow');
  Route::delete('unfollow','UserFollowController@destroy')->name('user.unfollow');
  Route::get('followings','UserFollowController@followings')->name('user.followings');
  Route::get('followers','UserFollowController@followers')->name('user.followers');
});




Route::get('login','Auth\LoginController@showLoginForm')->name('login');
Route::post('login','Auth\LoginController@login')->name('login.post');
Route::get('logout','Auth\LoginController@logout')->name('logout.get');
Route::get('signup','Auth\RegisterController@showRegistrationForm')->name('signup.get');
Route::post('signup','Auth\RegisterController@register')->name('signup.post');

Route::group(['middleware' => ['auth']],function(){
    
    Route::resource('users','UsersController',['only' => ['index','show']]);
    
});