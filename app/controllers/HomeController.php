<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/
	
	public function showWelcome()
    {
        return Redirect::action('HomeController@sayHello', array('Bob'));
    }

    public function sayHello($name = 'bob')
    {
        $data = array('name' => $name);
        return View::make('my-first-view')->with($data);
    }

    public function showLogin()
    {
    	if (Auth::check()) {
    		return Redirect::action('PostsController@index');
    		
    	} else{
    		return View::make('file.login');
    	}

    }

    public function doLogin()
    {
    	$email = Input::get('email');
    	$password = Input::get('password');

    	if(Auth::attempt(array('email' => $email, 'password' => $password))) {
    		return Redirect::intended('/posts');
    	} else {
    		// 1. Display a session flash error
    		Session::flash('errorMessage', 'You messed up.');
    		// 2. Log email that trued to authenticate
    		return Redirect::action('HomeController@showLogin');
    	}
    }

    public function doLogout()
    {
    	Auth::logout();
    	return Redirect::to('/posts');
    }
    

	

}
