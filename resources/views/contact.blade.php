<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Emmanuel Abah | Contact</title>
    <link rel="stylesheet" href="./css/style.css">
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
</head>
<body>
    <!--Header of the page-->
    <header>
        <div class="container">
            <div id="branding">
                <h1><span class="highlight">Emmanuel</span> Abah</h1>
            </div>
        </div>
        <nav>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/about">About</a></li>
                <li class="current"><a href="/contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <!--Newsletter-->
    <!-- <section id="newsletter">
        <div class="container">
            <h1>Subscribe To Our Newsletter</h1>
            <form>
                <input type="email" placeholder="Enter Email... ">
                <button type="submit" class="button_1">Subscribe</button>
            </form>
        </div>
    </section> -->

    <!--Section for boxes-->
    <section id="main">
        <div class="container">
          <article id="main-col">
            <h1 class="page-title">Emmanuel Abah Contact</h1>
            <ul id="services">
                <li>
                    <h3>Emmanuel Abah, singer songwriter / composer of urban gospel worship songs</h3>
                    <p>

                            Emmanuel Abah was chosen by God almighty before his birth to minister in songs to the glory of God almighty. 
                  Jesus Christ originally inspired me,and put the love for singing into my heart</p>
                    <p><!-- Pricing: <span>&#8358;</span>500 - <span>&#8358;</span>1,000 --></p>
                </li>
                <li>
                        <h3>You can follow us on our Social Media Handle</h3>
                        
                    </li>
                  <!--   <li>
                            <h3>Website Hosting</h3>
                            <p>East is one of the largest website hosting providers and powers millions of websites. Learn more about our secure and reliable hosting services today!</p>
                            <p>Pricing:<span>&#8358;</span>30 per month</p>
                        </li> -->

                        <li><a href="https://web.facebook.com/emmanuelaba79" target="_blank" class="foot-icon-bg-1"><i class="fa fa-facebook"> FACEBOOK</i></a> </li>
                      <li><a href="https://twitter.com/emmanuelabahh?t=Syjf-bDWzA6_OysJ27svyg&s=09" target="_blank" class="foot-icon-bg-2"><i class="fa fa-twitter">TWITTER PAGE</i></a></li>
                      <li><a href="https://www.instagram.com/iamemmanuelabah/" target="_blank" class="foot-icon-bg-3"><i class="fa fa-instagram">INSTAGRAM PAGE</i></a></li>
                         <li><a href="https://www.youtube.com/channel/UC2xey8b3dO6Uo7slbnqDhdw"><i class="fa fa-youtube">YOUTUBE PAGE</i></a></li>

            </ul>
          </article>

          <!--sidebar-->
          <aside id="sidebar">
                <div class="dark">
            <h3>Leave a Message</h3>
            <form  method="post" action="{{ route('contact.store') }}" class="quote">
                @csrf
                    <div>
                        <label>Name</label><br>
                        <input type="text" class="form-control {{ $errors->has('name') ? 'error' : '' }}" name="name" id="name">
                           <!-- Error -->
                            @if ($errors->has('name'))
                            <div class="error">
                                {{ $errors->first('name') }}
                            </div>
                            @endif
                    </div>
                    <div>
                        <label>Email</label><br>
                        <input type="email" class="form-control {{ $errors->has('email') ? 'error' : '' }}" name="email" id="email">
                            @if ($errors->has('email'))
                            <div class="error">
                                {{ $errors->first('email') }}
                            </div>
                            @endif
                    </div>

                     <div>
                        <label>Phone Number</label><br>
                        <input type="text" class="form-control {{ $errors->has('phone') ? 'error' : '' }}" name="phone" id="phone">
                            @if ($errors->has('phone'))
                            <div class="error">
                                {{ $errors->first('phone') }}
                            </div>
                            @endif
                    </div>

                     <div>
                        <label>Subject</label><br>
                         <input type="text" class="form-control {{ $errors->has('subject') ? 'error' : '' }}" name="subject"
                                id="subject">
                            @if ($errors->has('subject'))
                            <div class="error">
                                {{ $errors->first('subject') }}
                            </div>
                            @endif
                    </div>

                    <div>
                        <label>Message</label><br>
                        <textarea class="form-control {{ $errors->has('message') ? 'error' : '' }}" name="message" id="message"
                                rows="4"></textarea>
                            @if ($errors->has('message'))
                            <div class="error">
                                {{ $errors->first('message') }}
                            </div>
                            @endif
                    </div>
                    <button class="button_1" name="send" type="submit">Send</button>
              </form>
                </div>

               </div>
          </aside>
        </div>
    </section>
    <!-- <footer>
        <p>East Web Design, Copyright &copy; 2019</p>
    </footer> -->
</body>
</html>