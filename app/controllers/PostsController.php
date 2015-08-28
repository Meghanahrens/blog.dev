<?php

class PostsController extends \BaseController {


	public function __construct()
	{
		parent::__construct();
		$this->beforeFilter('auth', array('except' => array('index', 'show')));
	}
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		
		$query = Post::with('user');

		if (Input::has('search')) {
			$query->where('title', 'like', '%'.Input::get('search')."%");
		}
		$posts = $query->orderBy('created_at', 'desc')->paginate(5);
		return View::make('file.index')->with('posts', $posts);
		
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('file.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		 $validator = Validator::make(Input::all(), Post::$rules);
	    // attempt validation
	    if ($validator->fails()) {
	        // validation failed, redirect to the post create page with validation errors and old inputs
	        return Redirect::back()->withInput()->withErrors($validator);
	    } else {
			$post = new Post();
			$post->title = Input::get('title');
			$post->body = Input::get('body');
			$post->user_id = Auth::id();
			$post->save();

			Session::flash('successMessage', $post->title . ' ' . 'Saved Successfuly');
			Log::info('This has been saved.');
			return Redirect::action('PostsController@index');
			
	        // validation succeeded, create and save the post
	    }
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{	
		$post = Post::find($id);
		$user = $post->first_name;
		$title = $post->title;
		$body = $post->body;
		$id = $post->id;
		return View::make('file.show')->with('post', $post);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$post = Post::find($id);

		return View::make('file.edit')->with('post', $post);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		  $validator = Validator::make(Input::all(), Post::$rules);
	    // attempt validation
	    if ($validator->fails()) {
	        // validation failed, redirect to the post create page with validation errors and old inputs
	        return Redirect::back()->withInput()->withErrors($validator);
	    } else {
			$post = Post::find($id);
			$post->title = Input::get('title');
			$post->body  = Input::get('body');
			
			if($post->save()) {
				Session::flash('successMessage', "$post->title Saved Successfuly");
				Log::info('This has been saved.');
				return Redirect::action('PostsController@show', array($id));
			}
		}
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$post = Post::find($id)->delete();
		
		if ($post->delete) {
			Session::flash('successMessage', 'Your post has been deleted.');
			Log::info('This has been deleted.');
		} else {
			Session::flash('errorMessage', 'Something went wrong. Please try again.');
		}
		return Redirect::action('PostsController@index');
	}


}
