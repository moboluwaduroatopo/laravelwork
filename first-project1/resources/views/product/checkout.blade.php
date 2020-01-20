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

  

 

  </div></div>
  <main class="mt-5 pt-4">
    <div class="container wow fadeIn">

      <!-- Heading -->
      <h2 class="my-5 h2 text-center">Checkout </h2>

      <!--Grid row-->
      <div class="row">

        <!--Grid column-->
        <div class="col-md-8 mb-4">

          <!--Card-->
          <div class="card">

            <!--Card content-->
            <form class="card-body">

              
             
              <!--email-->
              <div class="md-form mb-5">
                <input type="text" id="email" class="form-control" placeholder="{{Auth::user()->name}}"  disabled='disabled'>
              
              </div>

              <!--address-->
              <div class="md-form mb-5">
                <input type="text" id="address" class="form-control" placeholder="{{Auth::user()->email}}"  disabled="disabled">
              
              </div>

              <!--address-2-->
              <div class="md-form mb-5">
                <input type="text" id="address-2" class="form-control" placeholder="{{Auth::user()->country}}" disabled="disabled">
               
              </div>
                <div class="md-form mb-5">
                <input type="text" id="email" class="form-control" placeholder="{{Auth::user()->phone}}" disabled="disabled">
                
              </div>

              <!--address-->
              <div class="md-form mb-5">
                <input type="text" id="address" class="form-control" placeholder="{{Auth::user()->town}}" disabled="disabled">
                
              </div>

              <!--address-2-->
              <div class="md-form mb-5">
                <input type="text" id="address-2" class="form-control" placeholder="{{Auth::user()->address}}" disabled="disabled">
                
              </div>


             

             

              
              
             
              <hr class="mb-4">
          

            </form>

          </div>
          <!--/.Card-->

        </div>
        <!--Grid column-->
</div>
        <!--Grid column-->
        <div class="col-md-4 mb-4">

          <!-- Heading -->
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Your cart</span>
           <!--  <span class="badge badge-secondary badge-pill">3</span> -->
          </h4>

          <!-- Cart -->
         <table class="table">
 
  <thead>
    <tr>
      <th scope="col"></th>
       <th scope="col">Product</th>
                <th scope="col">Price</th>
                <th scope="col">Quantity</th>
                <th scope="col">Total</th>
                <th scope="col"></th>
    
    </tr>
  </thead>
  <tbody>
    <?php 
              $i=0;
            $total=0;

              ?>
  
              @foreach ($cartProducts as $cartp)
    <tr>
      <th scope="row">{{++$i}}</th>
      <td>{{$cartp->name}}</td>
      <td>{{$cartp->price}}</td>
      <td>
             <input type="number" name="qty"  min="1" value="{{$cartp->qty}}" disabled="disabled" class="form-control" style="width: 40px">
                   </td>
                       <?php  $subTotal=$cartp->qty*$cartp->price;?>
                <td>
                  <h5>{{$subTotal}}</h5>
                </td>
                 <td class="text-white"></td>
              </tr>
               <?php  $total=$total+$subTotal;?>
             @endforeach
             <tr>
               <td></td>
               <td></td>
               <td></td>
               <td>
                  <h5>Subtotal:</h5>
                </td>
                <td>
                  <h5>#{{$total}}</h5>
                </td>
               <td ></td>
               <td></td>
             </tr>
             <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
               <td >
               {!! Form::open(['action'=>'CartController@store','method' => 'POST']) !!}
                     <input type="hidden" name="total" value="{{$total}}">
                     <input type="hidden" name="status" value="uncomfirmed">
                      <button type="submit" class="btn btn-secondary" style="border-radius: 30px">
                                    {{ __('Order') }}
                                </button>
                       
                      {!! Form::close() !!}
                </td>
             </tr>
  </tbody>
</table>
          <!-- Cart -->

         

        </div>
        <!--Grid column-->

      </div>
      <!--Grid row-->

    </div>
  </main>
  <!--Main layout-->
 
    @include('includes.footer') 
  @endsection