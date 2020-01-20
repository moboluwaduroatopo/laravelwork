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
  <section class="cart_area">
    <div class="container">
      <table class="table">
 
  <thead>
    <tr>
      <th scope="col"></th>
       <th scope="col">Product</th>
                <th scope="col">Price</th>
                <th scope="col">Quantity</th>
                <th scope="col">Total</th>
                <th scope="col">Remove</th>
    
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
      <td style="">
        {!! Form::open(['url'=>'/update-cart','method' => 'POST' ]) !!}
                    <input type="number" name="qty"  min="1" value="{{$cartp->qty}}" >
                    <input type="hidden"value="{{$cartp->rowId}}" name="rowId" >
                    
                  <input class="btn btn-primary" type="submit"  value="Update Cart">
                      {!! Form::close() !!}</td>
                       <?php  $subTotal=$cartp->qty*$cartp->price;?>
                <td>
                  <h5>{{$subTotal}}</h5>
                </td>
                 <td class="text-white"><a  href="{{url('/delete-cart/'.$cartp->rowId)}}" class="btn btn-primary">X</a></td>
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
               <td class="btn btn-primary text-white" style="border-radius: 30px;color: white"> <a class="text-white" href="/home" >Proceed to checkout</a></td>
               <td></td>
             </tr>
             <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
               <td class="btn btn-primary " style="border-radius: 30px"><a class="text-white" href="/">Continue Shopping</a></td>
             </tr>
  </tbody>
</table>
</div>
</section>

    @include('includes.footer') 
@endsection