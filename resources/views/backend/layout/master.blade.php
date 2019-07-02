<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/dashboard.css')}}">

    <title>Sunshine | @yield('title')</title>
  </head>
  <body>

<!-- Navbar -->
@include('backend.layout.partials.navbar')
<!-- End Navbar -->

<!-- SideBar -->
@include('backend.layout.partials.sidebar')
<!-- End SideBar -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('vendor/popperjs/popper.min.js')}}"></script>
    <script src="{{asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    @yield('custom_script')
  </body>
</html>