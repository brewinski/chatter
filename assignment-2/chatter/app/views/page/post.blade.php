@extends('layout.master')

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
    {{ Form::open(array('action' => 'PostController@store', 'class' => 'form-horizontal', 'id' => 'post-form')) }}
    <div class="form-group">
      <div class="col-sm-8">
        {{ Form::text('name', null,['class' => 'form-control', 'placeholder' => 'Name']) }}
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-8">
        {{ Form::text('title', null,['class' => 'form-control', 'placeholder' => 'Title']) }}
      </div>
    </div>
    
        <div class="form-group">
      <div class="col-sm-8">
       {{ Form::textarea('message', null, ['class' => 'form-control', 'size' => '0x5', 'placeholder' => 'Enter Message Here......']) }}
      </div>
    </div>

    <div class="form-group">
      <div class="col-sm-8">
        {{ Form::submit('Submit Post', array('class' => 'btn btn-danger')) }}
      </div>
    </div>
    {{ Form::close() }}
    <!---------------------------------------- End Post-Form ---------------------------------->
  </div> 
</div>
@stop
@section('content')

<div class="container" id="post-container">

  @foreach($posts as $post)
  @include('partial.post_object')
  @endforeach
</div>

@stop