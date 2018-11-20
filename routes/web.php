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

    /*Route::get('auth/login','Auth\LoginController@function __construct');
    Route::post('auth/login','Auth\LoginController@function __construct');
    Route::get('auth/logout','Auth\LoginController@function __construct');

    Route::get('auth/register','Auth\AuthController@getRegister');
    Route::post('auth/register','Auth\AuthController@postRegister');*/

    Route::get('/login', function(){
        Auth::login();

        return redirect('/');
    });

    Route::auth();
    
    Route::get('post/{slug}', ['as'=>'post.single', 'uses'=>'PostController@getSingle']);
    Route::get('/', 'PagesController@getIndex');

    Route::resource('tags','TagController',['except'=>['create']]);

    Route::get('/allasok', 'PagesController@getJobs');
    Route::get('/jegyzetek', 'PagesController@getNotes');
    Route::get('/projektek', 'PagesController@getProjects');
    Route::get('/kapcsolat', 'PagesController@getContact');
    Route::post('/kapcsolat','pagesController@postContact');
    Route::get('/forum', 'PagesController@getQuestions');

    Route::resource('news', 'NewsController');

});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
