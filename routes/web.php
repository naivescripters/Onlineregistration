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

Route::get('/', function () {
    return redirect()->route('login');
});

Auth::routes(); 

Route::get('/home', 'HomeController@index')->name('home');








Route::group(['as'=>'admin.','prefix'=>'admin','namespace'=>'Admin','middleware'=>['auth','admin']], function (){
    Route::get('dashboard','DashboardController@index')->name('dashboard');
    
  
});


    Route::group(['as'=>'head.','prefix'=>'head','namespace'=>'Head','middleware'=>['auth','head']], function (){
    Route::get('dashboard','DashboardController@index')->name('dashboard');
    
  
});


    Route::group(['as'=>'student.','prefix'=>'student','namespace'=>'Student','middleware'=>['auth','student']], function (){
    Route::get('home','DashboardController@index')->name('home');

    Route::resource('profile','ProfileController');
    Route::get('offeredcourselist','HomeController@index')->name('offeredcourselist');
    Route::post('courselist','HomeController@readdata')->name('courselist');

    Route::get('startregistration','HomeController@startregistration')->name('startregistration');
    Route::post('confirmregistration','HomeController@confirmregistration')->name('confirmregistration');

    Route::get('updateregistration','HomeController@updateregistration')->name('updateregistration');
   
    Route::resource('register','RegisterController');
    Route::resource('selectcourse','SelectcourseController');
});





