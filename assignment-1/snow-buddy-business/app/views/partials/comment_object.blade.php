<div class="row">
  <div class="tl-circ"></div>
  <div class="timeline-panel">
    <a class="btn btn-link pull-right" href="{{url("delete_comment/$comment->id/$comment->postid")}}" role="button"><span class="glyphicon glyphicon-remove pull-right"></span></a>
    <div class="tl-heading">
      <h4>{{{htmlspecialchars($comment->user)}}}</h4>
      <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 3 hours ago</small></p>

    </div>
    <div class="tl-body">
      <p>{{{htmlspecialchars($comment->message)}}}</p>
    </div>
  </div>
</div>

