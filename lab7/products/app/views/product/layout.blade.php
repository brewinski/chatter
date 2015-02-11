
@if (!Auth::check())
  {{Form::open(array('route' =>'user.login'))}}
  {{Form::label('username', 'User Name')}}
  {{Form::text('username');}}

  {{Form::label('password', 'Password')}}
  {{Form::password('password')}}

  {{ Form::submit('Create') }}

  {{Form::close()}}
@else
  {{ link_to_route('user.logout', 'Logout') }}
  {{ link_to_route('user.create', 'Create an Account') }}
@end

@yield('content')
