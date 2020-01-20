@extends('layouts.adminapp')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Add New Grade') }}</div>

                <div class="card-body">
                    <!-- <form method="POST" action="{{ route('register') }}"> -->
                        {!! Form::open(['action'=>'GradeController@store','method' => 'POST' ]) !!}
                         <div class="form-group row">
                            {{Form::label('title', 'Grade', ['class'=>'col-md-4 col-form-label text-md-right'])}}
                            <div class="col-md-6">
                                {{Form::text('grade','',['class'=>'form-control'])}}
                                
                            </div>
                        </div>

                         <div class="form-group row">
                            {{Form::label('title', 'Percentage', ['class'=>'col-md-4 col-form-label text-md-right'])}}
                            <div class="col-md-6">
                                {{Form::text('percentage','',['class'=>'form-control'])}}
                                
                            </div>
                        </div>
                        

                   
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
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
