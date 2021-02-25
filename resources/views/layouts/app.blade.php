<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta property="fb:app_id" content="1567390816981872" />
<meta property="og:title" content="	Database Analytics for Advertisements"/>
<meta property="og:type" content="website"/>
<meta property="og:url" content="https://adsionary.com/"/>
<meta property="og:image" content="https://adsionary.s3.us-east-2.amazonaws.com/Adsionary/dataimage/1608223773.jpg"/>
<meta property="og:description" content="Database Analytics for Advertisements"/>

    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, target-densityDpi=device-dpi" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- <title>{{ config('app.name', 'Adsionary') }}</title> --}}
    <title>Database Analytics for Advertisements</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/popup.js') }}" defer></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-BZS59W4BJQ"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-BZS59W4BJQ');
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




<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css" integrity="sha512-nNlU0WK2QfKsuEmdcTwkeh+lhGs6uyOxuUs+n+0oXSYDok5qy0EI0lt01ZynHq6+p/tbgpZ7P+yUb+r71wqdXg==" crossorigin="anonymous" />
  <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!--  Datatables  -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.css"/>  

    <!--  extension responsive  -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css">
    

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->

        {{-- <link href="{{ asset('css/navbar.css') }}" rel="stylesheet"> --}}
        {{-- <link href="{{ asset('css/mobilenavbar.css') }}" rel="stylesheet"> --}}
                <link href="{{ asset('css/regularnavbar.css') }}" rel="stylesheet">



    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <style>
        .page-item.active .page-link{
        background-color: #5161ce;
    border-color: #5161ce;
}
    </style>
    @yield('styles')
        @livewireStyles    
        <style>
.google-center{
    display: flex;
    justify-content: center;
}

.google-btn {
  width: 210px;
  height: 42px;
  background-color: #4285f4;
  border-radius: 2px;
  box-shadow: 0 3px 4px 0 rgba(0,0,0,.25);
  margin-top: -13px;



}

/* @import url(https://fonts.googleapis.com/css?family=Roboto:500); */

.google-btn  .google-icon-wrapper {
    position: absolute;
    margin-top: 1px;
    margin-left: 1px;
    width: 40px;
    height: 40px;
    border-radius: 2px;
    background-color: #fff;;
  }

  .google-btn   .google-icon {
    position: absolute;
    margin-top: 11px;
    margin-left: 11px;
    width: 18px;
    height: 18px;
  }
  .google-btn   .btn-text {
    float: right;
    margin: 11px 11px 0 0;
    color: #fff;;
    font-size: 16px;
    letter-spacing: 0.2px;
    font-family: "Roboto";
  }

  .btn-text:hover {
    box-shadow: 0 0 6px #4285f4;
  }
  
  .btn-text:active {
    background:  #1669F2;;
  }

        .page-item.active .page-link{
        background-color: #5161ce;
       border-color: #5161ce;

}
     a .pagelink{
        color: #5161ce;
        
    }

    .form-control-login-register{
     height: 3rem;
    font-size: 16px;
    font-weight: 400;
    display: block;
    width: 100%;
    padding: .375rem .75rem;
    font-size: 1rem;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: .25rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    }
    .register-adsionary{
    width: 100%;
    height: 3rem;
    font-size: 24px;
    padding: 2px 0px 2px 0;
     background-color: #5161ce;
    color: white;
    font-family: 'Lobster', cursive;
    }
    </style>




</head>
<body>
    <div id="app">

 

     @include('inc.regularnavbar')


        <main class="py-4">
            @yield('content')
        </main>
    @livewireScripts
{{-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script> --}}

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" type="text/javascript"></script>

    {{-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> --}}

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    {{-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script> --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script> --}}
            
    <!--   Datatables-->
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.js"></script>  
      
    <!-- extension responsive -->
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.js" integrity="sha512-j7/1CJweOskkQiS5RD9W8zhEG9D9vpgByNGxPIqkO5KrXrwyDAroM9aQ9w8J7oRqwxGyz429hPVk/zR6IOMtSA==" crossorigin="anonymous"></script>


    <script>
