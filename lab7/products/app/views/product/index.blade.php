
@foreach($products as $product)
<p>{{{$product->name}}} : {{{$product->price}}}</p>
<p> <a href="{{{url('product/' . $product->id)}}}">edit</a> </p>
@endforeach
