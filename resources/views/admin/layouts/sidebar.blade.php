<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>{{"Dashboard"}} </title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('material/admin') }}/img/favicon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('material/admin') }}/css/bootstrap.min.css">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{ asset('material/admin') }}/css/font-awesome.min.css">

    <!-- Feathericon CSS -->
    <link rel="stylesheet" href="{{ asset('material/admin') }}/css/feathericon.min.css">

    <link rel="stylesheet" href="{{ asset('material/admin') }}/plugins/morris/morris.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('material/admin') }}/css/style.css">
<style>

.user-menu.nav > li > a > i {
    
    color: black;
}
.user-menu.nav > li > a {
    color: black !important;
    }
 
</style>

</head>

<body class="{{ $class ?? '' }}">
         @auth()
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
     
        @endauth 

    <!-- Main Wrapper -->
    <div class="main-wrapper">

        <!-- Header -->
        <div class="header">

            <!-- Logo -->
            <div class="header-left">
                <a href="/"class="logo">
                    <img src="{{ asset('material/admin') }}/img/logo.png" alt="Logo" style="width:98px;">
                </a>
                <a href="/" class="logo logo-small">
                    <img src="{{ asset('material/admin') }}/img/logo.png" alt="Logo" width="30" height="30">
                </a>
            </div>
            <!-- /Logo -->

            <a href="javascript:void(0);" id="toggle_btn">
                <i class="fe fe-text-align-left"></i>
            </a>

            <!-- <div class="top-nav-search">
                <form>
                    <input type="text" class="form-control" placeholder="Search here">
                    <button class="btn" type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div> -->

            <!-- Mobile Menu Toggle -->
            <a class="mobile_btn" id="mobile_btn">
                <i class="fa fa-bars"></i>
            </a>
            <!-- /Mobile Menu Toggle -->

            <!-- Header Right Menu -->
            <ul class="nav user-menu">
        <!-- Order -->
        <li class="nav-item dropdown noti-dropdown">
                    <a href="/" class="dropdown-toggle nav-link" >
                        <i class="fa fa-home text-primary"></i> 
                    </a>
                    </li>
             
                 

                <!-- User Menu -->
                <li class="nav-item dropdown has-arrow">
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
      
                        <span class="user-img"><h6>Hello <?php  $ar=explode(" ",auth()->user()->name); echo $ar[0];  ?>!</h6></span>
                    </a>
                    <div class="dropdown-menu">
                        <div class="user-header">
                           
                            <div class="user-text">
                            <h6>Hello <?php  $ar=explode(" ",auth()->user()->name); echo $ar[0];  ?>!</h6>
                         
                                <p class="text-muted mb-0">Administrator</p>
                           
                            </div>
                        </div>
                        <!-- <a class="dropdown-item" href=" ">My Profile</a> -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <a class="dropdown-item" :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
</a>
                        </form>
                      
                    </div>
                </li>
                <!-- /User Menu -->

            </ul>
            <!-- /Header Right Menu -->

        </div>
        <!-- /Header -->

               <!-- Sidebar -->
        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>

                  
                        <li class="item">
                            <a href="{{ route('dashboard')}}"><i class="fa fa-home" aria-hidden="true"></i><span>Dashboard</span></a>
                        </li>
                       
                    
                           
                            <li class="item">
                                <a href="{{ route('records.list')}}"><i class="fa fa-users" aria-hidden="true"></i> <span>{{ __('Record') }}   </a>
                            </li>
                         
                           
                 
                   
            
                       
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Sidebar -->
    <!-- jQuery -->
    <script src="{{ asset('material/admin') }}/js/jquery-3.2.1.min.js"></script>

    <!-- Bootstrap Core JS -->
    <script src="{{ asset('material/admin') }}/js/popper.min.js"></script>
    <script src="{{ asset('material/admin') }}/js/bootstrap.min.js"></script>

    <!-- Slimscroll JS -->
    <script src="{{ asset('material/admin') }}/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <script src="{{ asset('material/admin') }}/plugins/raphael/raphael.min.js"></script>
    <script src="{{ asset('material/admin') }}/plugins/morris/morris.min.js"></script>
    <script src="{{ asset('material/admin') }}/js/chart.morris.js"></script>

    <!-- Custom JS -->
    <script src="{{ asset('material/admin') }}/js/script.js"></script>
        @stack('js')
        <link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
        <script>
        $(document).ready(function(){
            $("#myInput").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#myTable tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
            });
        </script>
        <script >
         
         $(function()
         {
          $(".select2").select2({ });
        
         });
         $(function()
         {
            $(".select3").select2({ });
         });
         $(function()
         {
          $(".select1").select2({ 
          });
          
        
         });
        
 </script>
</body>

</html>