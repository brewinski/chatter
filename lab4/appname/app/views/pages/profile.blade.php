@extends('layouts.master')
@section('title')
{{{$user = 'Christopher Brewin'}}}
@stop
@section('content')

<?php
$posts = array(
  array('date' => '27 Jan 2014', 'message' => 'Take me back!', 'image' => 'images/snowboard.jpg'),
  array('date' => '28 Jan 2014', 'message' => 'Just going thru some photos this was one of my favorites I think it was the boys New Zealand school ski trip they look so young hey xx Thinking of you xx', 'image' => ''),
  array('date' => '29 Jan 2014', 'message' => 'Beer for the arvo..', 'image' => 'images/beer-aroma.jpg'),
);
?>
<div id="posts-container">
  @foreach($posts as $post)
  
  <div class="post-container">
    <div class="post-user-details">
      <img src="{{{ $url = URL::asset('images/snowboard.jpg') }}}" height="75" width="75" alt="post image"/>
      <p><b>Christopher Brewin</b></p>
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