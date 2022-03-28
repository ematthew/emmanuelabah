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

      <!-- footer-copyright start -->
      <footer  class="footer-copyright">
         <div class="container">
            <div class="footer-content">
               <div class="row">

                 {{--  <div class="col-sm-3">
                     <div class="single-footer-item">
                        <div class="footer-logo">
                           <a href="{{url('/')}}">
                              <img src="{{asset('logo/logo.png')}}">
                           </a>
                        </div>
                     </div><!--/.single-footer-item-->
                  </div><!--/.col--> --}}

                  <div class="col-sm-3">
                   <div class="single-footer-item">
                     <div class="col-sm-3">
                       <div class="single-footer-item">
                         <iframe width="250" height="300" src="http://instagram.com/p/qbq6fIJMVZ/embed" frameborder="1"></iframe>
                        </div><!--/.single-footer-txt-->
                     </div><!--/.single-footer-item-->
                     </div>
                 </div>

                 <div class="col-sm-3">
                   <div class="single-footer-item">
                     <div class="col-sm-3">
                       <div class="single-footer-item">
                         <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fweb.facebook.com%2Femmanuelaba79%2Fposts%2F2398784700243654&show_text=true&width=500" width="250" height="300" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                        </div><!--/.single-footer-txt-->
                     </div><!--/.single-footer-item-->
                     </div>
                 </div>

                   <div class="col-sm-3">
                   <div class="single-footer-item">
                     <div class="col-sm-3">
                       <div class="single-footer-item">
                         <iframe width="200" height="300" src="http://instagram.com/p/qbq6fIJMVZ/embed" frameborder="1"></iframe>
                        </div><!--/.single-footer-txt-->
                     </div><!--/.single-footer-item-->
                     </div>
                 </div>

                  <div class="col-sm-3">
                     <div class="single-footer-item text-center">
                        <h2 class="text-left">contacts</h2>
                        <div class="single-footer-txt text-left">
                           <p>+1 929-571-4175 ( text only) </p>
                           <p >Info@emmanuelabah.com</p>
                           <p>Long Island New York USA, </p>
                        </div><!--/.single-footer-txt-->
                     </div><!--/.single-footer-item-->
                  </div><!--/.col-->

               </div><!--/.row-->

            </div><!--/.footer-content-->
            <hr>
            <div class="foot-icons ">
               <ul class="footer-social-links list-inline list-unstyled">
                      <li><a href="https://web.facebook.com/emmanuelaba79" target="_blank" class="foot-icon-bg-1"><i class="fa fa-facebook"></i></a></li>
                      <li><a href="https://twitter.com/emmanuelabahh?t=Syjf-bDWzA6_OysJ27svyg&s=09" target="_blank" class="foot-icon-bg-2"><i class="fa fa-twitter"></i></a></li>
                      <li><a href="https://www.instagram.com/iamemmanuelabah/" target="_blank" class="foot-icon-bg-3"><i class="fa fa-instagram"></i></a></li>
               </ul>
               <p>&copy; {{ date("Y") }} <a href=""></a>. All Right Reserved</p>

              </div><!--/.foot-icons-->
            <div id="scroll-Top">
               <i class="fa fa-angle-double-up return-to-top" id="scroll-top" data-toggle="tooltip" data-placement="top" title="" data-original-title="Back to Top" aria-hidden="true"></i>
            </div><!--/.scroll-Top-->
         </div><!-- /.container-->
      </footer><!-- /.footer-copyright-->
      <!-- footer-copyright end -->

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
