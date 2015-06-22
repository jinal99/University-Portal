<?php


Route::get('/', function()
{
	return View::make('home.index');
});

Route::get('searchQuestion', 'SearchController@show');

Route::get("users/login", function(){
return View::make('users.login');
});

Route::get("users/register", function(){
	return View::make('users.register');
});


Route::resource('users', 'UserController');
Route::resource('home', 'HomeController');


Route::group(array('before' => 'auth'), function()
{
    Route::resource('questions', 'QuestionController');
	Route::resource('answers', 'AnswerController');

});


