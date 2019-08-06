<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from technext.github.io/welfare/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Jul 2019 21:11:04 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <title>@yield('title') | {{ config('app.name', "Pygmee") }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Dosis:200,300,400,500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Overpass:300,400,400i,600,700" rel="stylesheet">

    @include('includes.front.styles')
    @yield('styles')
    <link rel="stylesheet" href="/front/css/style.css">
  </head>
  <body>

  @include('includes.front.nav')
    <!-- END nav -->

    @yield('content')

    @include('includes.front.footer')



  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen">
      <svg class="circular" width="48px" height="48px">
          <circle class="path-bg" cx="24" cy="24" r="22" fill="none"
            stroke-width="4" stroke="#eeeeee"/>
            <circle class="path" cx="24" cy="24" r="22" fill="none"
            stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/>
        </svg>
    </div>


  @include('includes.front.scripts')
  @yield('scripts')
  @include('includes.front.notification')
  <script src="/front/js/main.js"></script>

  </body>

<!-- Mirrored from technext.github.io/welfare/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Jul 2019 21:11:22 GMT -->
</html>
