<!DOCTYPE html>
<html lang="en">
<head>
    <meta property="fb:app_id" content="1567390816981872" />
<meta property="og:title" content="	Database Analytics for Advertisements"/>
<meta property="og:type" content="website"/>
<meta property="og:url" content="https://adsionary.com/"/>
<meta property="og:image" content="https://adsionary.s3.us-east-2.amazonaws.com/Adsionary/dataimage/1608223773.jpg"/>
<meta property="og:description" content="Database Analytics for Advertisements"/>
    <!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '387119268900181');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=387119268900181&ev=PageView&noscript=1"
/></noscript>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="">

    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">


    {{-- <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
	<meta property="og:site_name" content="adsionary" /> <!-- website name -->
	<meta property="og:site" content="www.adsionary.com/home" /> <!-- website link -->
	<meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
	<meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
	<meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
	<meta property="og:url" content="" /> <!-- where do you want your post to link to -->
	<meta property="og:type" content="article" /> --}}

    <!-- Website Title -->
    <title>Database Analytics for Advertisements</title>
    
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700&display=swap&subset=latin-ext" rel="stylesheet">
    	{{-- <link href="{{ asset('css/fontmaster.css') }}" rel="stylesheet"> --}}

    <link href="css/landing-template/bootstrap.css" rel="stylesheet">
    {{-- <link href="css/landing-template/fontawesome-all.css" rel="stylesheet"> --}}
    	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link href="css/landing-template/swiper.css" rel="stylesheet">
	<link href="css/landing-template/magnific-popup.css" rel="stylesheet">
	<link href="css/landing-template/styles.css" rel="stylesheet">
	
	<!-- Favicon  -->
	<link rel="shortcut icon" href="/vouchtab.png">
