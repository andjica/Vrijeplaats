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
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>



  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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

    <script>
     
      $('.carousel').carousel({
        interval: 1000 * 20
    })
    let andjica = $('#validuntil').val();
    
    let newdate = new Date(andjica);
  
    let andjicayear = newdate.getFullYear();
    let andjicamonth = newdate.getMonth()+1;
    let andjicaday = newdate.getDate();
    let andjica2 = andjicamonth+"/"+andjicaday+"/";
   
   
       
    (function () {
     
  const second = 1000,
        minute = second * 60,
        hour = minute * 60,
        day = hour * 24;

      //I'm adding this section so I don't have to keep updating this pen every year :-)
      //remove this if you don't need it
      let today = new Date(),
     
      dd = String(today.getDate()).padStart(2, "0"),
      mm = String(today.getMonth() + 1).padStart(2, "0"),
      yyyy = today.getFullYear(),
      nextYear = yyyy + 1,
      //
      dayMonth = andjica2,
      birthday = dayMonth + yyyy;
  
      today = mm + "/" + dd + "/" + yyyy;
      if (today > birthday) {
        birthday = dayMonth + nextYear;
      }
      //end
  
  const countDown = new Date(birthday).getTime(),
      x = setInterval(function() {    

        const now = new Date().getTime(),
              distance = countDown - now;

        document.getElementById("days").innerText = Math.floor(distance / (day)),
          document.getElementById("hours").innerText = Math.floor((distance % (day)) / (hour)),
          document.getElementById("minutes").innerText = Math.floor((distance % (hour)) / (minute)),
          document.getElementById("seconds").innerText = Math.floor((distance % (minute)) / second);

        //do something later when date is reached
        if (distance < 0) {
          document.getElementById("headline").innerText = "It's my birthday!";
          document.getElementById("countdown").style.display = "none";
          document.getElementById("content").style.display = "block";
          clearInterval(x);
        }
        //seconds
      }, 0)
  }());
      </script>
    <!-- End custom scripts -->
</body>
</html>
