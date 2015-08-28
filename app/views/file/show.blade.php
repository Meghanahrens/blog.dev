@extends('layouts.master')
@section('content')
<div class="container-fluid">
	<div class="col-md-12">
		<h2 class='font-title'>{{ $post->title }}</h2>
		<h4 class='font'>Post By: {{ $post->user->first_name }}
		<h3 class='font-normal'>{{ $post->body }}</h3>
		<hr>
		<a class='font-edit btn btn-success' href="{{{ action('PostsController@edit', $post->id) }}}">Edit</a>
		<button id="delete" class="btn btn-danger font" href="">Delete</button>

		{{ Form::open(array('action' => array('PostsController@destroy', $post->id), 'method' => 'DELETE', 'id' => 'formDelete')) }}
		{{ Form::close() }}
	</div>
</div>
@stop
@section('scripts')
	<script>
		(function() {
		"use strict";
		$('#delete').on('click', function() {
			var onConfirm = confirm('Are you sure you want to? There is no turning back.');
			
		});

		})();

	</script>
@stop