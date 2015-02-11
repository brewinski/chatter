
@if (!Auth::check())
  {{Form::open(array('route' =>'user.login'))}}
  {{Form::label('username', 'User Name')}}
  {{Form::text('username');}}

  {{Form::label('password', 'Password')}}
  {{Form::password('password')}}

  {{ Form::submit('Create') }}

  {{Form::close()}}
  {{ link_to_route('user.create', 'Create an Account') }}
@else
  {{Auth::user()->username}}
  {{ link_to_route('user.logout', 'Logout') }}
@endif

@foreach($products as $product)
<p>{{{$product->name}}} : {{{$product->price}}}</p>
<p> <a href="{{{url('product/' . $product->id)}}}">edit</a> </p>
@endforeach

