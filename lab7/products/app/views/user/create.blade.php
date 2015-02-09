{{Form::model($product, array('method' => 'PUT', 'route' => array('user.store')))}}
{{Form::label('username', 'User Name')}}
{{Form::text('username');}}

{{Form::label('price', 'price')}}
{{Form::text('price')}}

{{ Form::submit('Edit') }}

{{Form::close()}}