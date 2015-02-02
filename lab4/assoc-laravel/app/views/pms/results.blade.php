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
<tr><th>No.</th><th>Name</th><th>Address</th><th>Phone</th><th>Email</th></tr>
</thead>
<tbody>

@foreach($pms as $pm)
  <tr><td>{{{ $pm['index'] }}}</td><td>{{{ $pm['name'] }}}</td><td>{{{ $pm['address'] }}}</td><td>{{{ $pm['phone'] }}}</td><td>{{{ $pm['email'] }}}</td></tr>
@endforeach

</tbody>
</table>
@endif

<p><a href="{{ URL::to('/') }}">New search</a></p>
@stop