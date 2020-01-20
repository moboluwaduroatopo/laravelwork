@extends('layouts.app')

@section('content')

<div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('images/bg_1.jpg')">
    <div class="container">
      <div class="row align-items-end justify-content-center text-center">
        <div class="col-lg-7">
          <h2 class="mb-0">Register</h2>
          {{-- <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p> --}}
        </div>
      </div>
    </div>
  </div> 


<div class="custom-breadcrumns border-bottom">
  <div class="container">
    <a href="index.html">Home</a>
    <span class="mx-3 icon-keyboard_arrow_right"></span>
    <span class="current">Register</span>
  </div>
</div>
<div class="row col-md-6  justify-content-center">
        @include('includes.messages')
      </div>
<div class="site-section">
    <div class="container">


        <div class="row justify-content-center">
                
            <div class="col-md-5">
                    <form method="POST" action="{{ route('register') }}">
                            @csrf
                <div class="row">
                    <div class="col-md-12 form-group">
                        <label for="username">Fullname</label>
                        <input id="username" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                    </div>
                    <div class="col-md-12 form-group">
                        <label for="email">Email</label>
                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                    {{-- <div class="form-group col-md-12">
                            {{Form::label('title', 'Chapter Name')}}
                            <input id="pword" type="text" class="form-control{{ $errors->has('chapter_name') ? ' is-invalid' : '' }}" name="chapter_name" required>
                               
                    </div> --}}
                    {{-- <div class="form-group col-md-12">
                            {{Form::label('title', 'Chapter Address')}}
                            <input id="pword" type="text" class="form-control{{ $errors->has('chapter_address') ? ' is-invalid' : '' }}" name="chapter_address" required>
                        </div> --}}
                        <div class="form-group col-md-12">
                                {{Form::label('title', 'Address')}}
                                <input id="pword" type="text" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" required>
                            </div>
                            <div class="form-group col-md-12">
                                    {{Form::label('title', 'Phone')}}
                                    <input id="pword" type="number" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" required>
                             </div>
                             <input type="hidden" value="President" name="role">
                            
                    <div class="col-md-12 form-group">
                        <label for="pword">Password</label>
                        <input id="pword" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="col-md-12 form-group">
                        <label for="pword2">confirm Password</label>
                        <input id="pword2" type="password" class="form-control" name="password_confirmation" required>
                    </div>
                    <div class="col-md-12 form-group">
                                <select class="mdb-select md-form form-control" name="chapter_name" id="typs" searchable="Search here.." >
                                        <option value="" disabled selected>Please select chapter_name</option>
                                @foreach ($chapter as $d)
                            <option value="{{$d->chapter_name}}">{{$d->chapter_name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-12 form-group">
                            <label for="pword2">chapter's id</label>  
                            <input id="pword2" type="text" class="form-control" name="chapter_id" required>
                        </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <input type="submit" value="{{ __('Register') }}" class="btn btn-success text-white btn-lg px-5">
                    </div>
                </div>
            </form>
            </div>
                
        </div>
        

      
    </div>
</div>


{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row">
                            {{Form::label('title', 'Phone Number', ['class'=>'col-md-4 col-form-label text-md-right'])}}
                            <div class="col-md-6">
                                {{Form::text('phone','',['class'=>'form-control'])}}
                                
                            </div>
                        </div>

                         <div class="form-group row">
                            {{Form::label('title', 'Country', ['class'=>'col-md-4 col-form-label text-md-right'])}}
                            <div class="col-md-6">
                                {{Form::text('country','',['class'=>'form-control'])}}
                                
                            </div>
                        </div>
                        
                         <div class="form-group row">
                            {{Form::label('title', 'Town/City', ['class'=>'col-md-4 col-form-label text-md-right'])}}
                            <div class="col-md-6">
                                {{Form::text('town','',['class'=>'form-control'])}}
                                
                            </div>
                        </div>
                         <div class="form-group row">
                            {{Form::label('title', 'Address', ['class'=>'col-md-4 col-form-label text-md-right'])}}
                            <div class="col-md-6">
                                {{Form::text('address','',['class'=>'form-control'])}}
                                
                            </div>
                        </div>
                         <div class="form-group row" hidden="hidden">
                            <label for="" class="col-md-4 col-form-label text-md-right">{{ __('Role') }}</label>

                            <div class="col-md-6">
                                <select class="form-control" name="role">
                                    <option value="buyer">buyer</option>
                                </select>
                               
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>
                      
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
        
        
                <h4>if you are member please login by <a href="/login">click here</a>  </h4>
            </div>
        </div>
    </div>
</div> --}}
@endsection
