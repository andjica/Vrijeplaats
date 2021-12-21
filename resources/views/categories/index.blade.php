@extends('layouts.app')

@isset($title)
 
      @section('title', $title )

@endisset


@section('content')

<div class="preload">
<div class="loader" ><span>
zoeken voor u...</span></div>
</div>
<div class="mt-9">
    @include('user.top-campain')
</div>
<section id="section-01" class="">
<nav aria-label="breadcrumb m-3">
  <ol class="breadcrumb m-3 bg-light">
    <li class="breadcrumb-item"><a href="{{asset('/')}}">Home</a></li>
    @isset($category)
        <li class="breadcrumb-item">
            <a href="{{asset('/categorie/'.$category->link)}}">{{$category->name}}</a>
        </li>
        @endisset
        @isset($category)
        <li class="breadcrumb-item">
            <a href="{{asset('/city/'.$city->name)}}">{{$city->name}}</a>
        </li>
        @endisset
  </ol>
</nav>
<div class="container" id="container-desk">
    <div class="btn-group-sm d-flex" role="group" aria-label="Basic example">
        <button type="button" class="btn btn-outline-light text-muted">Left</button>
        <button type="button" class="btn btn-outline-light text-muted">Middle</button>

        <button type="button" class="btn btn-outline-light text-muted d-b-google"  id="googlemapview">
            <img src="{{asset('/images/')}}/map.png" class="img-fluid" width="15px"> Map
        </button>

        <a href="#map" class="mobilepro btn btn-outline-light text-muted">
            <img src="{{asset('/images/')}}/map.png" class="img-fluid" width="15px"> Map
        </a>
        
            <select id="sortby" class="form-control" style="width:10%">
                <option value="0" class="form-control">Sort by</option>
                <option value="LowerPrice" class="form-control">Lower price</option>
                <option value="HigerPrice" class="form-control">Higer price</option>
            </select>
       

    </div> 
    
</div>
<div class="container" id="container-desk">

<div class="row">
    <div class="col-lg-6">
 
    <div class="store-listing-style-04">
        @foreach($postsa as $p)
            <div class="store-listing-item">
                    <div class="d-flex align-items-center flex-wrap flex-lg-nowrap border-bottom py-4 py-lg-0">
                    <div class="store media align-items-stretch py-4">
                    @php 
                    $post = \App\Post::where('id', $p->id)->first();
                    $images = $post->images->first();
                    
                   @endphp
                   @isset($images)
                    <a href="listing-details-full-image.html" class="store-image">
                    <img src="{{asset('/images/posts/'.$images->url)}}" alt="{{$images->alt}}">
                    </a>
                    @endisset
                    <div class="media-body px-0 pt-4 pt-md-0">
                    <a href="{{asset('/categorie='.$post->category->link.'/city='.$post->city->name.'/name='.$post->title)}}" class="font-size-lg font-weight-semibold text-dark d-inline-block mb-2 lh-1">
                        <span class="letter-spacing-25">{{$p->title}} </span>
                    </a>
                    <ul class="list-inline store-meta mb-3 font-size-sm d-flex align-items-center flex-wrap">
                    <li class="list-inline-item">
                        <span class="badge badge-success d-inline-block mr-1">{{$p->count_of_ticket}}</span><span class="number">numm of ticket</span>
                    </li>
                    <li class="list-inline-item separate"></li>
                    <li class="list-inline-item"><span class="mr-1">From</span>
                    <span class="text-danger font-weight-semibold">€{{$p->price_discount}}</span>
                    </li>
                    <li class="list-inline-item separate"></li>
                    <li class="list-inline-item"><a href="#" class="link-hover-secondary-primary">
                   
                    <i class="fas fa-gift"></i>
                         
                    <span>{{$category->name}}</span>
                    </a></li>
                    </ul>
                    <div class="border-top pt-2 d-flex">
                    <span class="d-inline-block mr-1"><i class="fa fa-map-marker-alt">
                    </i>
                    </span>
                    <a href="#" class="text-secondary text-decoration-none address">{{$p->full_address}}</a>
                    <div class="ml-0 ml-sm-auto">
                    <span class="label">Status:</span>
                    @php 
                        $datenow =  Carbon\Carbon::now();
                    @endphp
                    @if($datenow > $p->valid_until)
                    <span class="status experied">Experied</span>
                    @else
                    <span class="status active">Active until <small>{{$p->valid_until}}</small></span>
                    @endif
                    </div>
                    </div>
                    </div>
                    </div>
                    <div class="action ml-0 ml-lg-auto mt-3 mt-lg-0 align-items-center flex-wrap flex-sm-nowrap w-100 w-lg-auto">
                  
                    <a href="{{asset('/categorie='.$post->category->link.'/city='.$post->city->name.'/name='.$post->title)}}" class="btn btn-primary btn-icon-left  mb-2 mb-sm-0 px-5 font-size-md">
                   
                        FIND OUT
                    </a>
                    </div>
                    </div>
                    </div>
                    @endforeach
            </div>
      
         
        <div class="d-flex justify-content-center mt-2 mb-3">
           
        </div>
        </div>
      
        <div class="col-lg-6 pl-0">
            <div id="map" class="mapice"></div>
           
           </div>
        </div>
      


