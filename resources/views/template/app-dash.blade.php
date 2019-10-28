<!--

=========================================================
* Argon Dashboard - v1.1.0
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-dashboard
* Copyright 2019 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md)

* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>
    Enews - Ogma
  </title>
  <!-- Favicon -->
  {{-- <link href="./assets/img/brand/favicon.png" rel="icon" type="image/png"> --}}
  <link href="{{ asset('img/brand/favicon.png') }}" rel="ico" type="image/png">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="{{ asset('js/plugins/nucleo/css/nucleo.css') }}" rel="stylesheet">

  <link href="{{ asset('js/plugins/@fortawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet">

  <!-- CSS Files -->
  <link href="{{ asset('css/argon-dashboard.css?v=1.1.0') }}" rel="stylesheet">

</head>

<body class="">
    <!-- sidebar -->
    @component('template.sidebar')
    @endcomponent
  <div class="main-content">
    <!-- Navbar -->
    @component('template.navbar')
    @endcomponent
    <!-- End Navbar -->
    <!-- Header -->
    @component('template.header-dash')
    @endcomponent

    <div class="container-fluid mt--7">
        @hasSection('content')
            @yield('content')
        @endif

        <!-- Footer -->
        @component('template.footer')
        @endcomponent

    </div>
  </div>
  <!--   Core   -->
  <script src="{{ asset('js/plugins/jquery/dist/jquery.min.js') }}"></script>

  <script src="{{ asset('js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>

  <!--   Optional JS   -->
  <script src="{{ asset('js/plugins/chart.js/dist/Chart.min.js') }}"></script>

  <script src="{{ asset('js/plugins/chart.js/dist/Chart.extension.js') }}"></script>

  {{-- <!--   Argon JS   -->
  <script src="./assets/js/argon-dashboard.min.js?v=1.1.0"></script>
  <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
  <script>
    window.TrackJS &&
      TrackJS.install({
        token: "ee6fab19c5a04ac1a32a645abde4613a",
        application: "argon-dashboard-free"
      });
  </script> --}}
</body>

</html>
