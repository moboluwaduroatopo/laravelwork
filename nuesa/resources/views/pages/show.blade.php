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
    <div id="app">
      <header class="header_area">
    <div class="top_menu row m0">
      <div class="container-fluid">
        <div class="float-left">
          <p>Call Us: 07069176577</p>
        </div>
        <div class="float-right">
          <ul class="right_side">
            <!-- <li>
              <a href="http://localhost/first-project1/public/login">
                Login/Register
              </a>
            </li>
 -->            <li>
              <a href="/">
                My Account
              </a>
            </li>
            <li>
              <a href="contact.html">
                Contact Us
              </a>
            </li>
             <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
          </ul>
            <ul class="navbar-nav ml-auto">
                       
                    </ul>
        </div>
      </div>
    </div>
    <div class="main_menu">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <a class="navbar-brand logo_h" href="index.html">
            <img src="img/logo.png" alt="">
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
           aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <div class="row w-100">
              <div class="col-lg-7 pr-0">
                <ul class="nav navbar-nav center_nav pull-right">
                  <li class="nav-item active">
                    <a class="nav-link" href="/">Home</a>
                  </li>
                  <li class="nav-item submenu dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Shop</a>
                    <ul class="dropdown-menu">
                      <li class="nav-item">
                        <a class="nav-link" href="category.html">Shop Category</a>
                        <li class="nav-item">
                          <a class="nav-link" href="single-product.html">Product Details</a>
                          <li class="nav-item">
                            <a class="nav-link" href="checkout.html">Product Checkout</a>
                            <li class="nav-item">
                              <a class="nav-link" href="cart.html">Shopping Cart</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="confirmation.html">Confirmation</a>
                            </li>
                    </ul>
                  </li>
                  <li class="nav-item submenu dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Blog</a>
                    <ul class="dropdown-menu">
                      <li class="nav-item">
                        <a class="nav-link" href="blog.html">Blog</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="single-blog.html">Blog Details</a>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-item submenu dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages</a>
                    <ul class="dropdown-menu">
                      <li class="nav-item">
                        <a class="nav-link" href="login.html">Login</a>
                        <li class="nav-item">
                          <a class="nav-link" href="tracking.html">Tracking</a>
                          <li class="nav-item">
                            <a class="nav-link" href="elements.html">Elements</a>
                          </li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="contact.html">Contact</a>
                  </li>
                </ul>
              </div>

              <div class="col-lg-5">
                <ul class="nav navbar-nav navbar-right right_nav pull-right">
                  <hr>
                  <li class="nav-item">
                    <a href="#" class="icons">
                      <i class="fa fa-search" aria-hidden="true"></i>
                    </a>
                  </li>

                  <hr>

                  <li class="nav-item">
                    <a href="#" class="icons">
                      <i class="fa fa-user" aria-hidden="true"></i>
                    </a>
                  </li>

                  <hr>

                  <li class="nav-item">
                    <a href="#" class="icons">
                      <i class="fa fa-heart-o" aria-hidden="true"></i>
                    </a>
                  </li>

                  <hr>

                  <li class="nav-item">
                    <a href="cart-show" class="icons">
                      <i class="lnr lnr lnr-cart"></i>
                    </a>
                  </li>

                  <hr>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </nav>
    </div>
  </header>

<br><br><br><br><br>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