</div>
</div>

</section>
<section id="section-04" class="pt-12 pb-11 post-style-2 bg-gray-01">
<div class="container">
<div class="d-flex align-items-center mb-8 flex-wrap flex-sm-nowrap">
<h2 class="text-capitalize mb-3 mb-sm-0 font-weight-normal">
some tips &amp; articles
</h2>
<a href="#" class="link-hover-dark-primary ml-sm-auto ml-0 w-100 w-sm-auto">
<span class="d-inline-block mr-2 font-size-md">See all articles</span>
<i class="fal fa-chevron-right"></i>
</a>
</div>
<div class="row">
<div class="col-lg-6 mb-6 slideInLeft animated" data-animate="slideInLeft">
<div class="post ">
<a href="blog-single-image.html" class="feature-image" 
style="background-image: url('{{asset('images')}}/blog/thi.jpg')">
</a>
<div class="py-4 pl-4 pr-3 bg-white">
<div class="mb-7">
<div class="mb-2"><a href="#" class="link-hover-dark-primary">Tips</a>, <a href="#" class="link-hover-dark-primary">Location</a></div>
<h5 class="mb-4"><a href="blog-single-image.html" class="text-dark">5 Great
Experience
At Phuket
Island, Thailand</a>
</h5>
<div class="">
Lorem ipsum dolor sit amet, solo consectetur adipiscing elit.
Phasellus til faucibus est sed facilisis viverra satanil...
</div>
</div>
<ul class="list-inline">
<li class="list-inline-item mr-0">
<span class="text-gray">Jul 26th, 2017 by</span>
</li>
<li class="list-inline-item">
<a href="#" class="link-hover-dark-primary">Hilary
Kreton</a>
</li>
</ul>
</div>
</div>
</div>
<div class="col-lg-6 mb-6 slideInRight animated" data-animate="slideInRight">
<div class="post">
<a href="blog-single-image.html" class="feature-image" 
style="background-image: url('{{asset('images')}}/blog/barselona.jpg')">
</a>
<div class="py-4 pl-4 pr-3 bg-white">
<div class="mb-7">
<div class="mb-2"><a href="#" class="link-hover-dark-primary">Business</a>,
<a href="#" class="link-hover-dark-primary">Travel</a></div>
<h5 class="mb-4"><a href="blog-single-image.html" class="text-dark">Top 10
Best
Hotel
With Pool
In Barcelona, Spain</a>
</h5>
<div class="">
Lorem ipsum dolor sit amet, solo consectetur adipiscing elit. Phasellus til
faucibus est sed facilisis viverra satanil...
</div>
</div>
<ul class="list-inline">
<li class="list-inline-item mr-0">
 <span class="text-gray">Jul 23th, 2017 by</span>
