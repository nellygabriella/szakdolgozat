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

Route::get('hirek', function () {
    return view('news');
});

Route::get('allasok', function () {
    return view('jobs');
});

Route::get('jegyzetek', function () {
    return view('notes');
});

Route::get('projektek', function () {
    return view('projects');
});

Route::get('kapcsolat', function () {
    return view('contact');
});

Route::get('forum', function () {
    return view('questions');
});