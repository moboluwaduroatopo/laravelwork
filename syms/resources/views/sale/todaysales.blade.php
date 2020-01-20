@extends('layouts.adminapp')

@section('content')
<table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">
  <thead>
    <tr>
       <th>Sales_id</th>
      <th>Product_name</th>
     <th>Price</th>
     <th>Quantity</th>
     <th>Total</th>
       <th>create_at</th>
    </tr>
  </thead>

  <tbody>
       @foreach ($dats as $d)
    <tr>
      <td>{{$d->id}}</td>
    <td>{{$d->product_name}}</td>
      <td>{{$d->price}}</td>
      <td>{{$d->quantity}}</td>
      <td>{{$d->total}}</td>
     <td>{{$d->created_at}}</td>      
    </tr>
    <!-- Default checked -->
    <!-- <tr>
      <td><div class="custom-control custom-checkbox">
  <input type="checkbox" value="{{$d->id}}" class="custom-control-input"  >
  <label class="custom-control-label" for="defaultChecked2">{{$d->name}}</label>
</div></td>
<td>{{$d->description}}</td>
<td></td>
    </tr> -->

    @endforeach

  </tbody>
  <tfoot>
    <tr>
     
      <th>Sales_id</th>
      <th>Product_name</th>
     <th>Price</th>
     <th>Quantity</th>
     <th>Total</th>
       <th>create_at</th>
    </tr>
  </tfoot>
</table>

@endsection
