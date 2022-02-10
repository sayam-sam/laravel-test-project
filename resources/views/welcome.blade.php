<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Axiever</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('material/home') }}/img/logo1.png" rel="icon">
  <link href="{{ asset('material/home') }}/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('material/home') }}/vendor/aos/aos.css" rel="stylesheet">
  <link href="{{ asset('material/home') }}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{ asset('material/home') }}/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{ asset('material/home') }}/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="{{ asset('material/home') }}/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="{{ asset('material/home') }}/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="{{ asset('material/home') }}/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('material/home') }}/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Vesperr - v4.7.0
  * Template URL: https://bootstrapmade.com/vesperr-free-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <!-- <h1><a href="/">Name</a></h1> -->
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="/"><img src="{{ asset('material/home') }}/img/logo1.png" alt="" class="img-fluid" ></a>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          
         
          @if (Route::has('login'))
        
          @auth
          <li><a class="getstarted scrollto" href="{{ url('/dashboard') }}">Dashboard</a></li>
                       
                    @else
                    <li><a class="getstarted scrollto" href="{{ route('login') }}">Login</a></li>
                        

                      @if (Route::has('register'))
                        <li><a href="{{ route('register') }}" class="getstarted scrollto" >Register</a></li>    
         
                        @endif 
                    @endauth
          @endif
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">Grow your business with Vesperr</h1>
          <h2 data-aos="fade-up" data-aos-delay="400">We are team of talented designers making websites with Bootstrap</h2>
          <div data-aos="fade-up" data-aos-delay="800">
            <a href="http://nikkynavvya.tech/contact.php" class="btn-get-started scrollto">Contact</a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-delay="200">
          <img src="{{ asset('material/home') }}/img/hero-img.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

   

  </main><!-- End #main -->



  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('material/home') }}/vendor/purecounter/purecounter.js"></script>
  <script src="{{ asset('material/home') }}/vendor/aos/aos.js"></script>
  <script src="{{ asset('material/home') }}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('material/home') }}/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="{{ asset('material/home') }}/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="{{ asset('material/home') }}/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="{{ asset('material/home') }}/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('material/home') }}/js/main.js"></script>

</body>

</html>