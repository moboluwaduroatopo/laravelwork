

@extends('layouts.app')

@section('content')

<div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('images/bg_1.jpg')">
    <div class="container">
      <div class="row align-items-end justify-content-center text-center">
        <div class="col-lg-7">
          <h2 class="mb-0">Chapter's Registration</h2>
          {{-- <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p> --}}
        </div>
      </div>
    </div>
  </div> 


<div class="custom-breadcrumns border-bottom">
  <div class="container">
    <a href="index.html">Home</a>
    <span class="mx-3 icon-keyboard_arrow_right"></span>
    <span class="current">Chapter's Registration</span>
  </div>
</div>
<div class="row col-md-6  justify-content-center">
        @include('includes.messages')
      </div>
<div class="site-section">
    <div class="container">


        <div class="row justify-content-center">
                
            <div class="col-md-5">
                    <form method="POST" action="/chapters">
                            @csrf
                <div class="row">
                    
                    <div class="form-group col-md-12">
                            {{Form::label('title', 'Chapter Name')}}
                            <input id="pword" type="text" class="form-control{{ $errors->has('chapter_name') ? ' is-invalid' : '' }}" name="chapter_name" required>
                                {{-- {{Form::text('chapter_name','',['class'=>'form-control'])}} --}}
                    </div>
                    <div class="form-group col-md-12">
                            {{Form::label('title', 'Chapter Address ')}}
                            <input id="pword" type="text" class="form-control{{ $errors->has('chapter_address') ? ' is-invalid' : '' }}" name="chapter_address" required>
                                {{-- {{Form::text('chapter_address','',['class'=>'form-control'])}} --}}
                        </div>
                        <div class="form-group col-md-12">
                                {{Form::label('title', 'Chapter Abbreviation')}}
                                <input id="pword" type="text" class="form-control{{ $errors->has('chapter_abbreviation') ? ' is-invalid' : '' }}" name="chapter_abbreviation" required>
                                    {{-- {{Form::text('address','',['class'=>'form-control'])}} --}}
                            </div>
                            <div class="form-group col-md-12">
                                    {{Form::label('title', 'Chapter_Phone *')}}
                                    <input id="pword" type="number" class="form-control{{ $errors->has('chapter_phone') ? ' is-invalid' : '' }}" name="chapter_phone" required>
                                        {{-- {{Form::text('phone','',['class'=>'form-control'])}} --}}
                             </div>
                             {{-- <input type="hidden" value="President" name="role"> --}}
                            
                    <div class="col-md-12 form-group">
                        <label for="pword">Chapter's email *</label>
                        <input id="pword" type="email" class="form-control{{ $errors->has('chapter_email') ? ' is-invalid' : '' }}" name="chapter_email" required>

                        @if ($errors->has('chapter_email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('chapter_email') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="col-md-12 form-group">
                        <label for="pword2">President Name</label>
                        <input id="pword2" type="text" class="form-control" name="president_name" required>
                    </div>
                    <div class="col-md-12 form-group">
                            <label for="pword2">President Email</label>
                            <input id="pword2" type="email" class="form-control" name="president_email" required>
                        </div>
                        <div class="col-md-12 form-group">
                                <label for="pword2">President Phone</label>
                                <input id="pword2" type="text" class="form-control" name="president_phone" required>
                            </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <input type="submit" value="{{ __('Save') }}" class="btn btn-success text-white btn-lg px-5">
                    </div>
                </div>
            </form>
            </div>
                
        </div>
        

      
    </div>
</div>


@endsection






{{-- @extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Add Chapter') }}</div>

                <div class="card-body">
                   
                        {!! Form::open(['action'=>'ChaptersController@store','method' => 'POST' ,'enctype'=>'multipart/form-data']) !!}
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
                            {{Form::label('title', 'Quantity', ['class'=>'col-md-4 col-form-label text-md-right'])}}
                            <div class="col-md-6">
                                {{Form::text('quantity','',['class'=>'form-control'])}}
                                
                            </div>
                        </div>
                        <div class="form-group row">
                            {{Form::label('title', 'Product_image', ['class'=>'col-md-4 col-form-label text-md-right'])}}
                            <div class="col-md-6">
                             
                                <input type="file" name="file"> 
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
@endsection --}}
