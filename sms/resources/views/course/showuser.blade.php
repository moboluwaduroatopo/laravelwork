@extends('layouts.oldapp')
@section('my-content')
<h3 class="text-center">Welcome to userlist</h3>
<div class="container">
<input type="search" id="search" class="form-control" placeholder="Search ....">
</div><br>
@if(count($dat) > 0)
<div class="container">
	<table class="table table-bordered">
		<tbody id="contactTable"><tr><th>User_name</th><th>Email</th><th>Phone</th><th>Country</th><th>Town</th><th>Address</th><th>Role</th><th>Password</th><!-- <th colspan="2">Action</th> --></tr></tbody>
	@foreach ($dat as $d)
		<tr>
			<td>{{$d->name}}</td>
			<td>{{$d->email}}</td>
			<td>{{$d->phone}}</td>
			<td>{{$d->country}}</td>
			<td>{{$d->town}}</td>
			<td>{{$d->address}}</td>
			<td>{{$d->role}}</td>
			<td>{{$d->password}}</td>
            
			
			<!-- <td><a href="/product/{{$d->id}}/edit" class="btn btn-primary">Edit</a></td>
			<td><a href="{{url('/deleteproduct/'.$d->id)}}" class="btn btn-primary">Delete</a></td> --></tr>
		
	
@endforeach
</table>
{{ $dat->links() }}

</div>
@endif

@endsection
