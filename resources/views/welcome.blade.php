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
                <!-- <input type="email" placeholder="Enter Email... "> -->
                <button type="submit" class="button_1"><a href="https://www.instagram.com/iamemmanuelabah/following/"></a> Instagram</button>
                <button type="submit" class="button_1"> <a href="https://web.facebook.com/emmanuelaba79/?ref=page_internal"></a> Facebook</button>
                <button type="submit" class="button_1">Youtube</button>
                <button type="submit" class="button_1"><a href="href="https://twitter.com/emmanuelabah79"></a> Twitter</button>


            </form>
        </div>
    </section>
   {{--  <footer>
        <p>East Web Design Inc, Copyright &copy; 2019</p>
    </footer> --}}
</body>
</html>

@section('scripts')
    <script src="https://js.paystack.co/v1/inline.js"></script>
    <script type="text/javascript">
      fetchLocation();

        function payWithPaystack(){
            var customer   = $("#customer_name").val();
            var phone      = $("#customer_phone").val();
            var email      = $("#customer_email").val();
            var car_price  = $("#car_price").val();
            var amount     = parseInt(car_price) * 100;

            var handler = PaystackPop.setup({
             key: '{{ env("PAYSTACK_PUBLIC_KEY") }}',
             email: email,
             amount: amount,
             currency: "NGN",
             ref: 'RHEZONX'+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
             metadata: {
                custom_fields: [
                   {
                       display_name: "Mobile Number",
                       variable_name: "mobile_number",
                       value: phone
                   }
                ]
             },
                callback: function(response){
                    // alert('success. transaction ref is ' + response.reference);
                    var reference = response.reference;
                    saveOrderRequest(reference);
                },
                onClose: function(){
                    alert('window closed');
                }
            });
       handler.openIframe();
     }

        function saveOrderRequest(reference) {
            var _token = '{{ csrf_token() }}';
            var customer   = $("#customer_name").val();
            var phone      = $("#customer_phone").val();
            var email      = $("#customer_email").val();
            var location = $("#customer_location").val();
            var destination = $("#customer_destination").val();
            var pickup = $("#customer_pickup").val();
            var dropoff = $("#customer_dropoff").val();
            var duration = $("#customer_duration").val();
            var members = $("#customer_members").val();
            var car_id     = $("#car_id").val();

            var query = {_token, amount, reference, customer, phone, email, car_id, location, destination, pickup, dropoff, duration, members}

            fetch(`{{url('book/order')}}`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify(query)
            }).then(r => {
                return r.json();
            }).then(results => {
                console.log(results);
            }).catch(err => {
                console.log(err);
            });
        }

        $(".travel-btn").click((e) => {
            e.preventDefault();
            window.location.href = "{{url('search-rides')}}";
        });

        function showBookNowModal(car) {
            $("#car_id").val(car.id);
            $("#car_model").val(car.model);
            $("#car_year").val(car.year);
            $("#car_price").val(car.price);

            $("#image-section").html(`
                <img src="${car.screenshot.document_url}" class="rounded" />
            `);

            $("#contents-section").html(`
                <br />
            `);

            $("#book-now-modal").modal({
                backdrop: false
            });
        }

        function fetchLocation() {
            fetch('{{url("database/location.json")}}').then(r => r.json()).then(data => {
                $("#customer_location").html('');
                $("#customer_location").append(`
                    <option value="">-- select state --</option>
                `);
                $.each(data, function(index, val) {
                    /* iterate through array or object */
                    $("#customer_location").append(`
                        <option value="${val.name}">${val.name}</option>
                    `);
                });

                $("#customer_destination").html('');
                $("#customer_destination").append(`
                    <option value="">-- select state --</option>
                `);
                $.each(data, function(index, val) {
                    /* iterate through array or object */
                    $("#customer_destination").append(`
                        <option value="${val.name}">${val.name}</option>
                    `);
                });

                $("#search_location").html('');
                $("#search_location").append(`
                    <option value="">-- select state --</option>
                `);
                $.each(data, function(index, val) {
                    /* iterate through array or object */
                    $("#search_location").append(`
                        <option value="${val.name}">${val.name}</option>
                    `);
                });

                $("#search_destination").html('');
                $("#search_destination").append(`
                    <option value="">-- select state --</option>
                `);
                $.each(data, function(index, val) {
                    /* iterate through array or object */
                    $("#search_destination").append(`
                        <option value="${val.name}">${val.name}</option>
                    `);
                });


                $("#search_location_2").html('');
                $("#search_location_2").append(`
                    <option value="">-- select state --</option>
                `);
                $.each(data, function(index, val) {
                    /* iterate through array or object */
                    $("#search_location_2").append(`
                        <option value="${val.name}">${val.name}</option>
                    `);
                });

                $("#search_destination_2").html('');
                $("#search_destination_2").append(`
                    <option value="">-- select state --</option>
                `);
                $.each(data, function(index, val) {
                    /* iterate through array or object */
                    $("#search_destination_2").append(`
                        <option value="${val.name}">${val.name}</option>
                    `);
                });



            }).catch(err => {
              console.log(err);
            });
        }

        function showLocalGovt(){
            var state = $("#state").val();
            // console.log(state);
            $.getJSON("/database/location.json", function(data){
                $.each(data, function(index, val) {
                    if(state == val.name){
                        $("#lga").html("");
                        $.each(val.lga, function(index, val){
                            $("#lga").append(`
                                <option value="${val}">${val}</option>
                            `);
                        })
                    }
                });
            });
        }
    </script>
@endsection