</li>
<li class="list-inline-item">
<a href="#" class="link-hover-dark-primary">Admin</a>
</li>
</ul>
</div>
</div>
</div>
<div class="col-lg-6 mb-6 slideInLeft animated" data-animate="slideInLeft">
<div class="post">
<a href="blog-single-image.html" class="feature-image" 
style="background-image: url('{{asset('images')}}/blog/ireland.jpg')">
</a>
<div class="py-4 pl-4 pr-3 bg-white">
<div class="mb-7">
<div class="mb-2"><a href="#" class="link-hover-dark-primary">Community</a>,
<a href="#" class="link-hover-dark-primary">Travel</a></div>
<h5 class="mb-4"><a href="blog-single-image.html" class="text-dark">Snowland
Hotel
-
The Best
Choice When Go To Visit
Ireland</a>
</h5>
<div class="">
Lorem ipsum dolor sit amet, solo consectetur adipiscing elit.
Phasellus til faucibus est sed facilisis viverra satanil...
</div>
</div>
<ul class="list-inline">
<li class="list-inline-item mr-0">
<span class="text-gray">Jul 14th, 2017 by</span>
</li>
<li class="list-inline-item">
<a href="#" class="link-hover-dark-primary">Chris
Evan</a>
</li>
</ul>
</div>
</div>
</div>
<div class="col-lg-6 mb-6 slideInRight animated" data-animate="slideInRight">
<div class="post">
<a href="blog-single-image.html" class="feature-image"
 style="background-image: url('{{asset('images')}}/blog/italy.jpg')">
