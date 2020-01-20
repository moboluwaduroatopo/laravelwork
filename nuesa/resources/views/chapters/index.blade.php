@extends('layouts.oldapp')
@section('my-content')
<h3 class="text-center">Welcome to productlist</h3>

@if(count($dat) > 0)
<div class="container">

	<table class="table table-bordered">
		<tbody><tr><th>Image</th><th>product_name</th><th>Price</th><th>Quantity</th><th>short D</th><th colspan="2">Action</th></tr></tbody>
	@foreach ($dat as $d)
	 
		<tr><td><img  src='upload/{{$d->file}}' style="height: 30px; width: 30px "></td><td>{{$d->product_name}}</td>
			<td>{{$d->price}}</td>
			<td>{{$d->quantity}}</td>
			<td>{{$d->shortd}}</td>
			
			<td><a href="/product/{{$d->id}}/edit" class="btn btn-primary">Edit</a></td>
			<td><a href="{{url('/deleteproduct/'.$d->id)}}" class="btn btn-primary">Delete</a></td></tr>
		
	
@endforeach
</table>
{{ $dat->links() }}

</div>
@endif

@endsection