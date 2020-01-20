@extends('layouts.oldapp')
@section('my-content')
<h3 class="text-center">Welcome to orderlist</h3>
<div class="container">
<input type="search" id="search" class="form-control" placeholder="Search .....">
</div><br>
@if(count($dat) > 0)
<div class="container">
 
	<table class="table table-bordered">
		<tbody id="contactTable"><tr><th>OrderID</th><th>Status</th><th>Total</th><th>Created_at</th><!-- <th colspan="2">Action</th> --><th></th><th></th></tr></tbody>
	@foreach ($dat as $d)
		<tr>
			<td>{{$d->id}}</td>
			<td>{{$d->status}}</td>
			<td>{{$d->total}}</td>
			<td>{{$d->created_at}}</td>
			<td><a href="/cart/{{$d->id}}/edit" class="btn btn-primary">Edit</a></td>
			<td><a href="{{url('/deleteproduct/'.$d->id)}}" class="btn btn-primary">Delete</a></td></tr>
		
	
@endforeach
</table>
{{ $dat->links() }}

</div>
@endif

@endsection
