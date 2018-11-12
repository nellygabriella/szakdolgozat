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

Route::get('/', 'PagesController@getIndex');

//Route::get('/hirek', 'PagesController@getNews');

Route::get('/allasok', 'PagesController@getJobs');

Route::get('/jegyzetek', 'PagesController@getNotes');

Route::get('/projektek', 'PagesController@getProjects');

Route::get('/kapcsolat', 'PagesController@getContact');

Route::get('/forum', 'PagesController@getQuestions');

Route::resource('news', 'NewsController');

Route::group(['middlewire'=>['web']], function(){

});