@extends('layouts.app')

@section('content')
@include('user.top-campain')
@isset($post)

<div class="container">

    @include('categories.slider-hotel')


</div>
<div class="page-title bg-gray-06 pt-8 pb-3">
    <div class="container">
    <ul class="breadcrumb breadcrumb-style-03 mb-6">
        <li class="breadcrumb-item"><a href="{{asset('/')}}">Home</a></li>
        @isset($category)
        <li class="breadcrumb-item"><a href="{{asset('/categorie/'.$category->link)}}">{{$category->name}} </a></li>
        @endisset
        <li class="breadcrumb-item">{{$post->title}}, {{$post->city->name}}</li>
    </ul>
        <div class="explore-details-top d-flex flex-wrap flex-lg-nowrap bg-white pt-5 pl-2">
            <div class="store padding-t-s">
                <div class="d-flex flex-wrap">
                <h3 class="text-dark mr-3 mb-2 ml-2">{{$post->title}} </h3>
              
                </div>
                <ul class="list-inline store-meta d-flex flex-wrap align-items-center ml-2">
                    <li class="list-inline-item">
                        <span class="badge badge-success d-inline-block mr-1">{{$post->count_of_ticket}}</span>
                    <span>numm of availible tickets</span>
                    </li>
                    <li class="list-inline-item separate"></li>
                    @if($post->category->id == 2)
                    <li class="list-inline-item">
                        <a href="{{asset('/categorie/'.$category->link)}}" class=" text-link text-decoration-none d-flex align-items-center">
                            @php echo $post->category->icon @endphp
                        <span>{{$post->category->name}}</span>
                        </a>
                    </li>
                    @elseif($post->category->id == 3)
                    <li class="list-inline-item">
                        <a href="{{asset('/categorie/'.$category->link)}}" class=" text-link text-decoration-none d-flex align-items-center">
                        @php echo $post->category->icon @endphp

                            <span>{{$post->category->name}}</span>
                        </a>
                    </li>
                    @endif
                    <li class="list-inline-item separate"></li>
                    <li class="list-inline-item">
                        <span class="mr-1 text-success"><i class="fa fa-clock"></i></span>
                        <span>Active until {{$post->valid_until}}</span>
                    </li>
                </ul>
               
            </div>
        <div class="d-flex flex-wrap flex-sm-nowrap">
        <input type="hidden" id="validuntil" value="{{$post->valid_until}}">
           
                <!--andjica-->
           
                <div class="card p-1 mb-2 bg-warning">
            <h4 id="headline">Deze aanbieding is geldig tot</h4>
                <div id="countdown">
           
                    <b><span id="days" class="text-success display-days"></span></b><b class="text-dark">days</b>
                    <span id="hours" class="display-hours text-dark"></span><b class="text-dark">Hours</b>
                    <span id="minutes" class="display-minutes text-dark"></span><b class="text-dark">Minutes</b>
                    <span id="seconds" class="display-seconds text-dark"></span><b class="text-dark">Seconds</b>
                    <button class="btn btn-primary font-size-md btn-lg lh-base btn-block">
                        Buy ticket
                    </button>
                </div>
             
    </div>
                </div>
        </div>
        </div>
    </div>

<div class="container">
<div class="page-container">
<div class="row">
<div class="page-content col-xl-8 mb-8 mb-xl-0">
<div class="explore-details-container">
    <div class="mb-9">
    <h3 class="font-size-lg text-uppercase font-weight-semibold border-bottom pb-1 pt-2 mb-6">
    description
    </h3>
    <h4 class="font-size-md mb-4">Introduce</h4>
        <div class="mb-7">
        <p class="mb-6">
            {{$post->main_description}}
        </p>
        <p class="mb-0">
            @php 
                echo $post->description;
            @endphp
            </p>
    </div>

    </div>

