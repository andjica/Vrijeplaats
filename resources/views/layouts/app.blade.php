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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('/css/')}}/fontawesome.css">
    <link rel="stylesheet" href="{{asset('/css/')}}/magnific-popup.css">
    <link rel="stylesheet" href="{{asset('/css/')}}/slick.css">
    <link rel="stylesheet" href="{{asset('/css/')}}/animate.css">

    <link rel="stylesheet" href="{{asset('/css/')}}/style.css">
    <script type="text/javascript" src="https://maps.google.com/maps/api/js?key=AIzaSyAdAhrknlhXmlBUhZ5NzvWr1REqAwpzXr0&libraries=places" ></script>

  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
</head>
<body style="overflow-x: hidden;">
    <div id="app">
        
       @include('user.nav')

        <main class="py-4">
            @yield('content')
        </main>
      @include('user.footer')
    </div>

    <!-- Custom scripts -->
    <script type="text/javascript" src="{{asset('/js/')}}/summernote.js"></script>
    <script type="text/javascript" src="{{asset('/js/')}}/google-geo-parameters.js"></script>
    <script type="text/javascript" src="{{asset('/js/')}}/insert-info.js"></script>
    <script type="text/javascript" src="{{asset('/js/')}}/edit-info.js"></script>
    <script type="text/javascript" src="{{asset('/js/')}}/insert-adv.js"></script>
    <!-- End custom scripts -->
</body>
</html>
