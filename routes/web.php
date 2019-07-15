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
    Route::get('hello','HelloController@index');
    Route::get('hello/add','HelloController@add');
    Route::post('hello/add','HelloController@create');
    Route::get('hello/rem','HelloController@remove');
    Route::post('hello/del','HelloController@delete');
    Route::get('hello/que','HelloController@question');
    Route::post('vote/add','VoteController@create');
    Route::get('/home',function(){
               return view('home');
               });
    Route::get('auth/register','Auth\RegisterController@showRegistrationForm');
    Route::post('auth/register','Auth\RegisterController@register');
    
//    Route::post('hello/del','HelloController@delete');
    
   

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
