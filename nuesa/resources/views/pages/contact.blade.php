@extends('layouts.app')
@section('content')

<div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('images/bg_1.jpg')">
  <div class="container">
    <div class="row align-items-end justify-content-center text-center">
      <div class="col-lg-7">
        <h2 class="mb-0">Contact</h2>
        {{-- <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p> --}}
      </div>
    </div>
  </div>
</div> 

<div class="custom-breadcrumns border-bottom">
      <div class="container">
        <a href="/">Home</a>
        <span class="mx-3 icon-keyboard_arrow_right"></span>
        <span class="current">Contact</span>
      </div>
    </div>
<div class="container">
  <h4>contact</h4>
</div>
      @include('includes.footer')
@endsection