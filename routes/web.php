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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/','DashboardController@index')->name('dashboard.index');
Route::resource('questions', 'QuestionController');

/*<<<<<<< HEAD*/
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

Route::get('/home', 'HomeController@index')->name('home');

/*Route::get('/','Login')*/

/*=======*/
/*Route::resource('users', 'UserController');*/
Route::group(['prefix' => 'user'],function(){
    Route::get(  '/', 'UserController@index')->name('user.index');
    Route::get(  'create', 'UserController@create')->name('user.create');
    Route::post(  'store', 'UserController@store')->name('user.store');
    Route::get(  'edit/{id}', 'UserController@edit')->name('user.edit');
    Route::post(  'update/{id}', 'UserController@update')->name('user.update');
    Route::get(  'destroy/{id}', 'UserController@destroy')->name('user.destroy');

});
/*Route::get('/login','Auth.LoginController')->name('login');*/
Route::group(['prefix' => 'feedback'],function(){
    Route::get('/', 'FeedbackController@index')->name('feedback.index');
});

Route::get(  'destroy/{id}', 'FeedbackController@destroy')->name('feedback.destroy');
Route::resource('test', 'DaotaoController');


/*>>>>>>> 867cfbc6a65d5db334f9e919759a78a42273701a*/
