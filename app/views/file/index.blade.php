@extends('layouts.master')

@section('style')
<style type="text/css">
.container-fluid {
	padding-top:40px;
	text-align: center;
}
.font {
	font-family: 'Josefin Slab', serif;
}
.font-large {
	font-family: 'Josefin Slab', serif;
	font-weight:400;
	font-size:60;
}

</style>
@section('content')
<div class="container-fluid">
<h1 class='font-large'>Blog posts...</h1>

@foreach($posts as $post)
<h1><a class='font' href="/posts/{{ $post['id'] }}">{{ $post['title'] }}</a></h1>
<p class='font'>{{ $post['content'] }}</p>
<div>
<span class="badge font">{{ $post->created_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i:s A'); }}</span>
</div>
<hr>
@endforeach
</div>
</div>
</div>

@stop
