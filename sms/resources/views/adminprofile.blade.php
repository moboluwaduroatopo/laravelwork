@extends('layouts.adminapp')

@section('content')
<div class="container">
    <div class="row ">
        <div class="col-md-10 col-md-offset-1">
            {{-- <div class="card">
                <div class="card-header">My Profile </div> --}}
            <img src="/upload/uploads/{{$user->file}}" style="width: 250px;height: 250px;float: left;border-radius: 50%;margin-right: 25px">
            <h2>{{$user->name}}</h2>
            <form enctype="multipart/form-data" action="/profile" method="POST">
                <label>Update profile</label><br>
                <input type="file" name="file">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
              <div class="md-form mb-5">
                <input type="text" id="email" name="name" class="form-control" placeholder=""  value="{{Auth::user()->name}}">
              
              </div>

              <!--address-->
              <div class="md-form mb-5">
                <input type="text" id="address" name="email" class="form-control" placeholder=""  value="{{Auth::user()->email}}">
              
              </div>

              <!--address-2-->
              <div class="md-form mb-5">
                <input type="hidden" id="address-2" name="parent_name" class="form-control" placeholder=""  value="{{Auth::user()->parent_name}}">
               
              </div>
                <div class="md-form mb-5">
                <input type="text" id="email" name="phone" class="form-control" placeholder="" value="{{Auth::user()->phone}}">
                
              </div>

              <!--address-->
              <div class="md-form mb-5">
                <input type="hidden" id="address" name="parent_phone" class="form-control" placeholder=""  value="{{Auth::user()->parent_phone}}">
                
              </div>

              <!--address-2-->
              <div class="md-form mb-5">
                <input type="text" id="address-2" name="address" class="form-control" placeholder="{{Auth::user()->address}}" value="{{Auth::user()->address}}">
                
              </div>
                <input type="submit" class="pull-right btn btn-sm btn-primary" value="submit">
            </form>
   
            {{-- </div> --}}
        </div>
    </div>
</div>
@endsection
