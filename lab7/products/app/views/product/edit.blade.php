{{Form::model($product, array('method' => 'PUT', 'route' => array('product.update', $product->id)))}}
{{Form::label('name', 'name')}}
{{Form::text('name');}}
{{{$errors->first('name')}}}

{{Form::label('price', 'price')}}
{{Form::text('price')}}
{{{$errors->first('price')}}}
{{ Form::submit('Edit') }}

{{Form::close()}}