<div class="block-more-listing mt-8 border-top pt-6">
<h4 class="font-size-md mb-5">More Listing By <span class="text-danger">Ron Weasley</span></h4>
<div class="slick-slider arrow-top store-grid-style slick-initialized" data-slick-options="{&quot;slidesToShow&quot;: 2, &quot;autoplay&quot;:false,&quot;dots&quot;:false,&quot;responsive&quot;:[{&quot;breakpoint&quot;: 992,&quot;settings&quot;: {&quot;slidesToShow&quot;: 1}}]}"><div class="slick-list draggable" style="height: 476.675px;"><div class="slick-track" style="opacity: 1; width: 1600px; transform: translate3d(0px, 0px, 0px);"><div class="slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" style="width: 400px;"><div><div class="box" style="width: 100%; display: inline-block;">
<div class="store card rounded-0 border-0">
<div class="position-relative store-image">

<a href="listing-details-full-gallery.html" tabindex="0">
<img src="" alt="store 1" class="card-img-top rounded-0">
</a>

<div class="image-content position-absolute d-flex align-items-center">
<div class="content-right ml-auto d-flex">
 <a href="../../images/shop/full-popular-place-1.jpg" class="item viewing" data-toggle="tooltip" data-placement="top" title="" data-gtf-mfp="true" tabindex="0" data-original-title="Quick view">
<svg class="icon icon-expand">
<use xlink:href="#icon-expand"></use>
</svg>
</a>
<a href="#" class="item marking" data-toggle="tooltip" data-placement="top" title="" tabindex="0" data-original-title="Bookmark"><i class="fal fa-bookmark"></i></a>
</div>
</div>
</div>
<div class="card-body pb-4 border-right border-left">
<a href="listing-details-full-gallery.html" class="card-title h5 text-dark d-inline-block mb-2" tabindex="0"><span class="letter-spacing-25">Japan Rice Mixed Seafood</span></a>
<ul class="list-inline store-meta mb-4 font-size-sm d-flex align-items-center flex-wrap">
<li class="list-inline-item"><span class="badge badge-success mr-1 d-inline-block">5.0</span><span class="number">4 rating</span>
</li>
<li class="list-inline-item separate"></li>
<li class="list-inline-item"><span class="mr-1">From</span><span class="text-danger font-weight-semibold">$9.0</span>
</li>
<li class="list-inline-item separate"></li>
<li class="list-inline-item"><span class="text-green">Open now!</span>
</li>
</ul>
<div class="media">
<a href="#" class="d-inline-block mr-3" tabindex="0"><img src="../../images/listing/testimonial-1.png" alt="testimonial" class="rounded-circle">
</a>
<div class="media-body lh-14 font-size-sm">Overlooking
Bloomsbury’s
Russell
Square and a 2
minutes’ walk from the tube station of the same name...
</div>
</div>
 </div>
