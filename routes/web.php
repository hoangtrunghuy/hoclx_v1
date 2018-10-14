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

Route::resource('questions', 'QuestionController');

<<<<<<< HEAD
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


=======
Route::resource('users', 'UserController');

Route::resource('feedback', 'FeedbackController');
>>>>>>> 867cfbc6a65d5db334f9e919759a78a42273701a
