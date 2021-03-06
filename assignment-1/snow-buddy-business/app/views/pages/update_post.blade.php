@extends('layouts.master')

@section('title')
Chatter
@stop

@section('jumbotron')
<div class="row">
  <div class="col-md-6">
    <h1>Welcome to Chatter</h1>
    <h1><small>Tell us what's on your mind. Make your first post today.</small></h1>
  </div>
  <div class="col-md-6">
    <!---------------------------------------- Post-Form ----------------------------------> 

    <!---------------------------------------- End Post-Form ---------------------------------->
  </div> 
</div>
@stop
@section('content')

<div class="container" id="post-container">
  @include('partials.post_object')
  <div class="row post-row" >
    <div class="col-md-10">
      <h2><small>Update post</small></h2>
      <form class="form-horizontal" id="update-post-form" method="post" action="{{{ url('update_post_action') }}}">
        <div class="form-group">
          <div class="col-sm-8">
            <input type="hidden" name="id" value="{{{ htmlspecialchars($post->id) }}}"> 
            <input type="text" class="form-control" name="name" value="{{{htmlspecialchars($post->user)}}}" placeholder="Name">
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-8">
            <input type="text" class="form-control" name="title" value="{{{htmlspecialchars($post->title)}}}" placeholder="Title">
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-8">
            <textarea class="form-control" rows="5" name="message" placeholder="Enter Message Here.....">{{{htmlspecialchars($post->message)}}}</textarea>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-0 col-sm-10">
            <button type="submit" class="btn btn-danger">Submit</button>
            <a class="btn btn btn-default" href="{{url('post')}}" role="button">Cancel</a>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
@stop