<div class="card-footer rounded-0 border-top-0 pb-3 pt-0 bg-transparent border-left border-right border-bottom">
<div class="border-top pt-3">
<span class="d-inline-block mr-1">
<i class="fal fa-map-marker-alt"></i>
</span>
<a href="#" class="text-secondary pr-3 text-decoration-none address" tabindex="0">534
Salem Rd
St,
Newark, NY</a>
</div>
</div>
</div>
</div></div></div><div class="slick-slide slick-active" data-slick-index="1" aria-hidden="false" style="width: 400px;"><div><div class="box" style="width: 100%; display: inline-block;">
<div class="store card rounded-0 border-0">
<div class="position-relative store-image">
<a href="listing-details-full-gallery.html" tabindex="0">
<img src="../../images/shop/popular-place-2.jpg" alt="store 1" class="card-img-top rounded-0">
</a>
<div class="image-content position-absolute d-flex align-items-center">
<div class="content-right ml-auto d-flex">
<a href="../../images/shop/full-popular-place-2.jpg" class="item viewing" data-toggle="tooltip" data-placement="top" title="" data-gtf-mfp="true" tabindex="0" data-original-title="Quick view">
<svg class="icon icon-expand">
<use xlink:href="#icon-expand"></use>
</svg>
</a>
<a href="#" class="item marking" data-toggle="tooltip" data-placement="top" title="" tabindex="0" data-original-title="Bookmark"><i class="fal fa-bookmark"></i></a>
</div>
</div>
</div>
<div class="card-body pb-4 border-right border-left">
<a href="listing-details-full-gallery.html" class="card-title h5 text-dark d-inline-block mb-2" tabindex="0"><span class="letter-spacing-25">Fruit Cake - Halsey St </span></a>
<ul class="list-inline store-meta mb-4 font-size-sm d-flex align-items-center flex-wrap">
<li class="list-inline-item"><span class="badge badge-success mr-1 d-inline-block">4.8</span><span class="number">2 rating</span>
</li>
<li class="list-inline-item separate"></li>
<li class="list-inline-item"><span class="mr-1">From</span><span class="text-danger font-weight-semibold">$4.0</span>
</li>
<li class="list-inline-item separate"></li>
<li class="list-inline-item"><span class="text-green">Open now!</span>
</li>
</ul>
<div class="media">
<a href="#" class="d-inline-block mr-3" tabindex="0"><img src="../../images/listing/testimonial-1.png" alt="testimonial" class="rounded-circle">
</a>
<div class="media-body lh-14 font-size-sm">They specialize in
makgeolli
at this
Korean-style pub in Seorae Village. And they use...
</div>
</div>
</div>
<div class="card-footer rounded-0 border-top-0 pb-3 pt-0 bg-transparent border-left border-right border-bottom">
<div class="border-top pt-3">
<span class="d-inline-block mr-1">
<i class="fal fa-map-marker-alt"></i>
</span>
<a href="#" class="text-secondary pr-3 text-decoration-none address" tabindex="0">92
Halsey St,
Brooklyn, NY</a>
</div>
</div>
</div>
</div></div></div><div class="slick-slide" data-slick-index="2" aria-hidden="true" tabindex="-1" style="width: 400px;"><div><div class="box" style="width: 100%; display: inline-block;">
<div class="store card rounded-0 border-0">
<div class="position-relative store-image">
<a href="listing-details-full-gallery.html" tabindex="-1">
<img src="../../images/shop/popular-place-1.jpg" alt="store 1" class="card-img-top rounded-0">
</a>
<div class="image-content position-absolute d-flex align-items-center">
<div class="content-right ml-auto d-flex">
<a href="../../images/shop/full-popular-place-1.jpg" class="item viewing" data-toggle="tooltip" data-placement="top" title="" data-gtf-mfp="true" tabindex="-1" data-original-title="Quick view">
<svg class="icon icon-expand">
<use xlink:href="#icon-expand"></use>
</svg>
</a>
 <a href="#" class="item marking" data-toggle="tooltip" data-placement="top" title="" tabindex="-1" data-original-title="Bookmark"><i class="fal fa-bookmark"></i></a>
