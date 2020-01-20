@extends('layouts.adminapp')

@section('content')

<table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">
  <thead>
    <tr>
       <th>shop_id</th>
      <th>Product_name</th>
     <th>Quantity</th>
       <th>create_at</th>
          <th>Action</th>
      <th>Action</th>
    </tr>
  </thead>

  <tbody>
       @foreach ($dat as $d)
    <tr>
      <td>{{$d->id}}</td>
    <td>{{$d->product_name}}</td>
      <td>{{$d->quantity}}</td>
     <td>{{$d->created_at}}</td>
      <td><a href="/shop/{{$d->id}}/edit" class="btn btn-primary">Edit</a></td>
      <td><a href="{{url('/deleteshop/'.$d->id)}}" class="btn btn-danger">Delete</a></td></tr>      
    </tr>
    @endforeach
    
  </tbody>
  <tfoot>
    <tr>
         <th>shop_id</th>
      <th>Product_name</th>
     <th>Quantity</th>
         <th>create_at</th>
            <th>Action</th>
      <th>Action</th>
    </tr>
  </tfoot>
</table>

@endsection
