<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

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
    <link rel="stylesheet" href="{{asset('/css/')}}/fontawesome.css">
    <link rel="stylesheet" href="{{asset('/css/')}}/magnific-popup.css">
    <link rel="stylesheet" href="{{asset('/css/')}}/slick.css">
    <link rel="stylesheet" href="{{asset('/css/')}}/animate.css">

    <link rel="stylesheet" href="{{asset('/css/')}}/style.css">
    <script type="text/javascript" src="https://maps.google.com/maps/api/js?key=AIzaSyAdAhrknlhXmlBUhZ5NzvWr1REqAwpzXr0&libraries=places" ></script>

    <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js"data-auto-a11y="true"></script>

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
  
 
</body>
</html>
