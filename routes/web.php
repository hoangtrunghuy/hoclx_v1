<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/','Client\FeedbackController@index')->name('thu.index');

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('questions', 'Admin\QuestionController');

Route::resource('exams', 'Client\ExamController');
Route::get(  'del/{exam_id}', 'Client\ExamController@delete_exam')->name('DeleteExam');
Route::get('exams/{id}','Client\ExamController@show')->name('LamDe');
Route::post('exams','Client\ExamController@cham')->name('ChamBai');

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

Route::group(['prefix' => 'feedback'],function(){
    Route::get('/', 'Admin\FeedbackController@index')->name('feedback.index');
});

Route::post('callback','Admin\FeedbackController@callbackstore')->name('client.callback');

Route::get(  'destroy/{id}', 'Admin\FeedbackController@destroy')->name('feedback.destroy');






