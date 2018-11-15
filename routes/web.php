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
//Route::post('/categories/store','CategoriesController@store')
Route::resource('questions','QuestionsController');
Route::resource('categories','CategoriesController');
Route::get('/categories/submit','CategoriesController@submit');
Route::post('/categories/submit','CategoriesController@submit');
Route::resource('items','ItemsController');
Route::get('/items/submit','ItemsController@submit');
Route::post('/items/submit','ItemsController@submit');
Route::get('/displayAnswer','SolutionController@displayAnswer');

Route::get('/abc','QuestionsController@session_access');
Route::get('/saveResponse','brainStormResponsesController@saveResponse');

