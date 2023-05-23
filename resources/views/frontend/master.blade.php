<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>HR Management System - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ url('frontend/assetss/img/favicon.png') }}" rel="icon">
  <link href="{{ url('frontend/assetss/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ url('frontend/assetss/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
  <link href="{{ url('frontend/assetss/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ url('frontend/assetss/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ url('frontend/assetss/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ url('frontend/assetss/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ url('frontend/assetss/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ url('frontend/assetss/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ url('frontend/assetss/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ url('frontend/assetss/css/style.css') }}" rel="stylesheet">

@include('frontend.fixed.header')
@include('frontend.fixed.slider')

@yield('main')
  <main id="main">



@include('frontend.fixed.clients')

  </main>
  <!-- End #main -->
@include('frontend.fixed.footer')

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ url('frontend/assetss/vendor/aos/aos.js') }}"></script>
  <script src="{{ url('frontend/assetss/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ url('frontend/assetss/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ url('frontend/assetss/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ url('frontend/assetss/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ url('frontend/assetss/vendor/waypoints/noframework.waypoints.js') }}"></script>
  <script src="{{ url('frontend/assetss/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ url('frontend/assetss/js/main.js') }}"></script>

</body>

</html>
