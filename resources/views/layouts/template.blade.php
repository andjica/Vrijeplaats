<!doctype html>
<html lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Vrijeplaats | </title>
<meta name="description" content="Vrijeplaats">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="icon" href="{{asset('/images/')}}/map.png" sizes="18x26">


<meta property="og:url" content="https://vrijeplaats.nl/public" />
<meta property="og:title" content="Vrijeplaats">
<meta property="og:description" content="Bekijk hier een van onze grootste aanbod vrijeplaatsen!">
<meta property="og:type" content="website">
<script src="/cdn-cgi/apps/head/2oc_RD5SS6wgN5SiQnSEnWVNHg8.js"></script>
<script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js"data-auto-a11y="true"></script>

<link href="https://fonts.googleapis.com/css?family=Work+Sans:200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{asset('/css/')}}/fontawesome.css">
<link rel="stylesheet" href="{{asset('/css/')}}/magnific-popup.css">
<link rel="stylesheet" href="{{asset('/css/')}}/slick.css">
<link rel="stylesheet" href="{{asset('/css/')}}/animate.css">

<link rel="stylesheet" href="{{asset('/css/')}}/style.css">

<script type="text/javascript" src="https://maps.google.com/maps/api/js?key=AIzaSyAdAhrknlhXmlBUhZ5NzvWr1REqAwpzXr0&libraries=places" ></script>
</head>
<body>
<div id="site-wrapper" class="site-wrapper home-main">
@include('components.header')

<div class="content-wrap">
@yield('content')

</div>
@include('components.footer')
<script type="text/javascript" src="{{asset('/js/')}}/google-geo-parameters.js"></script>

</div>

<!-- <script>
  $('#searchbycategorycity').on('submit', function(e){
   
   e.preventDefault();
    var category = $('#key-word').val();
    var city = $('#region').val();

    var url = 'http://localhost/vrijeplaats/public/categorie='+category+'/city='+city;
    
		// Submit the form using AJAX.
		$.ajax({
			type: 'POST',
			url: url,
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
			data: 
            {
                "_token": TOKEN,
                category : category,
                city : city
            },
            success: function(response){
                alert(response.posts);
            }
		})
  });
    </script> -->
  <script src="{{asset('/js/')}}/get-current-location.js">

    </script>
</body>
</html>