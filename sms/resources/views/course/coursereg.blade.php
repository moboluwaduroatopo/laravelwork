@extends('layouts.sapp')

@section('content')
<h3 class="text-center">Course Registration</h3>
<table  class="table table-striped table-bordered" cellspacing="0" width="100%">
  <thead>
    <tr>
       <th>Course_name</th>
      <th>Course_description</th>
     
    </tr>
  </thead>
  <tbody>
     {!! Form::open(['action'=>'RegcourseController@store','method' => 'POST' ]) !!}
  @foreach ($dat as $d)
    <tr>
      <td><label class="container">
  <input type="checkbox" name="course_id[]" value="{{$d->id}}">
  <span class="checkmark"></span>{{$d->cname}}
</label></td>
        <td>{{$d->description}}</td>   
        <input type="hidden" id="email" name="user_id[]" class="form-control" placeholder=""  value="{{Auth::user()->id}}">  
    </tr>
   
     

          
    @endforeach

       </tbody>
</table>
     <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Save') }}
                                </button>
                            </div>
                        </div>
       {!! Form::close() !!}



@endsection