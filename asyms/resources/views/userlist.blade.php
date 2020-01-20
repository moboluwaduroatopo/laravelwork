@extends('layouts.adminapp')

@section('content')

<table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">
  <thead>
    <tr>
      <th>passport</th>
       <th>user_id</th>
      <th>User_name</th>
     <th>Email</th>
      <th>Phone</th>
      <!-- <th>Address</th> -->
      <th>Role</th>
      <!-- <th>Status</th> -->
       <th>create_at</th>
    </tr>
  </thead>

  <tbody>
       @foreach ($dat as $d)
    <tr>
      <td><img src="/upload/uploads/{{$d->file}}" style="width: 35px;height: 35pxborder-radius: 50%"></td>
      <td>{{$d->id}}</td>
    <td>{{$d->name}}</td>
      <td>{{$d->email}}</td>
      <td>{{$d->phone}}</td>
      <!-- <td>{{$d->parent_name}}</td>
      <td>{{$d->parent_phone}}</td> -->
      <!-- <td>{{$d->address}}</td> -->
      <td>{{$d->role}}</td>
     <!--  <td>{{$d->status}}</td> -->
     <td>{{$d->created_at}}</td>
            
    </tr>
    @endforeach
    
  </tbody>
  <tfoot>
    <tr>
       <th>passport</th>
      <th>user_id</th>
       <th>User_name</th>
     <th>Email</th>
      <th>Phone</th>
      <!-- <th>Parent_name</th>
      <th>Parent_phone</th> -->
     <!--  <th>Address</th> -->
      <th>Role</th>
      <!-- <th>Status</th> -->
         <th>create_at</th>
    </tr>
  </tfoot>
</table>

@endsection
