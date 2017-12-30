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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware(['auth'])->group(function(){
    Route::resource('companies','CompaniesController');
    
    Route::post('projects/adduser', 'ProjectsController@adduser')->name('projects.adduser');
    Route::get('projects/create/{company_id?}', 'ProjectsController@create');
    Route::resource('projects','ProjectsController');

    Route::resource('tasks','TasksController');
    Route::resource('roles','RolesController');
    Route::resource('users','UsersController');
    Route::resource('comments','CommentsController');
});


//Route::resource('fileupload','FileuploadController');  OR
Route::get('fileupload','FileuploadController@index');
//Route::post('fileupload/store','FileuploadController@store')->name('fileupload.store');
Route::post('fileupload/store','FileuploadController@store');
Route::get('fileupload/show','FileuploadController@show');


Route::get('fileupload/showfileform','FileuploadController@showfileform')->name('fileupload.showfileform');
Route::post('file/uploading','FileuploadController@storeFile')->name('file.upload');