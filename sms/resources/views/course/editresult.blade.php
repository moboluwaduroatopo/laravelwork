@extends('layouts.regapp')
@section('content')
<div class="container">
<h3 class="text-centre">Update Result</h3>
{!! Form::open(['action'=>['ExamresultController@update',$dat->id],'method' => 'PUT']) !!}
    <!-- <div class="form-group">
      {{Form::label('title','C')}}
      {{Form::text('course_id',$dat->course_id,['class'=>'form-control'])}}
    </div> -->
    <div class="form-group">
      {{Form::label('title','User_id')}}
      {{Form::text('user_id',$dat->user_id,['class'=>'form-control'])}}
    </div>
    <div class="form-group">
      {{Form::label('title','Mark')}}
      {{Form::text('mark',$dat->mark,['class'=>'form-control'])}}
    </div>
   

    <div class="form-group">
      {{Form::submit('submit',['class'=>'btn btn-info'])}}
    </div>
{!! Form::close() !!}
</div>
@endsection