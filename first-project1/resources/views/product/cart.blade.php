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
<div class="container">
 <section class="text-center mb-4">

        <!--Grid row-->
        <div class="row wow fadeIn">
  @foreach ($dat as $d)

          
          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4">

            <!--Card-->
            <div class="card">

              <!--Card image-->
              <div class="view overlay">
                <img src="upload/{{$d->file}}" class="card-img-top"
                  alt="">
                <a>
                  <div class="mask rgba-white-slight"></div>
                </a>
              </div>
              <!--Card image-->

              <!--Card content-->
              <div class="card-body text-center">
                <!--Category & Title-->
                <a href="" class="grey-text">
                 <!--  <h5>Shirt</h5> -->
                </a>
                <h5>
                  <strong>
                    <a href="" class="dark-grey-text">{{$d->product_name}}
                      <span class="badge badge-pill danger-color">NEW</span>
                    </a>
                  </strong>
                </h5>
                <h4 class="font-weight-bold blue-text">
                  <strong>{{$d->price}}</strong>
                </h4>
                  <a href="/productdetail/{{$d->id}}" class="btn btn-success">View more</a>
                   {!! Form::open(['url'=>'/cart_add','method' => 'POST' ]) !!}
              <!-- Default input -->
            <input type="hidden" name="id" value="{{ $d->id }}">
                    <input type="hidden" name="name" value="{{ $d->product_name }}">
                    <input type="hidden" name="price" value="{{ $d->price }}">
                     <input type="hidden" name="qty" value="1">
                     <button class="btn btn-primary btn-md my-0 p" type="submit">ADD TO CART
                <i class="fas fa-shopping-cart ml-1"></i>

              </button>
                    
      {!! Form::close() !!}
              </div>
              <!--Card content-->

            </div>
            <!--Card-->

          </div>
         
          @endforeach
          <!--Grid column-->

        
        

        </div>
        <!--Grid row-->

      </section>
</div>
    @include('includes.footer') 
@endsection