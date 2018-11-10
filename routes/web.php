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

Route::get('/home',function()
{
	return view('home');
});

Route::get('/dfd',function()
{
	return view('dfd');
});

// Route::get('/solution',function(){
// 	return view('solution');
// });

Route::get('/sol',function(){
	return view('solution');
});

Route::get('/solutions/getQuestions','SolutionController@getQuestions');
// Route::get('/solutions','SolutionController@index');

Route::resource('questions','QuestionsController');