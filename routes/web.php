<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function (){
    return view("client.index");
});

/*Route::get('/','DashboardController@index')->name('dashboard.index');*/

Route::get('/home', 'HomeController@index')->name('home');


Route::resource('questions', 'QuestionController');

Route::group(['prefix' => 'tips'],function(){
    Route::get(  '/', 'TipController@index')->name('tips.index');
    Route::get(  'create', 'TipController@create')->name('tips.create');
    Route::post(  'store', 'TipController@store')->name('tips.store');
    Route::get(  'show/{id}', 'TipController@show')->name('tips.show');
    Route::get(  'edit/{id}', 'TipController@edit')->name('tips.edit');
    Route::post(  'update/{id}', 'TipController@update')->name('tips.update');
    Route::get(  'destroy/{id}', 'TipController@destroy')->name('tips.destroy');

});

Auth::routes();

/*=======*/
Route::group(['prefix' => 'user'],function(){
    Route::get(  '/', 'UserController@index')->name('user.index');
    Route::get(  'create', 'UserController@create')->name('user.create');
    Route::post(  'store', 'UserController@store')->name('user.store');
    Route::get(  'edit/{id}', 'UserController@edit')->name('user.edit');
    Route::post(  'update/{id}', 'UserController@update')->name('user.update');
    Route::get(  'destroy/{id}', 'UserController@destroy')->name('user.destroy');

});

Route::group(['prefix' => 'feedback'],function(){
    Route::get('/', 'FeedbackController@index')->name('feedback.index');
});

Route::post('callback','FeedbackController@callbackstore')->name('client.callback');

Route::get(  'destroy/{id}', 'FeedbackController@destroy')->name('feedback.destroy');
Route::resource('test', 'DaotaoController');


Route::group(['prefix' => 'thu'],function(){
    Route::get('/', 'Client\TestController@index')->name('thu.index');
});


