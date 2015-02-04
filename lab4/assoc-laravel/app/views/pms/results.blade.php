@extends('layouts.master')

@section('title')
Associative array search results page
@stop

@section('content')

<h2>Australian Prime Ministers</h2>
<h3>Results for query string "{{{ $name = Input::get('name') }}}"</h3>

@if (count($pms) == 0)

<p>No results found.</p>

@else 

<table class="bordered">
<thead>
<tr><th>No.</th><th>Name</th><th>Start</th><th>Finish</th><th>Party</th><th>Duration</th><th>State</th></tr>
</thead>
<tbody>

@foreach($pms as $pm)
  <tr><td>{{{ $pm->number }}}</td><td>{{{ $pm->name }}}</td><td>{{{ $pm->start }}}</td><td>{{{ $pm->finish }}}</td><td>{{{ $pm->party }}}</td><td>{{{ $pm->duration }}}</td><td>{{{ $pm->state }}}</td></tr>
@endforeach

</tbody>
</table>
@endif

<p><a href="{{ URL::to('/') }}">New search</a></p>
@stop