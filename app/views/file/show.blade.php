@extends('layouts.master')
@section('style')
<style type="text/css">
.container {
	text-align: center;
}
h2 {
	padding-top: 100px;
}
.font {
	font-family: 'Josefin Slab', serif;
}
.font-large {
	font-family: 'Josefin Slab', serif;
	font-weight:400;
	font-size:60;
}
.font-edit {
	font-family:'Josefin Slab', serif;
	font-weight: 600;
	font-size:15;

}
</style>
@section('content')
<div class="container">
	<div class="col-md-12">
		<h2 class='font-large'>{{ $title }}</h2>
		{{-- <h3 class='font'>Posts Id: {{ $id }} --}}
		<h3 class='font'>{{ $body }}</h3>
		<hr>
		<a class='font-edit btn btn-success' href="{{{ action('PostsController@edit', $id) }}}">Edit</a>
		<button id="delete" class="btn btn-danger font" href="">Delete</button>

		{{ Form::open(array('action' => array('PostsController@destroy', $id), 'method' => 'DELETE', 'id' => 'formDelete')) }}
		{{ Form::close() }}
	</div>
</div>
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