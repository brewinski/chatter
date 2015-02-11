{{Form::open(array('route' => array('user.store')))}}
{{Form::label('username', 'User Name')}}
{{Form::text('username');}}

{{Form::label('password', 'Password')}}
{{Form::password('password')}}

{{ Form::submit('Create') }}

{{Form::close()}}