</head>
<body data-spy="scroll" data-target=".fixed-top">

    
    <!-- Preloader -->
	<div class="spinner-wrapper">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <!-- end of preloader -->
    

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
        <div class="container">

            <!-- Text Logo - Use this if you don't have a graphic logo -->
            <a class="navbar-brand logo-text page-scroll" style="    font-family: 'Lobster', cursive;" href="{{ route('register') }}">Adsionary</a>

            <!-- Image Logo -->
            {{-- <a class="navbar-brand logo-image" href="index.html"><img src="images/logo.svg" alt="alternative"></a>  --}}
            
            <!-- Mobile Menu Toggle Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-awesome fas fa-bars"></span>
                <span class="navbar-toggler-awesome fas fa-times"></span>
            </button>
            <!-- end of mobile menu toggle button -->

            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href=" {{route('dashboard')}}">Dashboard <span class="sr-only">(current)</span></a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link page-scroll" href="#features">FEATURES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#details">DETAILS</a>
                    </li> --}}

             
{{-- 
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#pricing">PRICING</a>
                    </li> --}}
                </ul>
                   <span class="nav-item">
                    <a class="btn-outline-sm" href="{{ route('login') }}">REGISTER</a>
                </span>
                <span class="nav-item">
                    <a class="btn-outline-sm" href="{{ route('login') }}">LOG IN</a>
                </span>
            </div>
        </div> <!-- end of container -->
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->


    <!-- Header -->
    <header id="header" class="header">
        <div class="header-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-xl-5"> 
                        <div class="text-container">
                            <h1 style="font-size: 3rem">Improve your Business Advertisement conversion rate</h1>
                            {{-- <p class="p-large">Subscription base marketplace for online businesses to help earn extra income and expand</p> --}}
                            <p class="p-large">The software tool that takes data from thousands of businesses and finds the best metrics to improve your business conversion rate using data.  <br> <b> All yours for FREE.</b>  </p>
                            <a class="btn-solid-lg page-scroll" href="{{route('register')}}">SIGN UP IS FREE</a>
                             <a class="btn-solid-lg page-scroll" href="{{route('login.google')}}" style="margin-top: 10px;">Sign in with Google</a>

                        </div> <!-- end of text-container -->
                    </div> <!-- end of col -->
                    <div class="col-lg-6 col-xl-7">
                        <div class="image-container">
                            <div class="img-wrapper">
                                <img class="img-fluid" src="images/adsionarytb.png" alt="alternative">
                            </div> <!-- end of img-wrapper -->
                        </div> <!-- end of image-container -->
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of header-content -->
    </header> <!-- end of header -->
    <svg class="header-frame" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" viewBox="0 0 1920 310"><defs><style>.cls-1{fill:#5161CE;}</style></defs><title>header-frame</title><path class="cls-1" d="M0,283.054c22.75,12.98,53.1,15.2,70.635,14.808,92.115-2.077,238.3-79.9,354.895-79.938,59.97-.019,106.17,18.059,141.58,34,47.778,21.511,47.778,21.511,90,38.938,28.418,11.731,85.344,26.169,152.992,17.971,68.127-8.255,115.933-34.963,166.492-67.393,37.467-24.032,148.6-112.008,171.753-127.963,27.951-19.26,87.771-81.155,180.71-89.341,72.016-6.343,105.479,12.388,157.434,35.467,69.73,30.976,168.93,92.28,256.514,89.405,100.992-3.315,140.276-41.7,177-64.9V0.24H0V283.054Z"/></svg>
    <!-- end of header -->





    <!-- Description -->
    <div class="cards-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    {{-- <div class="above-heading">Marketplace</div>
                    <h2 class="h2-heading">Marketplace designed for businesses to interact with their customers.</h2> --}}
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">

                    <!-- Card -->
                    <div class="card">
                        <div class="card-image">
                            <img class="img-fluid" src="images/description-1.png" alt="alternative">
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Targeting Audience</h4>
                            <p>We provide direct assistance with finding your industry target audience making advertising much easier. </p>
                            {{-- <p>Sign up your business, set your subscription prices for your customers.</p> --}}
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <div class="card-image">
                            <img class="img-fluid" src="images/description-2.png" alt="alternative">
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Advertisement Assistance</h4>
                            <p>From the Data we collected we put together the best price range that will help increase <b> conversions rate By 40%.</b></p>
                            {{-- <p>Once registered you can create a subscription for your business and create subscriber only deals for your customers.</p> --}}
                            {{-- <p>Create a subscription plan for your business that customers can subscribe to. You can give your customer deals on products.</p> --}}
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <div class="card-image">
                            <img class="img-fluid" src="images/description-3.png" alt="alternative">
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Tool is Free to Use</h4>
                            {{-- <p>You can track the number of clicks for each deal that you post on the marketplace.</p> --}}
                            <p>Adsionary is <b> Free to Use </b> tool our goal is to help business owners that struggle with advertising learn more about there industry. </p>
                        </div>
                    </div>
                    <!-- end of card -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of cards-1 -->
    <!-- end of description -->





    <!-- Details -->
    <div id="details" class="basic-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="text-container">
                        <h2> <b>The Problem:</b> Most Companies Struggle with Advertising</h2>
                        <p>Businesses spend hundreds of dollars a month struggling to put together the correct Advertisement and never achieve the level of success that they want to generate for there product.</p>
                        <ul class="list-unstyled li-space-lg">
                             <li class="media">
                                <div class="media-body"> <b>Businesses Struggle to find the correct Advertisement Method for there business. </b> </div>
                            </li>
                            <li class="media">
                                <div class="media-body"> <b>Also Businesses Struggle to find the correct platform to advertise there product on. </b> </div>
                            </li>   
                              <li class="media">
                                <div class="media-body"> <b>Most Businesses Struggle finding correct pricing point for there business. </b> </div>
                            </li>       
                        </ul>
                        {{-- <a class="btn-solid-reg page-scroll" href="">SIGN UP IS FREE</a> --}}
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6">
                    <div class="image-container">
                        <img class="img-fluid" src="images/loss.png" alt="alternative" style="margin-left: 73px;">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-1 -->
    <!-- end of details -->

    <!-- Details -->
    <div id="details" class="basic-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                        <div class="image-container">
                        <img class="img-fluid" src="images/landingpagead2.png" alt="alternative">
                    </div> <!-- end of image-container -->
                 
                </div> <!-- end of col -->
                <div class="col-lg-6">
                
                    <div class="text-container">
                        <h2> <b>The Solution:</b> We Target Areas Businesses Struggle The Most In.</h2>
                        <p>We collect Data from Advertisements from all industries to help create the perfect advertisement for your Business.</p>
                        <ul class="list-unstyled li-space-lg">
                             <li class="media">
                                <div class="media-body"> <b>Our tool will help you decide the Best Advertisement Methods for your industry. </b> </div>
                            </li>
                            <li class="media">
                                <div class="media-body"> <b>Our tool will help you decide the best industry to advertise you particular product in. </b> </div>
                            </li> 
                            
                            <li class="media">
                                <div class="media-body"> <b>We give you best price points ranges for your product according to data to increase conversion rate. </b> </div>
                            </li>     
                        </ul>
                        {{-- <a class="btn-solid-reg page-scroll" href="">SIGN UP IS FREE</a> --}}
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-1 -->
    <!-- end of details -->



    <!-- Video -->
    <div id="video" class="basic-2" style="background-color:  #f7edef">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                             <div class="text-container">
                        <h2> <b>Our Service is Completely FREE</b></h2>
                        <p></p>
                        <ul class="list-unstyled li-space-lg">
                             <li class="media">
                                <div class="media-body"> <b>Our purpose is to help businesses during these hard economic times. </b> </div>
                            </li>
                            <li class="media">
                                <div class="media-body"> <b>We add Data to our databases monthly and once you sign up we send monthly updates.</b> </div>
                            </li> 
                            
                            <li class="media">
                                <div class="media-body"> <b>Once you sign up you will recieve FULL ACCESS FOR FREE NO CREDIT CARD REQUIRED </b> </div>
                            </li>     

                            <li>
                                  <a class="btn-solid-lg page-scroll" href="{{ route('register') }}">SIGN UP IS FREE</a>
                            </li>

                             <li>
                             <a class="btn-solid-lg page-scroll" href="{{route('login.google')}}">Sign in Google</a>
                            </li>
                        </ul>
                        {{-- <a class="btn-solid-reg page-scroll" href="">SIGN UP IS FREE</a> --}}
                    </div> <!-- end of text-container -->

                  

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-2 -->
    <!-- end of video -->



    <!-- Footer -->
    <svg class="footer-frame" data-name="Layer 2" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" viewBox="0 0 1920 79"><defs><style>.cls-2{fill:#5161CE;}</style></defs><title>footer-frame</title><path class="cls-2" d="M0,72.427C143,12.138,255.5,4.577,328.644,7.943c147.721,6.8,183.881,60.242,320.83,53.737,143-6.793,167.826-68.128,293-60.9,109.095,6.3,115.68,54.364,225.251,57.319,113.58,3.064,138.8-47.711,251.189-41.8,104.012,5.474,109.713,50.4,197.369,46.572,89.549-3.91,124.375-52.563,227.622-50.155A338.646,338.646,0,0,1,1920,23.467V79.75H0V72.427Z" transform="translate(0 -0.188)"/></svg>
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="footer-col first">
                        <h4>Adsionary.inc</h4>
                    </div>
                </div> <!-- end of col -->
                <div class="col-md-4">
                    <div class="footer-col middle">
                        {{-- <h4>Privacy Policy</h4> --}}
                        <ul class="list-unstyled li-space-lg p-small">
                           
                            <li class="media">
                                {{-- <div class="media-body"><a class="white" href="">Terms & Condition</a>,<a class="white" href="">Privacy Policy</a></div> --}}
                            </li>
                        </ul>
                    </div>
                </div> <!-- end of col -->
                <div class="col-md-4">
                    <div class="footer-col last">
                        {{-- <h4>Contact</h4> --}}
                        <ul class="list-unstyled li-space-lg p-small">
                            <li class="media">
                                {{-- <div class="media-body"><a class="white" href="">FAQs</a></div> --}}
                            </li>
                        </ul>
                    </div> 
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of footer -->  
    <!-- end of footer -->


    <!-- Copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="p-small">&copy; {{ date('Y') }} Adsionary - All Rights Reserved</p>
                </div> <!-- end of col -->
            </div> <!-- enf of row -->
        </div> <!-- end of container -->
    </div> <!-- end of copyright --> 
    <!-- end of copyright -->
    {{-- @include('inc.signupblocker') --}}



    	{{-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> --}}

    	
    <!-- Scripts -->
    <script src="js/landing-template/jquery.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="js/landing-template/popper.min.js"></script> <!-- Popper tooltip library for Bootstrap -->
    <script src="js/landing-template/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    <script src="js/landing-template/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="js/landing-template/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    <script src="js/landing-template/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
    <script src="js/landing-template/validator.min.js"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
    <script src="js/landing-template/scripts.js"></script> <!-- Custom scripts -->


    
        <script>
