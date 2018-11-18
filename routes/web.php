<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('trangxacnhan', function () {
    return view('emails.trangxacnhan');
})->name('trangxacnhan');


Route::get('contact', 'Client\ContactController@get_lienhe')->name('getLienhe');
Route::post('postcontact', 'Client\ContactController@post_lienhe')->name('postLienhe');

Route::get('admin/dashboard','Admin\DashboardController@index')->name('dashboard.index');

Route::get('/callback','Client\CallbackController@index')->name('clients.index');
Route::get('/', 'HomeController@index')->name('home');

Route::get('login','Auth\LoginController@getLogin')->name('getLogin');
Route::post('handle_login','Auth\LoginController@postLogin')->name('postLogin');

Route::resource('questions', 'Admin\QuestionController')->middleware('auth');

Route::resource('exams', 'Client\ExamController')->middleware('auth')->middleware('auth');
Route::get(  'del/{exam_id}', 'Client\ExamController@delete_exam')->name('DeleteExam')->middleware('auth');
Route::get('exams/{id}','Client\ExamController@show')->name('LamDe')->middleware('auth');
Route::post('exams','Client\ExamController@cham')->name('ChamBai')->middleware('auth');
Route::get('exams/xemlai/{id}','Client\ExamController@xemlai')->name('xemlai')->middleware('auth');

Route::group(['prefix' => 'tips','middleware'=>'auth'],function(){
    Route::get(  '/', 'Admin\TipController@index')->name('tips.index');
    Route::get(  'create', 'Admin\TipController@create')->name('tips.create');
    Route::post(  'store', 'Admin\TipController@store')->name('tips.store');
    Route::get(  'show/{id}', 'Admin\TipController@show')->name('tips.show');
    Route::get(  'edit/{id}', 'Admin\TipController@edit')->name('tips.edit');
    Route::post(  'update/{id}', 'Admin\TipController@update')->name('tips.update');
    Route::get(  'destroy/{id}', 'Admin\TipController@destroy')->name('tips.destroy');
    
});

Route::group(['prefix' => 'user','middleware'=>'auth'],function(){
    Route::get(  '/', 'Admin\UserController@index')->name('user.index');
    Route::get(  'create', 'Admin\UserController@create')->name('user.create');
    Route::post(  'store', 'Admin\UserController@store')->name('user.store');
    Route::get(  'edit/{id}', 'Admin\UserController@edit')->name('user.edit');
    Route::post(  'update/{id}', 'Admin\UserController@update')->name('user.update');
    Route::get(  'destroy/{id}', 'Admin\UserController@destroy')->name('user.destroy');

});

Route::group(['prefix'=>'infordriving', 'middleware'=>'auth'],function(){
    Route::get(  '/', 'Admin\InforDrivingController@index')->name('infordriving.index');
    Route::get(  'create', 'Admin\InforDrivingController@create')->name('infordriving.create');
    Route::post(  'store', 'Admin\InforDrivingController@store')->name('infordriving.store');
    Route::get(  'edit/{id}', 'Admin\InforDrivingController@edit')->name('infordriving.edit');
    Route::post(  'update/{id}', 'Admin\InforDrivingController@update')->name('infordriving.update');
    Route::get(  'destroy/{id}', 'Admin\InforDrivingController@destroy')->name('infordriving.destroy');
});

Route::group(['prefix' => 'feedback', 'middleware'=>'auth'],function (){
    Route::get('/', 'Admin\FeedbackController@index')->name('feedback.index');
    Route::get(  'destroy/{id}', 'Admin\FeedbackController@destroy')->name('feedback.destroy');
});


Route::get('clients/tip','Client\TipController@index')->name('client.tip');
Route::get('tipcontent/{id}','client\TipController@index1')->name('content.index');

Route::get('clients/infordriving','Client\InforDrivingController@index')->name('client.infordriving');
Route::get('inforcontent/{id}','client\InforDrivingController@inforcontent')->name('inforcontent.index');

Route::get('clients/feedback','Client\FeedbackController@index')->name('clients.feedback');
Route::get('verify/{id}/{token}','verify_email@get_xacnhan');

Route::get('asd','verify_email@email_verify')->name('asd');

Route::group(['prefix' => 'profile', 'middleware'=>'auth'],function (){
    Route::get('edit/{id}','ProfileController@index')->name('profile.edit');
    Route::post('update/{id}','ProfileController@update')->name('profile.update');
});
Auth::routes();