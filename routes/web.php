<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('trangxacnhan', function () {
    return view('emails.trangxacnhan');
})->name('trangxacnhan');


Route::get('about', function () {
    return view('client.about');
})->name('about-us');


Route::get('contact', 'Client\ContactController@get_lienhe')->name('getLienhe');
Route::post('postcontact', 'Client\ContactController@post_lienhe')->name('postLienhe');


Route::get('/callback','Client\CallbackController@index')->name('clients.index');

Route::get('/', 'HomeController@index')->name('home');

Route::get('login','Auth\LoginController@getLogin')->name('getLogin');
Route::post('handle_login','Auth\LoginController@postLogin')->name('postLogin');

//Route admin
Route::get('admin/dashboard','Admin\DashboardController@index')->name('dashboard.index')->middleware('RoleMiddleware')->middleware('auth');

Route::get('ly-thuyet','Admin\QuestionController@lythuyet')->name('lythuyet');

Route::resource('exams', 'Client\ExamController')->middleware('auth')->middleware('auth');
Route::get(  'del/{exam_id}', 'Client\ExamController@delete_exam')->name('DeleteExam')->middleware('auth')->middleware('auth');
Route::get('exams/{id}','Client\ExamController@show')->name('LamDe')->middleware('auth');
Route::post('exams','Client\ExamController@cham')->name('ChamBai')->middleware('auth');
Route::get('exams/xemlai/{id}','Client\ExamController@xemlai')->name('xemlai')->middleware('auth');



Route::resource('questions', 'Admin\QuestionController')->middleware('RoleMiddleware')->middleware('auth');
Route::get('questions/del/{id}', 'Admin\QuestionController@delete_qs')->name('DeleteQuestion')->middleware('RoleMiddleware')->middleware('auth');




Route::group(['prefix' => 'tips','middleware'=>'RoleMiddleware','middleware'=>'auth'],function(){
    Route::get(  '/', 'Admin\TipController@index')->name('tips.index');
    Route::get(  'create', 'Admin\TipController@create')->name('tips.create');
    Route::post(  'store', 'Admin\TipController@store')->name('tips.store');
    Route::get(  'show/{id}', 'Admin\TipController@show')->name('tips.show');
    Route::get(  'edit/{id}', 'Admin\TipController@edit')->name('tips.edit');
    Route::post(  'update/{id}', 'Admin\TipController@update')->name('tips.update');
    Route::get(  'destroy/{id}', 'Admin\TipController@destroy')->name('tips.destroy');

});

Route::group(['prefix' => 'user','middleware'=>'RoleMiddleware','middleware'=>'auth'],function(){
    Route::get(  '/', 'Admin\UserController@index')->name('user.index');
    Route::get(  'create', 'Admin\UserController@create')->name('user.create');
    Route::post(  'store', 'Admin\UserController@store')->name('user.store');
    Route::get(  'edit/{id}', 'Admin\UserController@edit')->name('user.edit');
    Route::post(  'update/{id}', 'Admin\UserController@update')->name('user.update');
    Route::get(  'destroy/{id}', 'Admin\UserController@destroy')->name('user.destroy');

});

Route::group(['prefix'=>'infordriving', 'middleware'=>'RoleMiddleware','middleware'=>'auth'],function(){
    Route::get(  '/', 'Admin\InforDrivingController@index')->name('infordriving.index');
    Route::get(  'create', 'Admin\InforDrivingController@create')->name('infordriving.create');
    Route::post(  'store', 'Admin\InforDrivingController@store')->name('infordriving.store');
    Route::get(  'edit/{id}', 'Admin\InforDrivingController@edit')->name('infordriving.edit');
    Route::post(  'update/{id}', 'Admin\InforDrivingController@update')->name('infordriving.update');
    Route::get(  'destroy/{id}', 'Admin\InforDrivingController@destroy')->name('infordriving.destroy');
    Route::get(  'auto-save', 'Admin\InforDrivingController@autosave')->name('infordriving.autosave');

});

Route::post('/callback', 'Admin\FeedbackController@callbackstore')->name('callbackstore');

Route::group(['prefix' => 'feedback', 'middleware'=>'RoleMiddleware','middleware'=>'auth'],function (){
    Route::get('/', 'Admin\FeedbackController@index')->name('feedback.index');
    Route::get(  'destroy/{id}', 'Admin\FeedbackController@destroy')->name('feedback.destroy');
});
//End Route admin

//Start Route client

Route::get('contact', 'Client\ContactController@get_lienhe')->name('getLienhe');
Route::post('post-contact', 'Client\ContactController@post_lienhe')->name('postLienhe');

Route::get('/callback','Client\CallbackController@index')->name('clients.index');

Route::resource('exams', 'Client\ExamController')->middleware('auth');
Route::get(  'del/{exam_id}', 'Client\ExamController@delete_exam')->name('DeleteExam')->middleware('RoleMiddleware');
Route::get('exams/{id}','Client\ExamController@show')->name('LamDe')->middleware('RoleMiddleware');
Route::post('exams','Client\ExamController@cham')->name('ChamBai')->middleware('RoleMiddleware');
Route::get('exams/xemlai/{id}','Client\ExamController@xemlai')->name('xemlai')->middleware('RoleMiddleware');

Route::get('clients/tip','Client\TipController@index')->name('client.tip');
Route::get('tipcontent/{id}','Client\TipController@index1')->name('content.index');
Route::get('tip-all-content','Client\TipController@index_all')->name('content.index.all');


Route::get('clients/infordriving','Client\InforDrivingController@index')->name('client.infordriving');
Route::get('inforcontent/{id}','Client\InforDrivingController@inforcontent')->name('inforcontent.index');

Route::get('clients/feedback','Client\FeedbackController@index')->name('clients.feedback');
Route::get('verify/{id}/{token}','verify_email@get_xacnhan');

Route::get('asd','verify_email@email_verify')->name('asd');

Route::group(['prefix' => 'profile', 'middleware'=>'auth'],function (){

    Route::get('user-edit-profile','ProfileController@edit_profile')->name('user.edit.profile');
    Route::get('user-edit-image','ProfileController@edit_image')->name('user.edit.image');
    Route::get('user-edit-account','ProfileController@edit_account')->name('user.edit.account');

    Route::post('user-imgage/{id}','ProfileController@updateImgage')->name('user.update.image');
    Route::post('user-profile/{id}','ProfileController@updateProfile')->name('user.update.profile');
    Route::post('user-account/{id}','ProfileController@updateAccount')->name('user.update.account');
});
//xem trang ca nhan bat ky ai
Route::get(  'profile/{id}', 'ProfileController@show')->name('show.user');

Route::get('get-reset-password','Auth\ResetPasswordController@getResetPassword')->name('get.reset.password');
Route::post('post-reset-password','Auth\ResetPasswordController@forgotPassword')->name('post.reset.password');


//auto goi y tim kiem
/*Route::post('autocomplete/fetch', 'Client\AutocompleteController@fetch')->name('autocomplete.fetch');*/

//End Route client
Auth::routes();
