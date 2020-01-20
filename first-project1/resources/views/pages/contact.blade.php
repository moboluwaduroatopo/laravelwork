@extends('layouts.app')
@section('content')

  <div id="carousel-example-1z" class="carousel slide carousel-fade pt-4" data-ride="carousel">

   
    <!--/.Indicators-->

    <!--Slides-->
    <div class="carousel-inner" role="listbox">

      <!--First slide-->
      <div class="carousel-item active">
        <div class="view" style="background-image: url('img/back2.jpg'); background-repeat: no-repeat; background-size: cover;">

          <!-- Mask & flexbox options-->
          <div class="mask rgba-black-strong d-flex justify-content-center align-items-center">

            <!-- Content -->
          <div class="text-center white-text mx-5 wow fadeIn">
              <h1 class="mb-4">
                <strong>MOTEE</strong>
              </h1>

              <p>
                <strong></strong>
              </p>

              <p class="mb-4 d-none d-md-block">
                <strong></strong>
              </p>

              <a target="_blank" href="/" class="btn btn-outline-white btn-lg">Shop now
                <i class="fas fa-graduation-cap ml-2"></i>
              </a>
            </div>
            <!-- Content -->

          </div>
          <!-- Mask & flexbox options-->

        </div>
      </div>
      <!--/First slide-->

  

 

  </div>
</div>
<div class="container">
  <h4>contact</h4>
</div>
      @include('includes.footer')
@endsection