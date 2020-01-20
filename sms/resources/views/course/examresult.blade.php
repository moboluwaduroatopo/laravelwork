@extends('layouts.tapp')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h2>Student Exam Result</h2></div>

                <div class="card-body">
                       {!! Form::open(['action'=>'ExamresultController@store','method' => 'POST' ]) !!}
                      
                         <div class="form-group row">
                            <label for="" class="col-md-4 col-form-label text-md-right">{{ __('Select Student Name') }}</label>

                            <div class="col-md-6">
                                 <select class="mdb-select md-form form-control" name="user_id" searchable="Search here..">
                          <option value="" disabled selected>Choose Student Name</option>
                                   @foreach ($user as $d)
                                    <option value="{{$d->id}}">{{$d->id}}-{{$d->name}}</option>
                                       @endforeach
                                </select>
                               
                            </div>

                        </div>
                       <div class="form-group row">
                            <label for="" class="col-md-4 col-form-label text-md-right">{{ __('Select Course Name') }}</label>
                          <div class="col-md-6">
                            <select class="mdb-select md-form form-control" name="course_id" searchable="Search here..">
                          <option value="" disabled selected>Choose Course Name</option>
                                  @foreach ($course as $d)
                                    <option value="{{$d->id}}">{{$d->cname}}</option>
                                      @endforeach
                                  </select>
                                
                               </div>
                            </div>
                      
                        <div class="form-group row">
                            <label for="" class="col-md-4 col-form-label text-md-right">{{ __('Select Grade ') }}</label>
                          <div class="col-md-6">
                            <select class="mdb-select md-form form-control" name="grade_id" searchable="Search here..">
                          <option value="" disabled selected>Choose Grade </option>
                                  @foreach ($grade as $d)
                                    <option value="{{$d->id}}">{{$d->grade}}</option>
                                      @endforeach
                                  </select>
                                
                               </div>
                            </div>
                      
                       
                               <div class="form-group row" >
                            <label for="" class="col-md-4 col-form-label text-md-right">{{ __('Select Class') }}</label>
                          <div class="col-md-6">
                            <select class="mdb-select md-form form-control" name="class_id" searchable="Search here..">
                          <option value="" disabled selected>Choose Class</option>
                                  @foreach ($class as $d)
                                    <option value="{{$d->id}}">{{$d->student_id}}-{{$d->section}}-{{$d->term}}</option>
                                      @endforeach
                                  </select>
                                
                               </div>
                            </div>
                       
                        <div class="form-group row">
                            {{Form::label('title', 'Mark', ['class'=>'col-md-4 col-form-label text-md-right'])}}
                            <div class="col-md-6">
                                {{Form::text('mark','',['class'=>'form-control'])}}
                                
                            </div>
                        </div>
                       
                      
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Save') }}
                                </button>
                            </div>
                        </div>
                                     {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>

</div>
@endsection