</div>
</div>
</div>
<div class="card-body pb-4 border-right border-left">
<a href="listing-details-full-gallery.html" class="card-title h5 text-dark d-inline-block mb-2" tabindex="-1"><span class="letter-spacing-25">Japan Rice Mixed Seafood</span></a>
<ul class="list-inline store-meta mb-4 font-size-sm d-flex align-items-center flex-wrap">
<li class="list-inline-item"><span class="badge badge-success mr-1 d-inline-block">5.0</span><span class="number">4 rating</span>
</li>
<li class="list-inline-item separate"></li>
<li class="list-inline-item"><span class="mr-1">From</span><span class="text-danger font-weight-semibold">$9.0</span>
</li>
<li class="list-inline-item separate"></li>
<li class="list-inline-item"><span class="text-green">Open now!</span>
</li>
</ul>
<div class="media">
<a href="#" class="d-inline-block mr-3" tabindex="-1"><img src="../../images/listing/testimonial-1.png" alt="testimonial" class="rounded-circle">
</a>
<div class="media-body lh-14 font-size-sm">Overlooking
Bloomsbury’s
Russell
Square and a 2
minutes’ walk from the tube station of the same name...
</div>
</div>
</div>
<div class="card-footer rounded-0 border-top-0 pb-3 pt-0 bg-transparent border-left border-right border-bottom">
<div class="border-top pt-3">
<span class="d-inline-block mr-1">
<i class="fal fa-map-marker-alt"></i>
</span>
<a href="#" class="text-secondary pr-3 text-decoration-none address" tabindex="-1">534
Salem Rd
St,
Newark, NY</a>
</div>
</div>
</div>
</div></div></div><div class="slick-slide" data-slick-index="3" aria-hidden="true" tabindex="-1" style="width: 400px;"><div><div class="box" style="width: 100%; display: inline-block;">
<div class="store card rounded-0 border-0">
<div class="position-relative store-image">
<a href="listing-details-full-gallery.html" tabindex="-1">
<img src="../../images/shop/popular-place-2.jpg" alt="store 1" class="card-img-top rounded-0">
</a>
<div class="image-content position-absolute d-flex align-items-center">
<div class="content-right ml-auto d-flex">
<a href="../../images/shop/full-popular-place-2.jpg" class="item viewing" data-toggle="tooltip" data-placement="top" title="" data-gtf-mfp="true" tabindex="-1" data-original-title="Quick view">
<svg class="icon icon-expand">
<use xlink:href="#icon-expand"></use>
</svg>
</a>
<a href="#" class="item marking" data-toggle="tooltip" data-placement="top" title="" tabindex="-1" data-original-title="Bookmark"><i class="fal fa-bookmark"></i></a>
</div>
</div>
</div>
<div class="card-body pb-4 border-right border-left">
<a href="listing-details-full-gallery.html" class="card-title h5 text-dark d-inline-block mb-2" tabindex="-1"><span class="letter-spacing-25">Fruit Cake - Halsey St </span></a>
<ul class="list-inline store-meta mb-4 font-size-sm d-flex align-items-center flex-wrap">
<li class="list-inline-item"><span class="badge badge-success mr-1 d-inline-block">4.8</span><span class="number">2 rating</span>
</li>
<li class="list-inline-item separate"></li>
<li class="list-inline-item"><span class="mr-1">From</span><span class="text-danger font-weight-semibold">$4.0</span>
</li>
<li class="list-inline-item separate"></li>
<li class="list-inline-item"><span class="text-green">Open now!</span>
 </li>
</ul>
<div class="media">
<a href="#" class="d-inline-block mr-3" tabindex="-1"><img src="../../images/listing/testimonial-1.png" alt="testimonial" class="rounded-circle">
</a>
<div class="media-body lh-14 font-size-sm">They specialize in
makgeolli
at this
Korean-style pub in Seorae Village. And they use...
</div>
</div>
</div>
<div class="card-footer rounded-0 border-top-0 pb-3 pt-0 bg-transparent border-left border-right border-bottom">
<div class="border-top pt-3">
<span class="d-inline-block mr-1">
<i class="fal fa-map-marker-alt"></i>
</span>
<a href="#" class="text-secondary pr-3 text-decoration-none address" tabindex="-1">534
Salem Rd
St,
Newark, NY</a>
</div>
</div>
</div>
</div></div></div></div></div><div class="slick-arrows"><div class="slick-prev slick-arrow slick-disabled" aria-label="Previous" aria-disabled="true" style=""><i class="fas fa-chevron-left"></i></div><div class="slick-next slick-arrow" aria-label="Next" style="" aria-disabled="false"><i class="fas fa-chevron-right"></i></div></div></div>
</div>
</div>
</div>
<div class="sidebar col-xl-4">
<div class="card p-4 widget border-0 rounded-0 reservation bg-gray-06 mb-6">

 
<div class="gmap_canvas">
                <iframe width="100%" height="500px" id="gmap_canvas" src="https://maps.google.com/maps?q={{$post->geo_address_latitude}}+{{$post->geo_address_longlatitude}}&t=&z=13&ie=UTF8&iwloc=&output=embed"
                     frameborder="0" scrolling="no" marginheight="0" 
                    marginwidth="0"></iframe><a href="https://123movies-to.org"></a>
                    <br><style>.mapouter{position:relative;text-align:right;height:500px;width:100%;}</style>
                    <a href="https://www.embedgooglemap.net">embedgooglemap.net</a><style>
                    .gmap_canvas {overflow:hidden;background:none!important;height:500px;width:100%;}</style>
                </div>
