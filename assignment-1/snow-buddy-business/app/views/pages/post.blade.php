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
    <form class="form-horizontal" id="post-form" method="post" action="add_post_action">
      <div class="form-group">
        <div class="col-sm-8">
          <input type="text" class="form-control" name="name" placeholder="Name">
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-8">
          <input type="text" class="form-control" name="title" placeholder="Title">
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-8">
          <textarea class="form-control" rows="5" name="message" placeholder="Enter Message Here....."></textarea>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-0 col-sm-10">
          <button type="submit" class="btn btn-danger">Submit</button>
        </div>
      </div>
    </form>
    <!---------------------------------------- End Post-Form ---------------------------------->
  </div> 
</div>
@stop
@section('content')

<div class="container" id="post-container">
  @foreach($posts as $post)
    @include('partials.post_object')
  @endforeach
</div>

@stop
