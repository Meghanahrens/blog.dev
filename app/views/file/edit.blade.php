@extends('layouts.master')

@section('content')
{{ Form::model($post, array('action' => array('PostController@update', $post->id), 'method' => 'PUT')) }}
	@include('file.create-edit-form')
{{ Form::close() }}

@stop
