@extends('layouts.tapp')

@section('content')
<table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">
  <thead>
    <tr>
       <th>Result_id</th>
       <th>Student_id</th>
       <th>Student_name</th>
       <th>Course_id</th>
      <th>Course_name</th>
     <th>Description</th> 
     <th>Marks</th>
     <th>Grade</th>
     <th>Term</th>
     <th>Section</th>
     <th>Remarks</th>
     <th>grade_id</th>
     <th>teacher_id</th>
       <th>create_at</th>
       <th colspan="2">Action</th>
    </tr>
  </thead>

  <tbody>
       @foreach ($dat as $d)
    <tr>
      <td>{{$d->id}}</td>
       <td>{{$d->user_id}}</td>
        <td>{{$d->name}}</td>
      <td>{{$d->course_id}}</td>
    <td>{{$d->cname}}</td>
      <td>{{$d->description}}</td>
      <td>{{$d->mark}}</td>
      <td>{{$d->grade}}</td>
      <td>{{$d->term}}</td>
      <td>{{$d->section}}</td>
      <td>{{$d->remarks}}</td>
      <td>{{$d->grade_id}}</td>
      <td>{{$d->teacher_id}}</td>
     <td>{{$d->created_at}}</td>   
     <td><a href="/exam_result/{{$d->id}}/edit" class="btn btn-primary">Edit</a>
     </td>   
     <td><a href="{{url('/delete_result/'.$d->id)}}"  class="btn btn-primary">Delete</a>
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
      <th>Result_id</th>
        <th>Student_id</th>
          <th>Student_name</th>
      <th>course_id</th>
       <th>Course_name</th>
     <th>Description</th>
      <th>Marks</th>
      <th>Grade</th>
     <th>Term</th>
     <th>Section</th>
     <th>Remarks</th>
     <th>grade_id</th>
     <th>teacher_id</th>
         <th>create_at</th>
          <th colspan="2">Action</th>
    </tr>
  </tfoot>
</table>

@endsection
