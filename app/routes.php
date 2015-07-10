<?php
Route::get('/', function()
{
	return View::make('home.index');
});
Route::get("test", function(){
return View::make('test');
}); 
Route::get("/users/login", function(){
return View::make('users.login');
});

Route::get("/users/register", function(){
	return View::make('users.register');
});
Route::get('logout','HomeController@destroy');
Route::resource('users', 'UserController');
Route::resource('home', 'HomeController');

Route::group(array('before' => 'auth'), function()
{
    Route::resource('questions','QuestionController');
	Route::resource('answers','AnswerController');
	Route::resource('totalVotes','VoteController@show');
	Route::get('voteUp','VoteController@voteUp');
	Route::get('voteDown','VoteController@voteDown');
	Route::get('/question','QuestionController@display');
});



