@extends('layouts.adminapp')

@section('content')

<!-- <h3 class="text-center">Welcome to Sales</h3> -->
 <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal1">Add Reamin sale product</button>

  <div   id="myModal1" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Sales</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
        {!! Form::open(['action'=>'RemainproductController@store','method' => 'POST' ,'enctype'=>'multipart/form-data']) !!}
      <div class="modal-body">
  <!-- Email -->
                     <div class="form-group row" >
                            <label for="" class="col-md-4 col-form-label text-md-right">{{ __('Product Name') }}</label>

                            <div class="col-md-6">
                                <select class="form-control" name="pid" searchable="Search here.." >
                                    <option>select product</option>
                                      @foreach ($dat as $d)
                                    <option  value="{{$d->id}}">{{$d->product_name}}</option>
                                      @endforeach
                                </select>
                               
                            </div>
                        </div>
                         <div class="form-group row">
                            {{Form::label('title', 'Sell quantity', ['class'=>'col-md-4 col-form-label text-md-right'])}}
                            <div class="col-md-6">
                                {{Form::text('sell_qty','',['class'=>'form-control'])}}
                                
                            </div>
                        </div>
                         <div class="form-group row">
                            {{Form::label('title', 'Remain quantity', ['class'=>'col-md-4 col-form-label text-md-right'])}}
                            <div class="col-md-6">
                                {{Form::text('remain_qty','',['class'=>'form-control'])}}
                                
                            </div>
                        </div>
                         <div class="form-group row">
                            {{Form::label('title', 'Price', ['class'=>'col-md-4 col-form-label text-md-right'])}}
                            <div class="col-md-6">
                                {{Form::text('price','',['class'=>'form-control'])}}
                                
                            </div>
                        </div>
                      <!--   <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Save') }}
                                </button>
                            </div>
                        </div> -->
                 <!--    </form> -->
                  
              </div>
      <div class="modal-footer">
        <button type="submit" class="btn purple-gradient" name="submit">Save</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
        {!! Form::close() !!}
    </div>

  </div>
</div>



<table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">
  <thead>
  
    <th>product_name</th>
    <th>Price</th>
    <th>Sell_qty</th>
    <th>Remain_qty</th>
    <th>Action</th>
   <!--   
    <th>Action</th> -->
   </tr>
  </thead>

  <tbody>
       @foreach ($dats as $d)
   <tr>
    <td>{{$d->product_name}}</td>
      <td>{{$d->price}}</td>
      <td>{{$d->sell_qty}}</td>
      <td>{{$d->remain_qty}}</td>
      <td><a href="{{url('/deleteremain/'.$d->id)}}" class="btn btn-danger">Delete</a></td>
      <!-- <td><a href="/product/{{$d->id}}/edit" class="btn btn-primary">Edit</a></td>
      <td><a href="{{url('/deleteproduct/'.$d->id)}}" class="btn btn-danger">Delete</a></td> -->
    </tr>
    
    @endforeach
    
  </tbody>
  <tfoot>
 
    <th>product_name</th>
    <th>Price</th>
    <th>Sell_qty</th>
    <th>Remain_qty</th>
     <th>Action</th>
    <!--
      <th>Action</th> -->
   </tr>
  </tfoot>
</table>


@endsection
