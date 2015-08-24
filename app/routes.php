<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::resource('posts', 'PostsController');
Route::get('/', 'HomeController@showWelcome');



// Route::get('/sayhello/{name?}', function($name)
// {
//     $data = array('name' => $name);
// return View::make('my-first-view')->with($data);
// });

// Route::get('post/{id}', function($id)
// {
// return 'post with id: ' . $id;
// });


Route::get('/', function()
{
	return View::make('hello');
});

Route::get('form', function()
{
	return View::make('form');
});
Route::post('form', function()
{
	$input = Input::all();
	if(!Input::has('username')){
		return Redirect::back()->withInput();
	}
});
Route::get('orm-test', function()
{
	$post1 = new Post();
	$post1->title = 'Eloquent is awesome!';
	$post1->body  = 'It is super easy to create a new post.';
	$post1->save();

	$post2 = new Post();
	$post2->title = 'Post number two';
	$post2->body  = 'The body for post number two.';
	$post2->save();
});


Route::get('/resume', function()
{
return View::make('layouts.resume');
});

Route::get('/portfolio', function()
{
return View::make('layouts.portfolio');
});

Route::get('/rolldice/{guess?}', function($guess = null)
{

$rand = mt_rand(1, 6);

return View::make('roll-dice')->with(compact('guess', 'rand'));
});









