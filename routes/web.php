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



Route::group(['middlewire'=>['web']], function(){

    Route::get('auth/login','Auth\AuthController@getLogin');
    Route::post('auth/login','Auth\AuthController@postLogin');
    Route::get('auth/logout','Auth\AuthController@getLogout');

    Route::get('auth/register','Auth\AuthController@getRegister');
    Route::post('auth/register','Auth\AuthController@postRegister');
    
    Route::get('post/{slug}', ['as'=>'post.single', 'uses'=>'PostController@getSingle']);
    Route::get('/', 'PagesController@getIndex');

    Route::get('/allasok', 'PagesController@getJobs');
    Route::get('/jegyzetek', 'PagesController@getNotes');
    Route::get('/projektek', 'PagesController@getProjects');
    Route::get('/kapcsolat', 'PagesController@getContact');
    Route::get('/forum', 'PagesController@getQuestions');

    Route::resource('news', 'NewsController');

});