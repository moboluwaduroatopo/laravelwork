
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                  <form method="POST" action="{{ route('register') }}">
                    @csrf
                   
                      <div class="col-xs-12 col-md-offset-3">
                        <div class="col-md-12">
                          {{-- <h3> Seller Account Information</h3> --}}
                          <div class="form-group">
                            <label class="control-label">Full Name</label>
                            {{-- <input  maxlength="100" type="text" required="required" class="form-control" placeholder="Enter Full Name" name="name"  [(ngModel)]="form.name"/> --}}
                            <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
        
                                        @if ($errors->has('name'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                        @endif
                          </div>
                          {{-- <div class="form-group">
                            <label class="control-label">Phone Number</label>
                            <input maxlength="100" type="text" class="form-control" required="required" placeholder="Enter phone" name="phone" />
                            
                          </div> --}}
                          <div class="form-group">
                            <label class="control-label">Email</label>
                            {{-- <input maxlength="100" type="email" required="required" class="form-control" placeholder="Enter Email" name="email" [(ngModel)]="form.email"/> --}}
                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
        
                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                          </div>
                          
                          <div class="form-group">
                            <label class="control-label">Password</label>
                            {{-- <input maxlength="100" type="password" required="required" class="form-control" placeholder="Enter password" name="password"  [(ngModel)]="form.password"/> --}}
                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
        
                                        @if ($errors->has('password'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                          </div>
                          <div class="form-group ">
                            <label class=" col-form-label">Confirm Password</label>
                              <input type="password" name="password_confirmation" class="form-control" id="inputPassword3" placeholder="Password" name="password_confirmation"
                                required>               
                          </div>
                          <button type="submit" class="btn btn-success btn-lg pull-right">
                            {{ __('Register') }}
                        </button>
                          {{-- <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button> --}}
                        </div>
                      </div>
                 
                
                         
                      
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
