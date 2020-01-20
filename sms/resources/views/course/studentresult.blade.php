@extends('layouts.sapp')

@section('content')
<page size="A4">

<h2 class="text-center">Studentid:   {{Auth::user()->id}}</h2>
<h3 class="text-center">Name:  {{Auth::user()->name}}</h3>
<table  class="table table-striped table-bordered" cellspacing="0" width="100%">
  <thead>
    <tr>
       <th>S/N</th>
       <!-- <th>Student_id</th>
       <th>Student_name</th> -->
      <!--  <th>Course_id</th> -->
      <th>Course_name</th>
     <th>Course Title</th> 
     <th>Score</th>
     <th>Grade</th>
    </tr>
  </thead>
 <?php 
  $i=0; 
   ?>
   
  <tbody>
       @foreach ($dat as $d)
    <tr>
      <td>{{++$i}}</td>
       <!-- <td>{{$d->user_id}}</td>
        <td>{{$d->name}}</td> -->
    <!--   <td>{{$d->course_id}}</td> -->
      <td>{{$d->cname}}</td>
      <td>{{$d->description}}</td>
      <td>{{$d->mark}}</td>
 <td>{{$d->grade}}</td>
       
       
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

</table>

       @foreach ($class as $dd)
      
    @endforeach

<h3>Remarks: {{$dd->remarks}}</h3>
</page>
<page size="A4">

<h2 class="text-center">Studentid:   {{Auth::user()->id}}</h2>
<h3 class="text-center">Name:  {{Auth::user()->name}}</h3>
<table  class="table table-striped table-bordered" cellspacing="0" width="100%">
  <thead>
    <tr>
       <th>S/N</th>
       <!-- <th>Student_id</th>
       <th>Student_name</th> -->
      <!--  <th>Course_id</th> -->
      <th>Course_name</th>
     <th>Course Title</th> 
     <th>Score</th>
     <th>Grade</th>
    </tr>
  </thead>
 <?php 
  $i=0; 
   ?>
   
  <tbody>
       @foreach ($dat1 as $d)
    <tr>
      <td>{{++$i}}</td>
      <td>{{$d->cname}}</td>
      <td>{{$d->description}}</td>
      <td>{{$d->mark}}</td>
 <td>{{$d->grade}}</td>
       
       
    </tr>
    @endforeach

  </tbody>

</table>

       @foreach ($class1 as $dd)
      
    @endforeach

<h3>Remarks: {{$dd->remarks}}</h3>
</page>
@endsection
