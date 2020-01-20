@extends('layouts.adminapp')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Move new Product to Shop') }}</div>

                <div class="card-body">
                    <!-- <form method="POST" action="{{ route('register') }}"> -->
                        {!! Form::open(['action'=>'ShopproductController@store','method' => 'POST' ,'enctype'=>'multipart/form-data']) !!}
                 
                      <div class="form-group row" >
                            <label for="" class="col-md-4 col-form-label text-md-right">{{ __('Product Name') }}</label>

                            <div class="col-md-6">
                                <select class="form-control" name="pid" id="ppid" searchable="Search here.." onchange="pprrice()">
                                    <option>select product</option>
                                      @foreach ($dat as $d)
                                    <option  value="{{$d->id}}">{{$d->product_name}}</option>
                                      @endforeach
                                </select>
                               
                            </div>
                        </div>
                         <div class="form-group row">
                            {{Form::label('title', 'Quantity', ['class'=>'col-md-4 col-form-label text-md-right'])}}
                            <div class="col-md-6">
                                {{Form::text('quantity','',['class'=>'form-control'])}}
                                
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
<script type="text/javascript">

    //function pprrice() {
           
          //   var i = $('#ppid option:selected').attr('label');
              //alert(i);
             //  document.getElementById('pri').value=+i;
   // }
</script>
@endsection