// $('#overlay').on('shown.bs.modal', function () {
//   $('#myInput').trigger('focus')
// })

$(document).ready(function(){

      $('#overlay').modal('show');

});

    </script>


<script>
    // ---------Responsive-navbar-active-animation-----------
// function test(){
  $(document).ready(function(){
  var active = localStorage.getItem('active');
  if(active !== null){
    $('#navbarSupportedContent ul li').removeClass("active");
    $('#navbarSupportedContent ul').find('.'+active).addClass('active');
  }
  var tabsNewAnim = $('#navbarSupportedContent');
  var selectorNewAnim = $('#navbarSupportedContent').find('li').length;
  var activeItemNewAnim = tabsNewAnim.find('.active');
  var activeWidthNewAnimHeight = activeItemNewAnim.innerHeight();
  var activeWidthNewAnimWidth = activeItemNewAnim.innerWidth();
  var itemPosNewAnimTop = activeItemNewAnim.position();
  var itemPosNewAnimLeft = activeItemNewAnim.position();
  var active_position = JSON.parse(localStorage.getItem('header_position'));

  if(active_position == null){
    $(".hori-selector").css({
      "top":itemPosNewAnimTop.top + "px", 
      "left":itemPosNewAnimLeft.left + "px",
      "height": activeWidthNewAnimHeight + "px",
      "width": activeWidthNewAnimWidth + "px"
    });
  } else{
    $(".hori-selector").css({
      "top":active_position.top + "px", 
      "left":active_position.left + "px",
      "height": active_position.height + "px",
      "width": active_position.width + "px"
    });
  }
  $("#navbarSupportedContent").on("click","li",function(e){
    $('#navbarSupportedContent ul li').removeClass("active");
    $(this).addClass('active');
    var activeWidthNewAnimHeight = $(this).innerHeight();
    var activeWidthNewAnimWidth = $(this).innerWidth();
    var itemPosNewAnimTop = $(this).position();
    var itemPosNewAnimLeft = $(this).position();
    var header_position = {
      top : itemPosNewAnimTop.top,
      left : itemPosNewAnimLeft.left,
      height : activeWidthNewAnimHeight,
      width : activeWidthNewAnimWidth
    }
    localStorage.setItem('header_position', JSON.stringify(header_position));
    var active_position = JSON.parse(localStorage.getItem('header_position'));
    $(".hori-selector").css({
      "top":active_position.top + "px", 
      "left":active_position.left + "px",
      "height": active_position.height + "px",
      "width": active_position.width + "px"
    });
  });
  
});
// }
// $(document).ready(function(){
//   setTimeout(function(){ test(); });
// });
// $(window).on('resize', function(){
//   setTimeout(function(){ test(); }, 500);
// });
// $(".navbar-toggler").click(function(){
//   setTimeout(function(){ test(); });
// });
  function dashboard()
    {
            localStorage.setItem('active', 'dashboard');
            window.location.href = window.location.origin ;
            console.log(window.location.origin + '/dasboard')
    }

    function adtype()
    {
            localStorage.setItem('active', 'analytics_adtype');
            window.location.href = window.location.origin + '/data';
    }
    function analytics_socialmedia()
    {
            localStorage.setItem('active', 'analytics_socialmedia');
            window.location.href = window.location.origin + '/data/industry/socialmedia/all';
    }
    function analytics_percentage()
    {
            localStorage.setItem('active', 'analytics_percentage');
            window.location.href = window.location.origin + '/data/industry/percentage/all';
    }
      function loginnav()
    {
            localStorage.setItem('active', 'login_nav');
            window.location.href = window.location.origin + '/login';
    }
      function registernav()
    {
            localStorage.setItem('active', 'register_nav');
            window.location.href = window.location.origin + '/register';
    }
    // function analytics_audience()
    // {
    //         localStorage.setItem('active', '    analytics_audience');
    //         window.location.href = window.location.origin + '/target/audience/data';
    // }

</script>


    <script>
    $(document).ready(function () {
    $.noConflict();
    var table = $('#example').DataTable({
        responsive: true

    });

});</script>


      
	@yield('javascripts')

    </div>
</body>
</html>
