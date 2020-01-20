@extends('layouts.adminapp')

@section('content')
<table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">
  <thead>
    <tr>
       <th>Grade_id</th>
       <th>Grade</th>
       <th>Percentage</th>
       <th>create_at</th>
       <th colspan="2">Action</th>
    </tr>
  </thead>

  <tbody>
       @foreach ($dat as $d)
    <tr>
      <td>{{$d->id}}</td>
       <td>{{$d->grade}}</td>
        <td>{{$d->percentage}}</td>
     <td>{{$d->created_at}}</td>   
     <td><a href="/grade/{{$d->id}}/edit" class="btn btn-primary">Edit</a>
     </td>   
     <td><a href="{{url('/delete_grade/'.$d->id)}}"  class="btn btn-primary">Delete</a>
     </td>   
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
       <th>Grade_id</th>
       <th>Grade</th>
       <th>Percentage</th>
       <th>create_at</th>
       <th colspan="2">Action</th>
    </tr>
  </tfoot>
</table>

@endsection