</a>
<div class="py-4 pl-4 pr-3 bg-white">
<div class="mb-7">
<div class="mb-2"><a href="#" class="link-hover-dark-primary">Tips</a>, <a href="#" class="link-hover-dark-primary">Location</a></div>
<h5 class="mb-4">
<a href="blog-single-image.html" class="text-dark">Hello New Day With Vintage<br> Style At Cinamon Hotel,
Italy</a>
</h5>
<div class="">
Lorem ipsum dolor sit amet, solo consectetur adipiscing elit. Phasellus til
faucibus est sed facilisis viverra satanil...
</div>
</div>
<ul class="list-inline">
<li class="list-inline-item mr-0">
<span class="text-gray">May 26th, 2017 by</span>
</li>
<li class="list-inline-item">
<a href="#" class="link-hover-dark-primary">LoganCee</a>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</section>

  @php 
  $timenow = \Carbon\Carbon::now();
   $city = \App\City::where('id', $post->city_id)->first();
   $postsandjica = \App\Post::with('firstimage')->where('category_id', $category->id)
        ->where('city_id', $city->id)
        ->where('valid_until','>', $timenow)->get();
  @endphp

  <script>
     
     var category = <?php echo $category ?>;
     var city = <?php echo $city ?>;
     var posts = <?php  echo $postsandjica; ?>;
    
     navigator.geolocation.getCurrentPosition(
        function (position) {
            initMap(position.coords.latitude, position.coords.longitude)
        },
        function errorCallback(error) {
            console.log(error)
        }
        );

    function initMap(lat, lng) {
     

        const map = new google.maps.Map(document.getElementById("map"), {
        zoom: 12,
        center: { lat: parseFloat(lat), lng: parseFloat(lng)},
        fullscreenControl: true
     });

     var locations = [];
    
     const obj = posts;
     
     let categorylink = category['link'];
     let cityname = city['name'];
     // Prints "name Jean-Luc Picard" followed by "rank Captain"
     Object.keys(obj).forEach(key => {
     
     console.log(key, obj[key]['geo_address_latitude']);
     

     locations[key] =
     
         [
             {
                 lat: parseFloat((key, obj[key]['geo_address_latitude'])),
                 lng:  parseFloat((key, obj[key]['geo_address_longlatitude'])) 
             }, 
             (key, obj[key]['title']),
             (key, obj[key]['main_description']),
             (key, obj[key]['valid_until']),
             (key, obj[key]['firstimage']['url']), 
             (key, obj[key]['price_first']), 
             categorylink,
             cityname,
             (key, obj[key]['price_discount'])
         ]; 

    
         
   
     });


const image = {
 url: "http://vrijeplaats.nl/public/images/map.png",
 // This marker is 20 pixels wide by 32 pixels high.
 size: new google.maps.Size(30, 55),
 // The origin for this image is (0, 0).
 origin: new google.maps.Point(0, 0),
 // The anchor for this image is the base of the flagpole at (0, 32).
 anchor: new google.maps.Point(0, 1),
};
// Create an info window to share between markers.
const infoWindow = new google.maps.InfoWindow();


locations.forEach(([position, title, desc,valid_until, firstimage, firstprice,categorylink, cityname, price], i) => {
 const marker = new google.maps.Marker({

   animation: google.maps.Animation.DROP,
   position,
   map,
   icon: image,
   title: `${title}`,
   label:{
     text : `${price}€`,
     color: '#ed008c',
     fontSize: "16px",
     fontWeight: "bold"
   },
   infoWindowContent : `
<div class="card" style="padding:10px">

<h5 class="g-title-s">${title}</h5>
   <span class="status active">Active until <small>${valid_until}</small><br>
   <img src="../images/posts/${firstimage}" class="img-fluid mt-2 mb-2 d-block" width="120px">
   
   <p class="mb-2"><del class="text-danger display-5">${firstprice}</del> <b class="text-dark">€${price}</b></span></p>
  
   
   <a class="btn btn-primary g-btn" href="http://vrijeplaats.nl/public/categorie=${categorylink}/city=${cityname}/name=${title}">Find out</a>
   </div>
   `,
   optimized: false,
  

 });


 
 // Add a click listener for each marker, and set up the info window.
 marker.addListener("click", () => {
  
   infoWindow.setContent(marker.infoWindowContent);
   infoWindow.open(marker.getMap(), marker);
  

 });
 
});
}
 $('#googlemapview').click(function(){
     var map = document.querySelector(".gm-style");
     map.requestFullscreen();
 });
 let categoryname = category['name'];
 
 var i = 0, strLength =  categoryname.length;
 for(i; i <  strLength; i++) {
     categoryname =  categoryname.replace(" ", "+");
 }

 let cityname = city['name'];

 var i = 0, strLengthCity =  cityname.length;
 for(i; i <  strLengthCity; i++) {
     cityname =  cityname.replace(" ", "+");
 }

 console.log(cityname);
 window.addEventListener("DOMContentLoaded",() => {
 const replay = document.getElementById("replay");
 let resetTimeout = null;
 let btnTimeout = null;
 // prevent keyboard interaction while the button is hidden
 const tempHideBtn = btn => {
     if (btn) {
         const btnCS = window.getComputedStyle(btn);
         let btnAnimDur = btnCS.getPropertyValue("animation-duration");

         btnAnimDur = +btnAnimDur.split("s")[0] * 1e3;
         btn.disabled = true;

         clearTimeout(btnTimeout);
         btnTimeout = setTimeout(() => {
             btn.disabled = false;
         }, btnAnimDur);
     }
 };

 if (replay) {
     let spinnerEls = [
         "circle",
         "worm-a",
         "worm-b"
     ];
     spinnerEls = spinnerEls.map(e => document.querySelector(`.check-spinner__${e}`));
     // hide the button at start
     tempHideBtn(replay);

     replay.addEventListener("click",function() {
         // kill the animations
         spinnerEls.forEach(e => {
             e.style.animation = "none";
         });
         this.style.animation = "none";

         // restore them, hide the button again
         clearTimeout(resetTimeout);
         resetTimeout = setTimeout(() => {
             spinnerEls.forEach(e => {
                 e.removeAttribute("style");
             });
             this.removeAttribute("style");
             tempHideBtn(this);
         }, 0);
     });
 }
});




     </script>
<script src="{{asset('/js/')}}/preloader.js"></script>

@endsection