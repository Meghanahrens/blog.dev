<!-- Create Post Form -->
{{ Form::open(array('action' => 'PostsController@store', 'method' => 'POST', 'class' => 'form-horizontal')) }}

<fieldset>

<!-- Form Name -->
<legend>Create Post</legend>

<!-- Text input-->
<div class="form-group" style="height: 40px; width: 600px;">
  <label class="control-label" for="textinput">Post Title</label>
  <div class="">
  <input id="textinput" name="title" type="text" value="{{{ Input::old('title') }}}" class="form-control input-md" required="">

  </div>
</div>

<!-- Textarea -->
<div class="form-group" style="height: 500px; width: 600px;">
  <label class="control-label" for="content"></label>
  <div class="">
      <textarea class="form-control" style="height: 480px; width: 600px;"  name="body">{{{ Input::old('body') }}}</textarea>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="control-label" for="singlebutton"></label>
  <div class="">
  <button type="submit" class="btn btn-light btn-md ">post</button>
  </div>
</div>

</fieldset>
{{ Form::close() }}
