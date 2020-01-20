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
<!-- MDBootstrap Datatables  -->

<link href="{{ asset('css/addons/datatables.min.css') }}" rel="stylesheet">
    <!-- Fonts -->
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
 <link rel="stylesheet" href="style.css">
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
table.dataTable thead .sorting:after,
table.dataTable thead .sorting:before,
table.dataTable thead .sorting_asc:after,
table.dataTable thead .sorting_asc:before,
table.dataTable thead .sorting_asc_disabled:after,
table.dataTable thead .sorting_asc_disabled:before,
table.dataTable thead .sorting_desc:after,
table.dataTable thead .sorting_desc:before,
table.dataTable thead .sorting_desc_disabled:after,
table.dataTable thead .sorting_desc_disabled:before {
  bottom: .5em;
}
/* Customize the label (the container) */

  </style>
</head>
 
<body>
 
<div class="wrapper">
    <!-- Sidebar  -->
    <nav id="sidebar">
        <div class="sidebar-header">
            <h3>SMS</h3>
        </div>

        <ul class="list-unstyled components">
            <p> {{ Auth::user()->role }}</p>
            <li class="active">
                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Register</a>
                <ul class="collapse list-unstyled" id="homeSubmenu">
                    <li >
                        <a  href="{{ route('register') }}">{{ __('AdminReg') }}</a>
                    </li>
                    <li >
                        <a  href="/teacherreg">{{ __('TeacherReg') }}</a>
                    </li>
                    <li >
                        <a  href="/create">{{ __('StudentReg') }}</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="/userlist">Userlist</a>
            </li>
            
            <li>
                <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Course</a>
                <ul class="collapse list-unstyled" id="pageSubmenu">
                   <li>
                <a href="/addcourse">Add Course</a>
            </li>
                    <li>
                        <a href="courselist">Course list </a>
                    </li>
                    <!-- <li>
                        <a href="#">Page 2</a>
                    </li>
                    <li>
                        <a href="#">Page 3</a>
                    </li> -->
                </ul>
            </li>
               <li>
                <a href="#pageSubmenu1" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Grade</a>
                <ul class="collapse list-unstyled" id="pageSubmenu1">
                   <li>
                <a href="grade">Add Grade</a>
            </li>
                    <li>
                        <a href="gradelist">Grade list </a>
                    </li>
                    <!-- <li>
                        <a href="#">Page 2</a>
                    </li>
                    <li>
                        <a href="#">Page 3</a>
                    </li> -->
                </ul>
            </li>
            <li>
                <a href="/resultshow">Student Result</a>
            </li>
            <li>
                <a href=""></a>
            </li>
        </ul>

        <ul class="list-unstyled CTAs">
            <li>
                <a href="https://bootstrapious.com/tutorial/files/sidebar.zip" class="download">Download source</a>
            </li>
            <li>
                <a href="https://bootstrapious.com/p/bootstrap-sidebar" class="article">Back to article</a>
            </li>
        </ul>
    </nav>

    <!-- Page Content  -->
    <div id="content">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">

                <button type="button" id="sidebarCollapse" class="btn btn-info">
                    <i class="fas fa-align-left"></i>
                    {{-- <span>Click</span> --}}
                </button>
                {{-- <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-align-justify"></i>
                </button> --}}
                @guest
               <!--  <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li> -->
                @if (Route::has('login'))
                     <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @endif
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="position:relation;padding-left:50px">
                        <img src="/upload/uploads/{{Auth::user()->file}}" style="width: 35px;height: 35px;position:absolute;top:10px;left:10px;border-radius: 50%">
                      <h3>{{ Auth::user()->name }}</h3> <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                      
                        <a class="dropdown-item" href="adminprofile">{{ __('Profile') }}</a>
                    
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
                {{-- <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="nav navbar-nav ml-auto">
                        
                     
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
                                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="position:relation;padding-left:50px">
                                                <img src="/upload/uploads/{{Auth::user()->file}}" style="width: 35px;height: 35px;position:absolute;top:10px;left:10px;border-radius: 50%">
                                              <h3>{{ Auth::user()->name }}</h3> <span class="caret"></span>
                                            </a>
            
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                              
                                                <a class="dropdown-item" href="profile">{{ __('Profile') }}</a>
                                            
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
                </div> --}}
            </div>
        </nav>

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
<!-- MDBootstrap Datatables  -->
<script src="{{ asset('js/addons/datatables.min.js') }}"></script>

 <script type="text/javascript">
          $(document).ready(function () {
$('#dtBasicExample').DataTable();

$('.dataTables_length').addClass('bs-select');
});
       </script>
 <script>

        $(document).ready(function(){
               $('#search').keyup(function(){
            // alert();
               var value = $(this).val().toLowerCase();
               $('#contactTable tr').filter(function(){
                //alert();
                   $(this).toggle($(this).text().toLowerCase().indexOf(value)> -1)
               })
                   });
               });

       </script> 
      
<script type="text/javascript">
  $(document).ready(function () {
      $('#sidebarCollapse').on('click', function () {
          $('#sidebar').toggleClass('active');
      });
  });
</script>
<script type="text/javascript">
  new WOW().init();
 
</script>

</body>
</html>