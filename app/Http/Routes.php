Route::get('/', 'PagesController@getIndex');
Route::get('hirek', 'PagesController@getNews');
Route::get('allasok', 'PagesController@getJobs');
Route::get('forum', 'PagesController@getQuestions');
Route::get('jegyzetek', 'PagesController@getJobs');
Route::get('kapcsolat', 'PagesController@getContact');
Route::get('projektek', 'PagesController@getProjects');
Route::resource('posts', 'PostController');