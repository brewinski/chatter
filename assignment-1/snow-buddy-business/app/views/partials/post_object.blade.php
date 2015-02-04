
<div class="row post-row">
    <div class="row">
      <div class="col-md-3">
        @if(!empty($post->user))
        <h2>{{{htmlspecialchars($post->user)}}}</h2>
        @else
        <h1><small>Anonymouse Post</small></h1>
        <h2><small>The poster has not specified their name...</small></h2>
        @endif
      </div>
      <div class="col-md-9">
        <h1><small><u><b>{{{htmlspecialchars($post->title)}}}</b></u></small></h1>
        <h2><small>{{{htmlspecialchars($post->message)}}}</small></h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-1">
        <a class="btn btn-danger" href="{{url("comments/$post->id")}}" role="button"><span class="glyphicon glyphicon-comment"></span> Comments ({{{htmlspecialchars($post->id)}}})</a>
      </div>
      <div class="col-md-9"></div>
      <div class="col-md-2">
        <a class="btn btn-link pull-right" href="{{url("delete_post_action/$post->id")}}" role="button"><span class="glyphicon glyphicon-trash"></span></a>
        <a class="btn btn-link pull-right" href="{{url("update_post/$post->id")}}" role="button"><span class="glyphicon glyphicon-edit"></span></a>
      </div>
    </div>
</div>