// $('#overlay').modal('show');

setTimeout(function() {
    $('#overlay').modal('show');
}, 10000);


</script>


<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '803206000541184');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=803206000541184&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->


    <script type="text/javascript">
    $(document).ready(function() {
        var Swipes = new Swiper('.swiper-container', {
            autoplay: {
                delay: 3000,
            },
            speed: 500,
            slidesPerView: 'auto',
            loop: true,
        });
        $('.tab-login li, .pan').removeClass('active');

        var current_tab = localStorage.getItem("current_tab") || 'vouchpanel4',
            element     = $(".tab-login li")
                        .parent('div')
                        .find("[rel="+current_tab+"]")
                        .addClass('active');

    // new .pan code
    var pan = $('.pan')
        .parent('.wrapper-pan') // <-- This used to be .tab-pan (old parent)
        .find('.' + current_tab + '-content')
        .addClass('active')

        // this code is switching from tab to tab
    // im in the class tab-panels > ul tab-vouch > grabing the li
    $('.tab-pan .tab-login li').on('click', function() {
        var $panels = $(this).closest('.tab-pan');
        $panels.find('.tab-login li.active').removeClass('active');
        $(this).addClass('active');

        // use if to check which tab has class of current_tab
        if ($('.pan').hasClass(current_tab)) {
            $(this).addClass('active');
        }

        var loginpanelshow = $(this).attr('rel');

        $('.tab-pan .pan.active').stop().slideUp(300, function(){
        $(this).removeClass('active');
        $('#'+ loginpanelshow).slideDown(300, function(){
            $(this).addClass('active');
        });
        });

        // this is the code that i attempted to use local storage to save on refresh
        var relAtt = $(this).attr('rel');
        localStorage.setItem("current_tab", relAtt);
        /* console.log(relAtt); */
        });
    });
    </script>
</body>
</html>