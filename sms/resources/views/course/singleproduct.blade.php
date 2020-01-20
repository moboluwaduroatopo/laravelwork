  @extends('layouts.app')
@section('content')
  <!--Main layout-->
  <main class="mt-5 pt-4">
    <div class="container dark-grey-text mt-5">

      <!--Grid row-->
      <div class="row wow fadeIn">

        <!--Grid column-->
        <div class="col-md-6 mb-4">

           <div class="card">
      <div class="card-body">
       <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="../upload/{{$pro->file}}" alt="First slide" style="height: 500px">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="../upload/{{$pro->file}}" alt="Second slide" style="height: 500px">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="../upload/{{$pro->file}}" alt="Third slide" style="height: 500px">
    </div>
  </div>
</div>
      </div>
    </div>

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-6 mb-4">

          <!--Content-->
          <div class="p-4">

            <div class="mb-3">
              <a href="">
                <span class="badge purple mr-1">{{$pro->product_name}}</span>
              </a>
              <a href="">
                <span class="badge blue mr-1">New</span>
              </a>
              <a href="">
                <span class="badge red mr-1"> Availibility : In Stock</span>
              </a>
            </div>

            <p class="lead">
              <span class="mr-1">
                <del>#200</del>
              </span>
              <span>#{{$pro->price}}</span>
            </p>

            <p class="lead font-weight-bold">Description</p>

            <p>{{$pro->shortd}}</p>

            <div class="d-flex justify-content-left">
            	 <input type="number" value="1" aria-label="Search" class="form-control" style="width: 100px">
            	 {!! Form::open(['url'=>'/cart_add','method' => 'POST' ]) !!}
              <!-- Default input -->
                   <input type="hidden" name="id" value="{{ $pro->id }}">
                    <!-- <input type="hidden" name="name" value="{{ $pro->product_name }}">
                    <input type="hidden" name="price" value="{{ $pro->price }}"> -->
                     <input type="hidden" name="qty" value="1">
                     <button class="btn btn-primary btn-md my-0 p" type="submit">ADD TO CART
                <i class="fas fa-shopping-cart ml-1"></i>

              </button>
                    
      {!! Form::close() !!}
            </div>

          </div>
          <!--Content-->

        </div>
        <!--Grid column-->

      </div>
      <!--Grid row-->

      <hr>

    

    </div>
  </main>
       <!--  <div class="" style="margin: 10%">
        	<div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
       <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="../upload/{{$pro->file}}" alt="First slide" style="height: 500px">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="../upload/{{$pro->file}}" alt="Second slide" style="height: 500px">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="../upload/{{$pro->file}}" alt="Third slide" style="height: 500px">
    </div>
  </div>
</div>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
   <h3>{{$pro->product_name}}</h3>
   <p class="text-primary">{{$pro->price}}</p>
   <p>
    Category : Household
</p>
<p>
    Availibility : In Stock
</p>
<hr>
<p>{{$pro->shortd}}</p>
 
  	  {!! Form::open(['url'=>'/cart_add','method' => 'POST' ]) !!}
                 
                    <input type="hidden" name="id" value="{{ $pro->id }}">
                    <input type="hidden" name="name" value="{{ $pro->product_name }}">
                    <input type="hidden" name="price" value="{{ $pro->price }}">
                     <input type="hidden" name="qty" value="1">
                    <input type="submit" class="btn btn-success btn-lg" value="Add to Cart">
      {!! Form::close() !!}
<button class="btn btn-primary">ADD TO CART</button>
  </div>
</div>
        </div>
 -->

  @include('includes.footer')
@endsection