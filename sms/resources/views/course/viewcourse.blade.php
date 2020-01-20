@extends('layouts.sapp')

@section('content')
<h3 class="text-center">List of Course </h3>
<table  class="table table-striped table-bordered" cellspacing="0" width="100%">
  <thead>
    <tr>
       <th>Course_name</th>
      <th>Course_description</th>
     
    </tr>
  </thead>
  <tbody>
     
  @foreach ($dat as $d)
    <tr>
      <td>{{$d->cname}}
</td>
        <td>{{$d->description}}</td>     
    </tr>
   
     

          
    @endforeach

       </tbody>
</table>
   



@endsection