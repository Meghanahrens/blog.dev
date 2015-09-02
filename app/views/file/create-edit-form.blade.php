@extends('layouts.master')
@section('content')
<!-- Create Post Form -->
<legend>Create Post</legend>
<link rel="stylesheet" href="/css/createpost.css">
 

 <div class="container">
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
    <hr>
 {{ Form::model($post = new Post(), array('action' => 'PostsController@store', 'method' => 'POST', 'files' => true, 'class' => 'form-horizontal')) }}
    <ul class="post-types">
      <li class="post-type">
      </li>
  </ul>
   <div class="share">
    <div class="arrow"></div>
      <div class="panel panel-default">
        <div class="panel-heading"><i class="fa fa-file"></i> Update Blog</div>
          <div class="panel-body">
          <input id="textinput" name="title" type="text" value="{{{ Input::old('title') }}}" class="form-control input-md" placeholder="Post title" required="">
          <div>
            <div class="panel-body">
              <div class="">
              <textarea name="body" cols="40" rows="10" id="status_message" class="form-control message" style="height: 62px; overflow: hidden;" placeholder="Blog Body">{{{ Input::old('body') }}}</textarea> 
              </div>
            </div>
            <div class="panel-footer">
              <div class="row">
                <div class="col-md-7">
                  <div class="form-group">
                    <div class="btn-group">
                    <button type="button" class="btn btn-default"><i class="icon icon-map-marker"></i> Location</button>
  {{ Form::file('image', null) }}
                    <button type="button" name="image" class="btn btn-default"><i class="icon icon-picture"></i> Photo</button>
                    </div>
                </div>
                <div class="col-md-5">
 <div class="form-group">
                                  
 <input type="submit" name="submit" value="Post" class="btn btn-primary">                               
 </div>
 </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  {{ Form::close() }}
    </div>
  </div>
</div> 
<script src="http://code.jquery.com/jquery-1.11.0.min.js">
 $(document).ready(function(){
 $('.status').click(function() { $('.arrow').css("left", 0);});
 $('.photos').click(function() { $('.arrow').css("left", 146);});
 });
 </script>
