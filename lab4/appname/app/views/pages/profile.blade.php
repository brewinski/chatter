@extends('layouts.master')
@section('title')
{{{$user = 'Christopher Brewin'}}}
@stop
@section('content')

<div id="posts-container">
  @foreach($posts as $post)
  
  <div class="post-container">
    <div class="post-user-details">
      <img src="{{{ $url = URL::asset('images/snowboard.jpg') }}}" height="75" width="75" alt="post image"/>
      <p><b>{{{$user}}}</b></p>
      <p>{{{ $post['date'] }}}</p>
    </div>
    <div class="post-comment-information">
      @if ($post['image'] != '')
      <img src="{{{ $url = URL::asset($post['image']) }}}" alt="Image Posted By User" />
      @endif
      <p>{{{ $post['message'] }}}</p>
    </div>
    <div class="post-clear"> </div>
  </div>
  @endforeach
</div>
<div class="post-clear">
</div>
@stop