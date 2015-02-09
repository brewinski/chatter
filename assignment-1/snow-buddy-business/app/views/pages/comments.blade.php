@extends('layouts.master')

@section('jumbotron')
<link rel="stylesheet" href="{{ URL::asset('css/comments_timeline.css') }}">
<div class="row">
  <div class="col-md-6">
    <h1>Welcome to Chatter</h1>
    <h1><small>Tell us what's on your mind. Make your first post today.</small></h1>
  </div>
  <div class="col-md-6">
    <!---------------------------------------- Post-Form ----------------------------------> 

    <!---------------------------------------- End Post-Form ---------------------------------->
  </div> 

  @stop

  @section('content')

  <div class="container" id="post-container">
    @include('partials.post_object')
    <div class="row post-row" >
      <div class="col-md-10">
        <h2><small>Leave A Comment...</small></h2>
        <form class="form-horizontal" id=""  method="POST" action="{{{ url('add_comment_action') }}}">
          <div class="form-group">
            <div class="col-sm-8">
              <input type="hidden" name="id" value="{{{ htmlspecialchars($post->id) }}}"> 
              <input type="text" class="form-control" name="name" placeholder="Name">
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
      </div>
    </div>
    <ul class="timeline">
      <li><div class="tldate">Comments</div></li>
      @foreach($comments as $comment)
      @if($comment->id % 2 == 0)
      <li class="timeline-inverted">
        @include('partials.comment_object')
      </li>
      @else
      <li>
        @include('partials.comment_object')
      </li>
      @endif

      @endforeach
    </ul>
    @stop

  </div>