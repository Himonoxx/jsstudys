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
Route::get('/upload', 'JsstudysController@uplload_page')->name('jsstudys.upload');
Route::get('/photolib','JsstudysController@photolib')->name('jsstudys.photolib');