</div>
<div class="widget map mb-6 position-relative mb-6 rounded-0">

<div class="card p-4 widget border-0 infomation pt-0 bg-gray-06">
<div class="card-body px-0 py-2">
<ul class="list-group list-group-flush">
<li class="list-group-item bg-transparent d-flex text-dark px-0">
<span class="item-icon mr-3"><i class="fal fa-map-marker-alt"></i></span>
<span class="card-text">125 Mountain St, Brooklyn, NY</span>
</li>
<li class="list-group-item bg-transparent d-flex text-dark px-0">
<span class="item-icon mr-3">
<svg class="icon icon-telephone">
<use xlink:href="#icon-telephone"></use>
</svg>
</span>
<span class="card-text">(301) 453-8688</span>
</li>
<li class="list-group-item bg-transparent d-flex text-dark px-0">
<span class="item-icon mr-3"><i class="fal fa-globe"></i></span>
<span class="card-text"><a href="#">www.thaistaste.com</a></span>
</li>
<li class="list-group-item bg-transparent d-flex text-dark px-0 pt-4">
<div class="social-icon origin-color si-square text-center">
<ul class="list-inline">
<li class="list-inline-item si-facebook">
 <a target="_blank" title="Facebook" href="#">
<i class="fab fa-facebook-f">
</i>
<span>Facebook</span>
</a>
</li>
<li class="list-inline-item si-twitter">
<a target="_blank" title="Twitter" href="#">
<i class="fab fa-twitter">
</i>
<span>Twitter</span>
</a>
</li>
<li class="list-inline-item si-google">
<a target="_blank" title="Google plus" href="#">
<svg class="icon icon-google-plus-symbol">
<use xlink:href="#icon-google-plus-symbol"></use>
</svg>
<span>Google plus</span>
</a>
</li>
<li class="list-inline-item si-tumblr">
<a target="_blank" title="Tumblr" href="#">
<i class="fab fa-tumblr"></i>
<span>Tumblr</span>
</a>
</li>
<li class="list-inline-item si-rss">
<a target="_blank" title="RSS" href="#">
<i class="fas fa-rss"></i>
<span>RSS</span>
</a>
</li>
</ul>
</div>
</li>
</ul>
</div>
</div>
</div>
<div class="card p-4 widget border-0 gallery bg-gray-06 rounded-0 mb-6">
<div class="card-title d-flex mb-0 font-size-md font-weight-semibold text-dark text-uppercase border-bottom pb-2 lh-1">
<span class="text-secondary mr-3">
<svg class="icon icon-ionicons_svg_md-images">
<use xlink:href="#icon-ionicons_svg_md-images"></use>
</svg>
</span>
<span> photo gallery</span>
</div>
<div class="card-body px-0 pt-6 p-3">
<div class="photo-gallery d-flex flex-wrap justify-content-between">
@foreach ($post->images as $pic)
<a href="{{asset('/images/posts/'.$pic->url)}}" class="photo-item" data-gtf-mfp="true" data-gallery-id="01">
<img src="{{asset('/images/posts/'.$pic->url)}}" alt="Gallery 01">
</a>
@endforeach
</div>
</div>
</div>
<div class="card p-4 widget border-0 bg-gray-06 rounded-0 mb-6">
<div class="card-title d-flex mb-0 font-size-md font-weight-semibold text-dark text-uppercase border-bottom pb-2 lh-1">
<span>additional details</span>
</div>
<div class="card-body px-0 pb-0">
<ul class="list-group list-group-flush">
<li class="list-group-item bg-transparent d-flex text-dark px-0">
<label class="mb-0">Self Check-in</label>
<span class="ml-auto font-weight-semibold">Smartlock</span>
</li>
<li class="list-group-item bg-transparent d-flex text-dark px-0">
<label class="mb-0">Room Type</label>
<span class="ml-auto font-weight-semibold">Private Room</span>
</li>
<li class="list-group-item bg-transparent d-flex text-dark px-0">
<label class="mb-0">Beds</label>
<span class="ml-auto font-weight-semibold">6</span>
</li>
<li class="list-group-item bg-transparent d-flex text-dark px-0">
<label class="mb-0">Bed Type</label>
<span class="ml-auto font-weight-semibold">Fixed With Air Condition</span>
</li>
<li class="list-group-item bg-transparent d-flex text-dark px-0">
<label class="mb-0">Happy Hours</label>
<span class="text-green ml-auto font-weight-semibold">Yes</span>
</li>
<li class="list-group-item bg-transparent d-flex text-dark px-0">
<label class="mb-0">Smoking</label>
<span class="text-danger ml-auto font-weight-semibold">No</span>
</li>
<li class="list-group-item bg-transparent d-flex text-dark px-0 pt-3">
<a href="#">Show More <span class="d-inline-block ml-2"><i class="fal fa-chevron-down"></i></span>
</a>
</li>
</ul>
</div>
</div>
<div class="card p-4 widget border-0 contact bg-gray-06 rounded-0 mb-6">
    <div class="card-title mb-0 border-bottom pb-2">
        <div class="media">
            <div class="image mr-3">
                <img src="{{asset('/images/')}}/logosmall.jpeg" alt="Contact US" class="img-fluid">
               
        </div>
        <div class="media-body lh-14 font-size-sm">
            <span class="font-weight-semibold text-dark text-capitalize d-block font-size-md name">For more information</span>
            <span class="text-gray d-block mb-2">San Francisco, CA, USA</span>
            <div class="d-flex pb-4 align-items-center">
            <a href="#" class="btn btn-primary font-size-base py-0 px-1 mr-2 rounded-sm"> 
                <i class="fas fa-envelope-square  text-white"></i>Contact US</a>
            
            </div>
        </div>
        </div>
    </div>

