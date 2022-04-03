<!doctype html>
<html class="no-js"  lang="en">
   <head>
      <!-- META DATA -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

      <!--font-family-->
      <link href="https://fonts.googleapis.com/css?family=Rufina:400,700" rel="stylesheet" />

      <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet" />

      <!-- TITLE OF SITE -->
      <title>@yield('title')</title>

      <!-- favicon img -->
      <link rel="shortcut icon" type="image/icon" href="{{asset('logo/favicon.png')}}"/>

      <!--font-awesome.min.css-->
      <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}" />

      <!--animate.css-->
      <link rel="stylesheet" href="{{ asset('css/animate.css') }}" />

      <!--hover.css-->
      <link rel="stylesheet" href="{{ asset('css/hover-min.css') }}">

      <!--datepicker.css-->
      <link rel="stylesheet"  href="{{ asset('css/datepicker.css') }}" >

      <!--owl.carousel.css-->
      <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
      <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}"/>

      <!-- range css-->
      <link rel="stylesheet" href="{{ asset('css/jquery-ui.min.css') }}" />

      <!--bootstrap.min.css-->
      <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />

      <!-- bootsnav -->
      <link rel="stylesheet" href="{{ asset('css/bootsnav.css') }}"/>

      <!--style.css-->
      <link rel="stylesheet" href="{{ asset('css/style.css') }}" />

      <!--responsive.css-->
      <link rel="stylesheet" href="{{ asset('css/responsive.css') }}" />

      <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->

   </head>

   <body>
      <!--[if lte IE 9]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade
         your browser</a> to improve your experience and security.</p>
      <![endif]-->

      <!-- main-menu Start -->
      <!-- main-menu End -->


      @yield("contents")


      <script src="{{asset('js/jquery.js')}}"></script>
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <!--modernizr.min.js-->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
      <!--bootstrap.min.js-->
      <script src="{{asset('js/bootstrap.min.js')}}"></script>
      <!-- bootsnav js -->
      <script src="{{asset('js/bootsnav.js')}}"></script>
      <!-- jquery.filterizr.min.js -->
      <script src="{{asset('js/jquery.filterizr.min.js')}}"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
      <!--jquery-ui.min.js-->
      <script src="{{asset('js/jquery-ui.min.js')}}"></script>
      <!-- counter js -->
      <script src="{{asset('js/jquery.counterup.min.js')}}"></script>
      <script src="{{asset('js/waypoints.min.js')}}"></script>
      <!--owl.carousel.js-->
      <script src="{{asset('js/owl.carousel.min.js')}}"></script>
      <!-- jquery.sticky.js -->
      <script src="{{asset('js/jquery.sticky.js')}}"></script>
      <!--datepicker.js-->
      <script src="{{asset('js/datepicker.js')}}"></script>
      <!--Custom JS-->
      <script src="{{asset('js/custom.js')}}"></script>

      @yield("scripts")
   </body>
</html>
