@extends('layouts.tapp')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Add New Class') }}</div>

                <div class="card-body">
                    <!-- <form method="POST" action="{{ route('register') }}"> -->
                        {!! Form::open(['action'=>'ClassController@store','method' => 'POST' ]) !!}
                            <div class="form-group row" >
                            <label for="" class="col-md-4 col-form-label text-md-right">{{ __('Select Student Name') }}</label>

                            <div class="col-md-6">
                                 <select class="mdb-select md-form form-control" name="student_id" searchable="Search here..">
                          <option value="" disabled selected>Choose Student Name</option>
                                   @foreach ($student as $d)
                                    <option value="{{$d->id}}">{{$d->name}}</option>
                                       @endforeach
                                </select>
                               
                            </div>

                        </div>
                       <div class="form-group row" >
                            <label for="" class="col-md-4 col-form-label text-md-right">{{ __('Select Grade') }}</label>
                          <div class="col-md-6">
                            <select class="mdb-select md-form form-control" name="grade_id" searchable="Search here..">
                          <option value="" disabled selected>Choose Grade</option>
                                  @foreach ($grade as $d)
                                    <option value="{{$d->id}}">{{$d->grade}}</option>
                                      @endforeach
                                  </select>
                                
                               </div>
                            </div>
                        </div>

                       
                         <div class="form-group row">
                            {{Form::label('title', 'section', ['class'=>'col-md-4 col-form-label text-md-right'])}}
                            <div class="col-md-6">
                                {{Form::text('section','',['class'=>'form-control'])}}
                                
                            </div>
                        </div>

                         <div class="form-group row">
                            {{Form::label('title', 'Remarks', ['class'=>'col-md-4 col-form-label text-md-right'])}}
                            <div class="col-md-6">
                                {{Form::text('remarks','',['class'=>'form-control'])}}
                                
                            </div>
                        </div>
                        <div class="form-group row">
                            {{Form::label('title', 'Term', ['class'=>'col-md-4 col-form-label text-md-right'])}}
                            <div class="col-md-6">
                                {{Form::text('term','',['class'=>'form-control'])}}
                                
                            </div>
                        </div>
                          <div class="form-group row">
                            {{Form::label('title', 'Teacher name', ['class'=>'col-md-4 col-form-label text-md-right'])}}
                            <div class="col-md-6">
                                
                                <input type="" name="teacher_id" value="{{Auth::user()->name}}" disabled="disabled" class="form-control">
                            </div>
                        </div>
                        <!-- <div class="form-group row" >
                            <label for="" class="col-md-4 col-form-label text-md-right">{{ __('Select Teacher Name') }}</label>

                            <div class="col-md-6">
                                 <select class="mdb-select md-form form-control" name="teacher_id" searchable="Search here..">
                          <option value="" disabled selected>Choose Teacher Name</option>
                                   @foreach ($teacher as $d)
                                    <option value="{{$d->id}}">{{$d->name}}</option>
                                       @endforeach
                                </select>
                               
                            </div>

                        </div>
                    -->
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary" >
                                    {{ __('Save') }}
                                </button>
                            </div>
                        </div>
                 <!--    </form> -->
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
