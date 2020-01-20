@extends('layouts.adminapp')

@section('content')
<table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">
  <thead>
    <tr>
       <th>Course_id</th>
      <th>Course_name</th>
     <th>Description</th>
       <th>create_at</th>
    </tr>
  </thead>

  <tbody>
       @foreach ($dat as $d)
    <tr>
      <td>{{$d->id}}</td>
    <td>{{$d->cname}}</td>
      <td>{{$d->description}}</td>
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
     
      <th>course_id</th>
       <th>Course_name</th>
     <th>Description</th>
         <th>create_at</th>
    </tr>
  </tfoot>
</table>

@endsection
