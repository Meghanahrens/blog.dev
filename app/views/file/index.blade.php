@extends('layouts.master')

@section('style')

@section('content')



<link rel="stylesheet" href="/css/header-index.css">


<div class="container">
  <div class="row">
  <!-- Wrapper for slides -->
    <div class="carousel-inner">
       <div class="item active">
          <img src="/img/header-background.jpg" alt="First slide">
                    <!-- Static Header -->
            <div class="header-text hidden-xs">
              <div class="col-md-12 text-center">
              <h2>
              <span>Welcome to My Blog</span>
              </h2>
                <br>
                <div class="">
                @if(Auth::check())
                  <a class="btn btn-theme btn-sm btn-min-block" href="{{{ action('HomeController@doLogout') }}}">Logout</a>
                @else
                  <a class="btn btn-theme btn-sm btn-min-block" href="{{{ action('HomeController@doLogin') }}}">Login</a>
                @endif
                  <a class="btn btn-theme btn-sm btn-min-block" href="#">Register</a></div>
              </div>
            </div><!-- /header-text -->
       </div>
    </div>    
  </div>

  <section class="well">
  <h1>Scroll through the most recent posts</h1>
  </section>

  @foreach($posts as $post)
  <div class="well">
    <div class="media">
      <a class="pull-left" href="#">
        @if (!empty($post->image))
          <img class="media-object small" src="{{{ $post['image'] }}}">
        @endif
        </a>
      <div class="media-body">
      <h4 class="media-heading"><a href="/posts/{{$post['id'] }}">{{ $post['title'] }}</a></h4>
        <p class="text-right"><li><span>Posted by: {{$post->user->first_name .',' . ' ' . $post->created_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i:s A'); }}</span></li></p>
        <p>{{ $post['body'] }}</p>
        <ul class="list-inline list-unstyled">
          <li>|</li>
        </ul>
      </div>
    </div>
  </div>
  @endforeach
</div>
  

@stop
