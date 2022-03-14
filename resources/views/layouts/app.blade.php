<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Fulltoko | @yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href='https://fonts.googleapis.com/css?family=Work Sans' rel='stylesheet'>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <meta name="description" content="Vrijeplaats">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="{{asset('/images/')}}/map.png" sizes="18x26">


    <meta property="og:url" content="https://vrijeplaats.nl/public" />
    <meta property="og:title" content="Vrijeplaats">
    <meta property="og:description" content="Bekijk hier een van onze grootste aanbod vrijeplaatsen!">
    <meta property="og:type" content="website">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- <link rel="stylesheet" href="{{asset('/css/')}}/fontawesome.css"> -->
    <link rel="stylesheet" href="{{asset('/css/')}}/magnific-popup.css">
    <link rel="stylesheet" href="{{asset('/css/')}}/slick.css">
    <link rel="stylesheet" href="{{asset('/css/')}}/animate.css">

    <link rel="stylesheet" href="{{asset('/css/')}}/fulltoko.css">

    <link rel="stylesheet" href="{{asset('/css/')}}/style.css"> 
    <script type="text/javascript" src="https://maps.google.com/maps/api/js?key=AIzaSyAdAhrknlhXmlBUhZ5NzvWr1REqAwpzXr0&libraries=places" ></script>

    <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" data-auto-a11y="true"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    
    @yield('head')

  
</head>
<body>
  <div id="site-wrapper" class="site-wrapper panel dashboards">
        
       @include('components.header')

       <div class="content-wrap">

            @yield('content')
      </div>
      @include('user.footer')
    </div>

   

    @yield('footer-content')
    <!-- Custom scripts -->
    <script type="text/javascript" src="{{asset('/js/')}}/summernote.js"></script>
    <script type="text/javascript" src="{{asset('/js/')}}/insert-info.js"></script>
    <script type="text/javascript" src="{{asset('/js/')}}/edit-info.js"></script>
    <script type="text/javascript" src="{{asset('/js/')}}/insert-adv.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script src="{{asset('/js/')}}/get-current-location.js"></script>
 <style>
   @media screen and (max-width:668px){
   
    .logo-image {
    border-radius: 100%;
    width: 269px !important;
    position: fixed;
    text-align: center;
    margin: 0 auto;
    right: 18%;
    left: 16%;
    top: -102px !important;
}
.top-campaign {
    background: #004eff !important;
    width: 68% !important;
    margin: 0px auto;
    border-radius: 20px;
    z-index: 100000000000 !important;
    position: fixed !important;
    height: 42px;
    top: 64px;
    line-height: 3;
    left: 15.5% !important;
    right: 15.5% !important;
}
.content-s.col-lg-8.klucic {
    font-size: 14px !important;
    overflow: clip;
    width: 90%;
    line-height: 2;
    margin-top: -3px;
    height: 28px;
}
.top-campaign .code {
    background: white;
    display: inline-block;
    color: #ed008c !important;
    right: -24px;
    font-weight: 600;
    position: relative;
    width: 100px !important;
    text-align: center !important;
    height: 34px !important;
    border-radius: 14px;
    float: right;
    line-height: 3.7 !important;
    font-size: 10px !important;
    top: -5px;
}
.col-lg-4.mb-4.mb-lg-0.px-0.px-lg-4 {
padding: 20px !important;
background: #f5f5f5;
color: white !important;
width: 100% !important;
max-width: 100% !important;
margin-right: 10px;
border-radius: 20px !important;
height: 100% !important;
color: white !important;
}
.form-search.form-search-style-02 .btn {
font-size: 20px;
border-radius: 20px;
color: white !important;
position: relative;
top: 0px !important;
left: 0px !important;
}
.h890 {
width: 100% !important;
margin: 0px auto;
}
img.ucos {
max-width: 24px;
margin: 0px auto;
}
.p-4.p-sm-5.rounded-3.bg-coupon {
display: none;
}
.main-footer {
padding-bottom: 55px;
display: none;
}
.col-lg-2 {
width: auto;
display: grid;
text-align: center;
margin: 0px auto;
justify-content: center;
align-items: center;
}
.mobile-app-footer {
position: fixed;
width: 100%;
bottom: 0;
background: white;
z-index: 100000000 !important;
text-align: center;
margin: 0px auto;
justify-content: center;
align-items: center;
}

a.link {
color: black;
font-weight: bold;
}
.mobile-app-footer {
position: fixed;
width: 100%;
bottom: 0;
}
.store .content-left .badge {
padding: 5px 8px;
width: 72px;
height: 40px;
text-align: center;
border-radius: 10px;
padding-top: 10px;
font-size: 19px;
background: blue;
margin-left: 11px !important;
}
}

@media screen and (min-width:669px){
.mobile-app-footer {
display:none !important;
}
}
 </style>
</body>
</html>
