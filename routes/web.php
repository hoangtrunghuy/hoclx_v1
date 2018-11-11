<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('admin/dashboard','Admin\DashboardController@index')->name('dashboard.index');

Route::get('/callback','Client\CallbackController@index')->name('clients.index');
Route::get('/', 'HomeController@index')->name('home');

Route::resource('questions', 'Admin\QuestionController');

Route::group(['prefix' => 'tips'],function(){
    Route::get(  '/', 'Admin\TipController@index')->name('tips.index');
    Route::get(  'create', 'Admin\TipController@create')->name('tips.create');
    Route::post(  'store', 'Admin\TipController@store')->name('tips.store');
    Route::get(  'show/{id}', 'Admin\TipController@show')->name('tips.show');
    Route::get(  'edit/{id}', 'Admin\TipController@edit')->name('tips.edit');
    Route::post(  'update/{id}', 'Admin\TipController@update')->name('tips.update');
    Route::get(  'destroy/{id}', 'Admin\TipController@destroy')->name('tips.destroy');
    
});

Auth::routes();

/*=======*/
Route::group(['prefix' => 'user'],function(){
    Route::get(  '/', 'Admin\UserController@index')->name('user.index');
    Route::get(  'create', 'Admin\UserController@create')->name('user.create');
    Route::post(  'store', 'Admin\UserController@store')->name('user.store');
    Route::get(  'edit/{id}', 'Admin\UserController@edit')->name('user.edit');
    Route::post(  'update/{id}', 'Admin\UserController@update')->name('user.update');
    Route::get(  'destroy/{id}', 'Admin\UserController@destroy')->name('user.destroy');

});

Route::group(['prefix'=>'infordriving'],function(){
    Route::get(  '/', 'Admin\InforDrivingController@index')->name('infordriving.index');
    Route::get(  'create', 'Admin\InforDrivingController@create')->name('infordriving.create');
    Route::post(  'store', 'Admin\InforDrivingController@store')->name('infordriving.store');
    Route::get(  'edit/{id}', 'Admin\InforDrivingController@edit')->name('infordriving.edit');
    Route::post(  'update/{id}', 'Admin\InforDrivingController@update')->name('infordriving.update');
    Route::get(  'destroy/{id}', 'Admin\InforDrivingController@destroy')->name('infordriving.destroy');
});

// Route::group(['prefix' => 'callback'],function(){
//     Route::post('/', 'FeedbackController@callbackstore')->name('callback.store');
// });
Route::group(['prefix' => 'feedback'],function (){
    Route::get('/', 'Admin\FeedbackController@index')->name('feedback.index');
});

Route::post('callback','Admin\FeedbackController@callbackstore')->name('client.callback');

Route::get(  'destroy/{id}', 'Admin\FeedbackController@destroy')->name('feedback.destroy');

Auth::routes();

Route::get('clients/tip','Client\TipController@index')->name('client.tip');
Route::get('tipcontent/{id}','client\TipController@index1')->name('content.index');

Route::get('clients/infordriving','Client\InforDrivingController@index')->name('client.infordriving');
Route::get('inforcontent/{id}','client\InforDrivingController@inforcontent')->name('inforcontent.index');

Route::get('clients/feedback','Client\FeedbackController@index')->name('clients.feedback');