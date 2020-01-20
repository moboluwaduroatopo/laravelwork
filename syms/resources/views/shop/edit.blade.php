  <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js1/app.js') }}" defer></script>
    <script src="js/jquery-3.2.1.min.js') }}"></script>
  <script src="{{ asset('js/popper.js') }}"></script>
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('js/stellar.js') }}"></script>
  <script src="{{ asset('vendors/lightbox/simpleLightbox.min.js') }}"></script>
  <script src="{{ asset('vendors/nice-select/js/jquery.nice-select.min.js') }}"></script>
  <script src="{{ asset('vendors/isotope/imagesloaded.pkgd.min.js') }}"></script>
  <script src="{{ asset('vendors/isotope/isotope-min.js') }}"></script>
  <script src="{{ asset('vendors/owl-carousel/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('js/jquery.ajaxchimp.min.js') }}"></script>
  <script src="{{ asset('vendors/counter-up/jquery.waypoints.min.js') }}"></script>
  <script src="{{ asset('vendors/flipclock/timer.js') }}"></script>
  <script src="{{ asset('vendors/counter-up/jquery.counterup.js') }}"></script>
  <script src="{{ asset('js/mail-script.js') }}"></script>
  <script src="{{ asset('js/theme.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css1/app.css') }}" rel="stylesheet">
      <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
  <link rel="stylesheet" href="{{asset('vendors/linericon/style.css')}}">
  <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
  <link rel="stylesheet" href="{{asset('vendors/owl-carousel/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{asset('vendors/lightbox/simpleLightbox.css')}}">
  <link rel="stylesheet" href="{{asset('vendors/nice-select/css/nice-select.css')}}">
  <link rel="stylesheet" href="{{asset('vendors/animate-css/animate.css')}}">
  <link rel="stylesheet" href="{{asset('vendors/jquery-ui/jquery-ui.css')}}">
  <!-- main css -->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/responsive.css">
</head>
<body>
 <br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Update Quantity') }}</div>

                <div class="card-body">
                    <!-- <form method="POST" action="{{ route('register') }}"> -->

                        {!! Form::open(['action'=>['ShopproductController@update',$pro->id],'method' => 'PUT']) !!}
                         <div class="form-group row">
                            <div class="col-md-6">
                                {{Form::hidden('pid',$pro->pid,['class'=>'form-control'])}}
                                
                            </div>
                        </div>
                         <div class="form-group row">
                           
                            <div class="col-md-6">
                                {{Form::hidden('qty',$pro->quantity,['class'=>'form-control'])}} 
                            </div>
                        </div>
                         <div class="form-group row">
                            {{Form::label('title', 'Quantity', ['class'=>'col-md-4 col-form-label text-md-right'])}}
                            <div class="col-md-6">
                                {{Form::text('quantity',$pro->quantity,['class'=>'form-control'])}}
                                
                            </div>
                        </div>
                      <!--   <div class="form-group row">
                            {{Form::label('title', 'Product_image', ['class'=>'col-md-4 col-form-label text-md-right'])}}
                            <div class="col-md-6">
                             
                                <input type="file" name="file"> 
                            </div>
                        </div> -->
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Update') }}
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


</body>
</html>


