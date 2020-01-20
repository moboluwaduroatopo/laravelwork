@extends('layouts.adminapp')

@section('content')

<table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">
  <thead>
   <tr><th>Image</th>
   	<th>product_name</th>
   	<th>Price</th>
   	<th>Quantity</th>
   	<th>short D</th>
   	<th>Action</th>
   	<th>Action</th>
   </tr>
  </thead>

  <tbody>
       @foreach ($dat as $d)
   <tr><td><img  src='upload/{{$d->file}}' style="height: 30px; width: 30px "></td>
   	<td>{{$d->product_name}}</td>
			<td>{{$d->price}}</td>
			<td>{{$d->quantity}}</td>
			<td>{{$d->shortd}}</td>
			
			<td><a href="/product/{{$d->id}}/edit" class="btn btn-primary">Edit</a></td>
			<td><a href="{{url('/deleteproduct/'.$d->id)}}" class="btn btn-danger">Delete</a></td></tr>
		
    @endforeach
    
  </tbody>
  <tfoot>
   <tr><th>Image</th>
   	<th>product_name</th>
   	<th>Price</th>
   	<th>Quantity</th>
   	<th>short D</th>
   	<th>Action</th>
   		<th>Action</th>
   </tr>
  </tfoot>
</table>

@endsection