</div>

</div>
</div>
</div>
</div>
        <div class="recent-view pt-7 bg-white pb-10">
        <div class="container">
        <div class="mb-6">
        <h5 class="mb-0">
        Recently Viewed
        </h5>
        </div>
        <div class="row">
        <div class="col-lg-4 mb-4 mb-lg-0">
        <div class="store media align-items-stretch bg-white">
        <div class="store-image position-relative">
        <a href="listing-details-full-gallery.html">
        <img src="../../images/shop/recent-view-1.jpg" alt="Recent view 1">
        </a>
        <div class="image-content position-absolute d-flex align-items-center">
        <div class="content-right ml-auto d-flex">
        <a href="../../images/shop/full-top-place-3.jpg" class="item viewing" data-toggle="tooltip" data-placement="top" title="" data-gtf-mfp="true" data-original-title="Quickview">
        <svg class="icon icon-expand">
        <use xlink:href="#icon-expand"></use>
        </svg>
        </a>
        <a href="#" class="item marking" data-toggle="tooltip" data-placement="top" title="" data-original-title="Bookmark"><i class="fal fa-bookmark"></i></a>
        </div>
        </div>
        </div>
        <div class="media-body pl-0 pl-sm-3 pt-4 pt-sm-0">
        <a href="listing-details-full-gallery.html" class="font-size-md font-weight-semibold text-dark d-inline-block mb-2 lh-11"><span class="letter-spacing-25">Canabo View Street, Main St</span> </a>
        <ul class="list-inline store-meta mb-2 lh-1 font-size-sm d-flex align-items-center flex-wrap">
        <li class="list-inline-item"><span class="badge badge-warning d-inline-block mr-1">4.3</span><span class="number">6 rating</span>
        </li>
        <li class="list-inline-item separate"></li>
        <li class="list-inline-item"><span class="mr-1">From</span><span class="text-danger font-weight-semibold">$8.00</span></li>
        </ul>
        <div>
        <span class="d-inline-block mr-1"><i class="fal fa-map-marker-alt">
        </i>
        </span>
        <a href="#" class="text-secondary text-decoration-none address">77 Main St,
        Queen,
        NY</a>
        </div>
        </div>
        </div>
        </div>
        <div class="col-lg-4 mb-4 mb-lg-0">
        <div class="store media align-items-stretch bg-white">
        <div class="store-image position-relative">
        <a href="listing-details-full-gallery.html">
        <img src="../../images/shop/recent-view-2.jpg" alt="Recent view 1">
        </a>
        <div class="image-content position-absolute d-flex align-items-center">
        <div class="content-right ml-auto d-flex">
        <a href="../../images/shop/full-top-place-4.jpg" class="item viewing" data-toggle="tooltip" data-placement="top" title="" data-gtf-mfp="true" data-original-title="Quickview">
        <svg class="icon icon-expand">
        <use xlink:href="#icon-expand"></use>
        </svg>
        </a>
        <a href="#" class="item marking" data-toggle="tooltip" data-placement="top" title="" data-original-title="Bookmark"><i class="fal fa-bookmark"></i></a>
        </div>
        </div>
        </div>
        <div class="media-body pl-0 pl-sm-3 pt-4 pt-sm-0">
        <a href="listing-details-full-gallery.html" class="font-size-md font-weight-semibold text-dark d-inline-block mb-2 lh-11"><span class="letter-spacing-25">Japan's Sushi - 10th Ave St</span> </a>
        <ul class="list-inline store-meta mb-2 lh-1 font-size-sm d-flex align-items-center flex-wrap">
        <li class="list-inline-item"><span class="badge badge-success d-inline-block mr-1">5.0</span><span class="number">7 rating</span>
        </li>
        <li class="list-inline-item separate"></li>
        <li class="list-inline-item"><span class="mr-1">From</span><span class="text-danger font-weight-semibold">$12.00</span></li>
        </ul>
        <div>
        <span class="d-inline-block mr-1"><i class="fal fa-map-marker-alt">
        </i>
        </span>
        <a href="#" class="text-secondary text-decoration-none address">99 10th Ave
        St,
        Mahattan, NY</a>
        </div>
        </div>
        </div>
        </div>
        <div class="col-lg-4 mb-4 mb-lg-0">
        <div class="store media align-items-stretch bg-white">
        <div class="store-image position-relative">
        <a href="listing-details-full-gallery.html">
        <img src="../../images/shop/recent-view-3.jpg" alt="Recent view 1">
        </a>
        <div class="image-content position-absolute d-flex align-items-center">
        <div class="content-right ml-auto d-flex">
        <a href="../../images/shop/full-top-place-5.jpg" class="item viewing" data-toggle="tooltip" data-placement="top" title="" data-gtf-mfp="true" data-original-title="Quickview">
        <svg class="icon icon-expand">
        <use xlink:href="#icon-expand"></use>
        </svg>
        </a>
        <a href="#" class="item marking" data-toggle="tooltip" data-placement="top" title="" data-original-title="Bookmark"><i class="fal fa-bookmark"></i></a>
        </div>
        </div>
        </div>
        <div class="media-body pl-0 pl-sm-3 pt-4 pt-sm-0">
        <a href="listing-details-full-gallery.html" class="font-size-md font-weight-semibold text-dark d-inline-block mb-2 lh-11"><span class="letter-spacing-25">Korean Bingsu Shop</span></a>
        <ul class="list-inline store-meta mb-2 lh-1 font-size-sm d-flex align-items-center flex-wrap">
        <li class="list-inline-item"><span class="badge badge-success d-inline-block mr-1">5.0</span><span class="number">7 rating</span>
        </li>
        <li class="list-inline-item separate"></li>
        <li class="list-inline-item"><span class="mr-1">From</span><span class="text-danger font-weight-semibold">$12.00</span></li>
        </ul>
        <div>
        <span class="d-inline-block mr-1"><i class="fal fa-map-marker-alt">
        </i>
        </span>
        <a href="#" class="text-secondary text-decoration-none address">534 Salem
        Rd St,
        Newark, NY</a>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>


@endisset

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
@endsection