
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Argon Dashboard - Free Dashboard for Bootstrap 4</title>
  <!-- Favicon -->
  {{-- <link rel="icon" href="{{ asset ('assets/img/brand/favicon.png')}}"> --}}
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="{{ asset ('assets/vendor/nucleo/css/nucleo.css')}}">
  <link rel="stylesheet" href="{{ asset ('assets/vendor/@fortawesome/fontawesome-free/css/all.min.css')}}">
  <!-- Argon CSS -->
  <link rel="stylesheet" href="{{ asset ('assets/css/argon.css?v=1.2.0')}}">
</head>

<body>
  <!-- Sidenav -->
  @include('include.nav')
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
   @include('include.nav-h')
    <!-- Header -->
    <!-- Header -->
    @include('include.header')
    <!-- Page content -->
    <div class="container-fluid mt--6">
      @yield('content')
      <!-- Footer -->
      @include('include.footer')
    </div>
  </div>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="{{ asset ('assets/vendor/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{ asset ('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset ('assets/vendor/js-cookie/js.cookie.js')}}"></script>
  <script src="{{ asset ('assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js')}}"></script>
  <script src="{{ asset ('assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js')}}"></script>
  <!-- Argon JS -->
  <script src="{{ asset ('assets/js/argon.js?v=1.2.0')}}"></script>
</body>

</html>