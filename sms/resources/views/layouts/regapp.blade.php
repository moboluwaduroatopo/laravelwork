<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="icon"  href="img/back.jpg">
    <title>{{ config('app.name', 'Laravel') }}</title>
<link rel="stylesheet"  href="{{ asset('css/bootstrap.min.css') }}">
 <link rel="stylesheet" type="text/css" href="{{ asset('css/style.min.css') }}">

<link href="{{ asset('css/mdb.min.css') }}" rel="stylesheet">
    <!-- Fonts -->
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
   <style type="text/css">
    html,
    body,
    header,
    .carousel {
      height: 60vh;
    }

    @media (max-width: 740px) {

      html,
      body,
      header,
      .carousel {
        height: 100vh;
      }
    }

    @media (min-width: 800px) and (max-width: 850px) {

      html,
      body,
      header,
      .carousel {
        height: 100vh;
      }
    }

  </style>
</head>
 
<body>
 
  
<div class="container">
       @include('includes.messages')
     </div>
<main class="py-4">
            @yield('content')
        </main>
 
   <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
  <script src="{{ asset('js/popper.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('js/mdb.min.js') }}"></script>

  <script type="text/javascript">
    new WOW().init();
  </script>
</body>
</html>