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
Auth::routes();

Route::get('/','welcomeController@index');
Route::get('about','welcomeController@about');
Route::resource('issues','IssuesController');
Route::resource('comments', 'CommentsController', ['only' => 'store']);
Route::get('/home', 'HomeController@index')->name('home');

Route::namespace('Auth')->prefix('auth/qq')->group(function (){
        Route::get('/','SocialitesController@qq');
        Route::get('callback','SocialitesController@callback');
});

Route::resource('photos', 'PhotosController', ['only' => 'store']);
