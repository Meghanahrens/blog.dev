@extends('layouts.master')

@section('style')
<style type="text/css">


</style>
@section('content')
<div class="container-fluid">
  	<div class='img'>
  	<h1 class='font-large space'>Welcome To My Blog</h1>
  	</div>

    <div class="container">
       <div class="row">
          <div class="col-md-12">
              <div class="input-group" id="adv-search">
                  {{ Form::open(array('action' => 'PostsController@index', 'method' => 'GET')) }}
                  <input type="text" name="search" class="form-control" placeholder="Search by title" />
                  <div class="input-group-btn">
                    <div class="btn-group" role="group">
                      <button type="button" name="search" class="btn btn-primary"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                    </div>
                  </div>
                  {{ Form::close() }}
               </div>
          </div>
        </div>
    </div>
  </div>
  <h1 class='font'>Blog posts...</h1>


@foreach($posts as $post)
	<h1 class="font-large"><a class='font' href="/posts/{{ $post['id'] }}">{{ $post['title'] }}</a></h1>
	<p class='font'>{{ $post['body'] }}</p>
<div>
	<span class="badge font"> Posted by: {{$post->user->first_name .',' . ' ' . $post->created_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i:s A'); }}</span>
</div>
<hr>
@endforeach
</div>


@stop
