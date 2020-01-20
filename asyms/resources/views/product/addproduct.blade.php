@extends('layouts.adminapp')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Add New Product') }}</div>

                <div class="card-body">
                    <!-- <form method="POST" action="{{ route('register') }}"> -->
                        {!! Form::open(['action'=>'ProductController@store','method' => 'POST' ,'enctype'=>'multipart/form-data']) !!}
                         <div class="form-group row">
                            {{Form::label('title', 'Product Name', ['class'=>'col-md-4 col-form-label text-md-right'])}}
                            <div class="col-md-6">
                                {{Form::text('product_name','',['class'=>'form-control'])}}
                                
                            </div>
                        </div>

                         <div class="form-group row">
                            {{Form::label('title', 'Price', ['class'=>'col-md-4 col-form-label text-md-right'])}}
                            <div class="col-md-6">
                                {{Form::text('price','',['class'=>'form-control'])}}
                                
                            </div>
                        </div>
                         <div class="form-group row">
                            {{Form::label('title', 'CPrice', ['class'=>'col-md-4 col-form-label text-md-right'])}}
                            <div class="col-md-6">
                                {{Form::text('cprice','',['class'=>'form-control'])}}
                                
                            </div>
                        </div>
                         <div class="form-group row">
                            {{Form::label('title', 'PPrice', ['class'=>'col-md-4 col-form-label text-md-right'])}}
                            <div class="col-md-6">
                                {{Form::text('pprice','',['class'=>'form-control'])}}
                                
                            </div>
                        </div>
                        
                         <div class="form-group row">
                            {{Form::label('title', 'Quantity', ['class'=>'col-md-4 col-form-label text-md-right'])}}
                            <div class="col-md-6">
                                {{Form::text('quantity','',['class'=>'form-control'])}}
                                
                            </div>
                        </div>
                        <div class="form-group row">
                            {{Form::label('title', 'Product_image', ['class'=>'col-md-4 col-form-label text-md-right'])}}
                            <div class="col-md-6">
                             
                                <label class="btn btn-primary btn-file">
                                    choose file
                                    <input  type="file" name="file" style="display: none;"> 
                                </label>
                            </div>
                        </div>

                        <div class="form-group row">
                            {{Form::label('title', 'Short_Description', ['class'=>'col-md-4 col-form-label text-md-right'])}}
                            <div class="col-md-6">
                                  <textarea class="form-control" name="shortd" id="exampleTextarea" rows="3"></textarea>
                                
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
