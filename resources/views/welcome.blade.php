@extends('layouts.app')

@section('title')
  HOME|EMMAUNEL ABAH
@endsection

@section('contents')
   <!--about-us start -->
      <section id="home" class="about-us">
         <div class="container">
            <div class="about-us-content">
               <div class="row">
                  <div class="col-12">
                     <div class="single-about-us">
                        <div class="about-us-txt">
                           <h2>
                              {{-- WELCOME TO EMMANUELABAH.COM   --}}
                           </h2>
                        </div><!--/.about-us-txt-->
                     </div><!--/.single-about-us-->
                  </div><!--/.col-->
               </div><!--/.row-->
            </div><!--/.about-us-content-->
         </div><!--/.container-->
      </section><!--/.about-us-->
      <!--about-us end -->

      <!--discount-offer start-->




     <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HOME|EMMAUNEL ABAH</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <!--Header of the page-->
    <header>
        <div class="container">
            <div id="branding">
                <h1><span class="highlight">Emmanuel</span> Abah</h1>
            </div>
        </div>
        <nav id="nav">
            <ul>
                <li class="current"><a href="/">Home</a></li>
                <li><a href="/about">About</a></li>
                <li><a href="/contact">Contact</a></li>
            </ul>
        </nav>
    </header>
    <!---Section to put in the text-->
    <section id="showcase">
        <div class="container">
            <!-- <h1>Web Design That Makes You Isolated From Your Competitors</h1>
            <p>We strongly believe in delivering our work before the deadline. Client Satisfaction is our ultimate goal; hence, we aim to build a growing relationship with all our clients to help them as well as ourselves grow.</p> -->
        </div>
    </section>
    <!--Newsletter-->
    
    <!--Section for boxes-->
    <section id="boxes">
        <div class="container">
            <div class="box">
             
                <h3></h3>
                <iframe allow="autoplay *; encrypted-media *; fullscreen *" frameborder="0" height="450" style="width:100%;max-width:660px;overflow:hidden;background:transparent;" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-storage-access-by-user-activation allow-top-navigation-by-user-activation" src="https://embed.music.apple.com/us/album/jeus-reign-single/1316154470"></iframe>
            </div>
            <div class="box">
                    {{-- <img src="./img/logo_css.png" alt=""> --}}
                    <h3></h3>
                   <iframe id='AmazonMusicEmbedB077R6LXGR' src='https://soundcloud.com/havilhills-properties-ltd/jesus-reing-emmanelabah1?utm_source=clipboard&utm_medium=text&utm_campaign=social_sharing#t=0:05' width='100%' height='450px' style='border:1px solid rgba(0, 0, 0, 0.12);max-width:'>
                   </iframe>
                </div>
                <div class="box">
                        {{-- <img src="./img/logo_brush.png" alt=""> --}}
                        <h3></h3>
                        <iframe id='AmazonMusicEmbedB077R5BFDC' src='https://music.amazon.com/embed/B077R5BFDC/?id=nm0hXsvouM&marketplaceId=ATVPDKIKX0DER&musicTerritory=US' width='100%' height='450px' style='border:1px solid rgba(0, 0, 0, 0.12);max-width:'></iframe>
                    </div>
        </div>
    </section>

    <section id="newsletter">
        <div class="container">
            <h1>Subscribe To Our Channel</h1>
            <form>
                {{-- <input type="email" placeholder="Enter Email... "> --}}
                <a href="https://www.instagram.com/iamemmanuelabah/" target="_blank" class="foot-icon-bg-3"><span class="mat">INSTAGRAM</span></a>

                <a href="https://twitter.com/emmanuelabahh?t=Syjf-bDWzA6_OysJ27svyg&s=09" target="_blank" class="foot-icon-bg-2"><span class="mat">TWITTER</span></a>
                <a href="https://web.facebook.com/emmanuelaba79" target="_blank" class="foot-icon-bg-1"><span class="mat">FACEBOOK</span></a>
                <a href="https://web.facebook.com/emmanuelaba79" target="_blank" class="foot-icon-bg-1"><span class="mat">YOUTUBE</span></a>



            </form>
        </div>

        <footer>
            <h2>CONTACT</h2>
            <p>+1 929-571-4175 ( text only) <br> Info@emmanuelabah.com <br>Long Island New York USA, </p>
                      </li>
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
        </footer>
    </section>

</body>
</html>


@endsection
