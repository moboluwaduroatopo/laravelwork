@extends('layouts.oldapp')
@section('my-content')
<h3 class="text-center">Welcome to orderlist</h3>
<div class="container">
<input type="search" id="search" class="form-control" placeholder="Search .....">
</div><br>
@if(count($dat) > 0)
<div class="container" >
 
	<table class="table table-bordered">
		<tbody id="contactTable"><tr><th></th><th>OrderproductID</th><th>orderID</th><th>ProductID</th><th>ProductName</th><th>Price</th><th>QTY</th><!-- <th colspan="2">Action</th> --></tr></tbody>
	@foreach ($dat as $d)
		<tr>
			<td><img  src='upload/{{$d->file}}' style="height: 40px; width: 50px "></td>
			<td>{{$d->id}}</td>
			<td>{{$d->order_id}}</td>
			<td>{{$d->product_id}}</td>
			<td>{{$d->product_name}}</td>
			<td>{{$d->price}}</td>

			<td>{{$d->qty}}</td>
			
            
			</tr>
			<!-- <td><a href="/product/{{$d->id}}/edit" class="btn btn-primary">Edit</a></td>
			<td><a href="{{url('/deleteproduct/'.$d->id)}}" class="btn btn-primary">Delete</a></td> -->
		
	
@endforeach
</table>
{{ $dat->links() }}

</div>
@endif

@endsection