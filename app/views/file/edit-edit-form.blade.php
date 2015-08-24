<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<h1>Create Post</h1>

        <meta name="description" content="Blog Creation page">
        <title>Create Blog Post</title>
{{ $errors->first('title', '<span class="help-block">:message</span>') }}
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Create a Blog Post!</h3>
            </div>
            <div class="panel-body">
                    <div class="form-group @if ($errors->has('title')) has-error @endif">
                        <label for="title" >Blog Title</label>
                        <input type="text" class="form-control" name="title" value="{{{ Input::old('title') }}}" id="title" autofocus>
                    </div>
                    <div class="form-group @if ($errors->has('title')) has-error @endif">
                        <label for="body" >Blog Body</label>
                        <textarea class="form-control" rows="15" name="body">{{{ Input::old('body') }}}</textarea>
                    </div>
                    <button class="btn btn-default" type="submit">Save Post</button>
                    <a class="btn btn-danger" style="float: right;" href="{{{ action('PostsController@index') }}}">Cancel</a>
            </div>
        </div>
    </div>