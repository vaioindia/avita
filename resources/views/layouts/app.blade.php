<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <link rel="apple-touch-icon" sizes="16x16" href="{{ asset('assets/img/apple-icon.png') }}">
      <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/img/favicon.png ') }}">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">
      <!-- FONT AWESOME -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.css') }}">
      <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/product-imago.css') }}">
      <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
      <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/globel.css') }}">
      @yield('css')
      {{-- <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/liber-v-gold.css') }}"> --}}
      {{-- <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/product-liber.css') }}"> --}}
      {{-- <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/product-magus.css') }}"> --}}

      <script type="text/javascript" src="assets/js/scrollMagic.min.js"></script>

      <title>AVITA | AVITA India Official Website</title>
      <script defer type="text/javascript">
    window.addEventListener('load',
     function() {
          $('.preloader').fadeOut('slow');
  },false);

</script>
   </head>
   <body>
      <!-- Header Nabar -->
        @include('partials.header')
      <!-- ./Header -->
      <!-- Content Start -->

<!-- Banner Section -->

<!-- Banner Section -->
@yield('content')
<!-- Card Section -->

<!-- card section -->

<!-- Content END -->

<!-- newsletter subscription  -->


<!-- newsletter subscription  -->

<!-- Footer -->
    @include('partials.footer')
<!-- ./Footer -->



      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->

      <script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.slim.min.js"></script>
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
      <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
      @yield('script')
      <script type="text/javascript" src="{{ asset('assets/js/demo.js') }}"></script>
      <script type="text/javascript" src="{{ asset('assets/js/ga.js') }}"></script>
      <script type="text/javascript" src="{{ asset('assets/js/imago.js') }}"></script>
      <script type="text/javascript" src="{{ asset('assets/js/jquery.min.js') }}"></script>
      {{-- <script type="text/javascript" src="{{ asset('assets/js/liber-v-gold.js') }}"></script> --}}
      {{-- <script type="text/javascript" src="{{ asset('assets/js/liber.js') }}"></script> --}}
      <script type="text/javascript" src="{{ asset('assets/js/magus.js') }}"></script>
      <script type="text/javascript" src="{{ asset('assets/js/pura.js') }}"></script>
      <script type="text/javascript" src="{{ asset('assets/js/vendor.js') }}"></script>
      <script type="text/javascript" src="{{ asset('assets/js/wow.min.js') }}"></script>

   </body>
</html>
