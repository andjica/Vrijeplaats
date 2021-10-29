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
                    <li class="list-inline-item"><span class="badge badge-success d-inline-block mr-1">5.0</span>
                    <span>4 rating</span>
                    </li>
                    <li class="list-inline-item separate"></li>
                    <li class="list-inline-item">
                        <a href="#" class=" text-link text-decoration-none d-flex align-items-center">
                            <span class="d-inline-block mr-2 font-size-md">
                                <svg class="icon icon-bed">
                                <use xlink:href="#icon-bed"></use>
                            </svg>
                            </span>
                        <span>Hotel</span>
                        </a>
                    </li>
                    <li class="list-inline-item separate"></li>
                    <li class="list-inline-item">
                        <span class="mr-1"><i class="fal fa-clock"></i></span>
                        <span>Posted 15 hours ago</span>
                    </li>
                </ul>
               
            </div>
        <div class="d-flex flex-wrap flex-sm-nowrap">
        <input type="hidden" id="validuntil" value="{{$post->valid_until}}">
           
                <!--andjica-->
           
                <div class="card p-1 mb-2 bg-warning margin-c-h">
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
<h4 class="font-size-md mb-4">
Amenities
</h4>
<div class="row">
<div class="col-md-4 mb-4 mb-md-0">
<ul class="list-group list-group-flush list-group-borderless">
<li class="list-group-item px-0 bg-transparent py-0 lh-19">
<span class="d-inline-block mr-2 font-size-md">
<i class="fal fa-credit-card"></i>
</span>
<span class="text-dark">
Accept Credit Cards
</span>
</li>
<li class="list-group-item px-0 bg-transparent py-0 lh-19">
<span class="d-inline-block mr-2 font-size-md">
<i class="fas fa-user-friends"></i>
</span>
<span class="text-dark">
Family/Kids Friendly
</span>
</li>
<li class="list-group-item px-0 bg-transparent py-0 lh-19">
<span class="d-inline-block mr-2 font-size-md">
<i class="far fa-calendar"></i>
</span>
<span class="text-dark">
Reservation
</span>
</li>
</ul>
</div>
<div class="col-md-4 mb-4 mb-md-0">
<ul class="list-group list-group-flush list-group-borderless">
<li class="list-group-item px-0 bg-transparent py-0 lh-19">
<span class="d-inline-block mr-2 font-size-md">
<i class="fas fa-mug-hot"></i>
</span>
<span class="text-dark">
Breakfast Include
</span>
</li>
<li class="list-group-item px-0 bg-transparent py-0 lh-19">
<span class="d-inline-block mr-2 font-size-md">
<i class="fas fa-wifi"></i>
</span>
<span class="text-dark">
Wireless/Internet
</span>
</li>
<li class="list-group-item px-0 bg-transparent py-0 lh-1">
<span class="d-inline-block mr-2 font-size-h5">
<svg class="icon icon-ionicons_svg_logo-model-s">
<use xlink:href="#icon-ionicons_svg_logo-model-s"></use>
</svg>
</span>
<span class="text-dark">
Car Parking
</span>
</li>
</ul>
</div>
<div class="col-md-4 mb-4 mb-md-0">
<ul class="list-group list-group-flush list-group-borderless">
<li class="list-group-item px-0 bg-transparent py-0 lh-19">
<span class="d-inline-block mr-2 font-size-md">
<i class="fas fa-paw"></i>
</span>
<span class="text-dark">
Pet Allowed
</span>
</li>
</ul>
</div>
</div>
</div>
<div class="block-review">
<h3 class="font-size-lg text-uppercase border-bottom pb-1 mb-6">
Reviews &amp; Ratings
</h3>
<h4 class="font-size-md mb-1">02 Reviews for Thai’s Taste Restaurant</h4>
<div class="reviews">
<div class="py-6 media border-top">
<a href="#" class="author-image">
<img src="../../images/listing/jobs-testimonial-1.png" alt="Author 1" class="rounded-circle">
</a>
<div class="media-body">
<div class="mb-4 row flex-md-nowrap mb-5">
<div class="col-12 col-md-10">
<div class="h5 mb-1">Great place and very love it!
</div>
<ul class="list-inline text-gray">
<li class="list-inline-item">
<span>by</span>
<a href="#">Ron Weasley</a>
</li>
<li class="list-inline-item">
<span>|</span>
</li>
<li class="list-inline-item">
<span>15 hours ago</span>
</li>
</ul>
</div>
<div class="ml-0 ml-md-auto text-left text-md-right col-12 col-md-2 mt-2 mt-md-0">
<span class="badge badge-success d-inline-block font-size-h5 font-weight-semibold">5.0</span>
<span class="text-dark font-weight-semibold font-size-md d-block">Excellent</span>
</div>
</div>
<p class="mb-0">This place is the epitome of an amazing
college
town diner! Badger decor, huge portions, completely
affordable,
hearty meals and awesome service!
</p>
<div class="images d-flex flex-wrap">
<img src="../../images/listing/review-01.jpg" alt="Review 1" class="mt-4">
<img src="../../images/listing/review-02.jpg" alt="Review 2" class="mt-4">
<img src="../../images/listing/review-03.jpg" alt="Review 3" class="mt-4">
</div>
<div class="icons d-flex mt-4">
<div class="mr-5 like">
<i class="fal fa-thumbs-up"></i>
12
</div>
<div class="love">
<i class="fal fa-heart"></i>
8
</div>
</div>
</div>
</div>
<div class="py-6 media border-top">
<a href="#" class="author-image">
<img src="../../images/listing/review-athor-01.jpg" alt="Author 2" class="rounded-circle">
</a>
<div class="media-body">
<div class="mb-4 row flex-md-nowrap mb-5">
<div class="col-12 col-md-10">
<div class="h5 mb-1">Delicious &amp; Fast Support</div>
<ul class="list-inline d-flex text-gray">
<li class="list-inline-item">
<span>by</span>
<a href="#">Anna Molly </a>
</li>
<li class="list-inline-item">
<span>|</span>
</li>
<li class="list-inline-item">
<span>17 hours ago</span>
</li>
</ul>
</div>
<div class="rating ml-0 ml-md-auto text-left text-md-right col-12 col-md-2 mt-2 mt-md-0">
<span class="badge badge-success d-inline-block font-size-h5 font-weight-semibold">5.0</span>
<span class="text-dark font-weight-semibold font-size-md d-block">Excellent</span>
</div>
</div>
<p class="mb-0">This place is the epitome of an amazing
college
town diner! Badger decor, huge portions, completely
affordable,
hearty meals and awesome service! The ambiance is very
chill
and
comfy. Just moved to Thai’s Taste and already went here
twice (two
days in a row) because there's really nothing like this
place. It's
going to be hard to find another place like this in
regards
to
service, taste, portions &amp; price! My husband and I will
definitely
be regulars here!
</p>
<div class="icons d-flex mt-4">
<div class="like mr-5">
 <i class="fal fa-thumbs-up"></i>
5
</div>
<div class="love">
<i class="fal fa-heart"></i>
3
</div>
</div>
</div>
</div>
</div>
</div>
<div class="block-form-review bg-gray-06 px-5 pb-6">
<h4 class="font-size-md pb-1 border-bottom pt-4 mb-4">
Rate Us &amp; Write A Review
</h4>
<form>
<div class="row mb-4 flex-md-nowrap align-items-center">
<div class="form-group d-flex form-rate col-md-6 align-items-center mb-4 mb-md-0">
<span class="d-inline-block mr-2">Select your rating</span>
<div class="rate-input d-flex">
<input type="radio" id="star5" name="rate" value="5">
<label for="star5" title="text" class="mb-0">
<svg class="icon icon-ionicons_svg_md-star">
<use xlink:href="#icon-ionicons_svg_md-star"></use>
</svg>
</label>
<input type="radio" id="star4" name="rate" value="4" checked="">
<label for="star4" title="text" class="mb-0">
<svg class="icon icon-ionicons_svg_md-star">
<use xlink:href="#icon-ionicons_svg_md-star"></use>
</svg>
</label>
<input type="radio" id="star3" name="rate" value="3">
<label for="star3" title="text" class="mb-0">
<svg class="icon icon-ionicons_svg_md-star">
<use xlink:href="#icon-ionicons_svg_md-star"></use>
</svg>
</label>
<input type="radio" id="star2" name="rate" value="2">
<label for="star2" title="text" class="mb-0">
<svg class="icon icon-ionicons_svg_md-star">
<use xlink:href="#icon-ionicons_svg_md-star"></use>
</svg>
</label>
<input type="radio" id="star1" name="rate" value="1">
<label for="star1" title="text" class="mb-0">
 <svg class="icon icon-ionicons_svg_md-star">
<use xlink:href="#icon-ionicons_svg_md-star"></use>
</svg>
</label>
</div>
</div>
<div class="upload-file col-md-6 text-left text-md-right"><input type="file" id="file"><label for="file" class="btn btn-white btn-icon-left mb-0 px-6"><i class="fas fa-cloud-upload"></i>Add a Photo</label>
</div>
</div>
<div class="form-row mx-0">
<div class="col-sm-4 form-group mb-4 pl-0 pr-0 pr-sm-3">
<input class="form-control" placeholder="Name">
</div>
<div class="col-sm-4 form-group pl-0 mb-4 pr-0 pr-sm-3">
<input class="form-control" placeholder="Email Address">
</div>
<div class="col-sm-4 form-groupmb-4 px-0">
<input class="form-control" placeholder="Subject">
</div>
</div>
<div class="form-group mb-4">
<textarea class="form-control" placeholder="Write your review here..."></textarea>
</div>
<div class="text-center">
<button class="btn btn-primary font-size-md btn-lg lh-base">Sign Up &amp; Submit
Review
</button>
</div>
</form>
</div>
<div class="block-more-listing mt-8 border-top pt-6">
<h4 class="font-size-md mb-5">More Listing By <span class="text-danger">Ron Weasley</span></h4>
<div class="slick-slider arrow-top store-grid-style slick-initialized" data-slick-options="{&quot;slidesToShow&quot;: 2, &quot;autoplay&quot;:false,&quot;dots&quot;:false,&quot;responsive&quot;:[{&quot;breakpoint&quot;: 992,&quot;settings&quot;: {&quot;slidesToShow&quot;: 1}}]}"><div class="slick-list draggable" style="height: 476.675px;"><div class="slick-track" style="opacity: 1; width: 1600px; transform: translate3d(0px, 0px, 0px);"><div class="slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" style="width: 400px;"><div><div class="box" style="width: 100%; display: inline-block;">
<div class="store card rounded-0 border-0">
<div class="position-relative store-image">
<a href="listing-details-full-gallery.html" tabindex="0">
<img src="../../images/shop/popular-place-1.jpg" alt="store 1" class="card-img-top rounded-0">
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
<div class="card-title d-flex mb-0 font-size-md font-weight-semibold text-dark text-uppercase border-bottom pb-2 lh-1">
<span class="text-secondary mr-3"><i class="fa fa-calendar"></i></span>
<span> Make An online Reservation</span>
</div>
 
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
<div id="googleMap" data-google-map="true" class="small-map" style="width: 100%; height: 240px; position: relative; overflow: hidden;"><div style="height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; background-color: rgb(229, 227, 223);"><div class="gm-style" style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px;"><div><button draggable="false" aria-label="Keyboard shortcuts" title="Keyboard shortcuts" type="button" style="background: none transparent; display: block; border: none; margin: 0px; padding: 0px; text-transform: none; appearance: none; position: absolute; cursor: pointer; user-select: none; z-index: 1000002; left: -100000px; top: -100000px;"></button></div><div tabindex="0" aria-label="Map" aria-roledescription="map" role="group" style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; cursor: url(&quot;https://maps.gstatic.com/mapfiles/openhand_8_8.cur&quot;), default; touch-action: pan-x pan-y;"><div style="z-index: 1; position: absolute; left: 50%; top: 50%; width: 100%; transform: translate(0px, 0px);"><div style="position: absolute; left: 0px; top: 0px; z-index: 100; width: 100%;"><div style="position: absolute; left: 0px; top: 0px; z-index: 0;"><div style="position: absolute; z-index: 988; transform: matrix(1, 0, 0, 1, -136, -69);"><div style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: -256px; top: 0px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: -256px; top: -256px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: 0px; top: -256px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: 256px; top: -256px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: 256px; top: 0px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div></div></div></div><div style="position: absolute; left: 0px; top: 0px; z-index: 101; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 102; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 103; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 0;"><div style="position: absolute; z-index: 988; transform: matrix(1, 0, 0, 1, -136, -69);"><div style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i12!2i1206!3i1539!4i256!2m3!1e0!2sm!3i579304112!3m17!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy50OjE3fHMuZTpnLmZ8cC5jOiNmZmZmZmZmZixzLnQ6MTh8cy5lOmcuZnxwLmM6I2ZmZmZmZmZmLHMudDoxOHxzLmU6bC50LmZ8cC5jOiNmZmMzYjZhMixzLnQ6ODF8cy5lOmcuZnxwLmM6I2ZmZmZmZmZmLHMudDo4MXxzLmU6bC50fHAuYzojZmZjM2I2YTIscy50OjgxfHMuZTpsLnQuZnxwLmM6I2ZmYzNiNmEyLHMudDo4MnxzLmU6Zy5mfHAuYzojZmZmZmZmZmYscy50OjEzMTN8cy5lOmcuZnxwLmM6I2ZmZmZmZmZmLHMudDoxMzE0fHMuZTpnLmZ8cC5jOiNmZmZmZmZmZixzLnQ6MzN8cy5lOmcuZnxwLmM6I2ZmZmZmZmZmLHMudDo0MHxzLmU6Zy5mfHAuYzojZmZmZmZmZmYscy50OjQwfHMuZTpsLml8cC5jOiNmZjgwODA4MCxzLnQ6NDB8cy5lOmwudC5mfHAuYzojZmY4MDgwODAscy50OjM1fHMuZTpnLmZ8cC5jOiNmZmZmZmZmZixzLnQ6NTB8cy5lOmcuZnxwLmM6I2ZmZjBmMGYwLHMudDo1MHxzLmU6Zy5zfHAuYzojZmZjMGMwYzB8cC5zOi03NXxwLmw6LTgwLHMudDo1MHxzLmU6bHxwLnY6b2ZmLHMudDo0OXxzLmU6Zy5mfHAuYzojZmZlZGVkZWQscy50OjQ5fHMuZTpnLnN8cC5jOiNmZmVkZWRlZCxzLnQ6NDl8cy5lOmx8cC52Om9mZixzLnQ6NDl8cy5lOmwudHxwLmM6I2ZmZWRlZGVkLHMudDo0OXxzLmU6bC50LmZ8cC5jOiNmZjkxYmJkNSxzLnQ6Nzg1fHAuYzojZmZlZGVkZWQscy50OjUxfHAudjpvZmYscy50OjUxfHMuZTpnLmZ8cC5jOiNmZmVkZWRlZCxzLnQ6NjV8cy5lOmcuZnxwLmM6I2ZmZjBmMGYwLHMudDoxMDU5fHMuZTpsLnQuZnxwLmM6I2ZmYzNiNmEyLHMudDo2fHMuZTpnLmZ8cC5jOiNmZmM3ZDdkNCxzLnQ6NnxzLmU6bC50LmZ8cC5jOiNmZjkxYmJkNQ!4e0!5m1!5f2&amp;key=AIzaSyDiMIj9qJw-InawUWnu7kUK4GjDQ7dktMQ&amp;token=69782" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: -256px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i12!2i1205!3i1539!4i256!2m3!1e0!2sm!3i579304112!3m17!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy50OjE3fHMuZTpnLmZ8cC5jOiNmZmZmZmZmZixzLnQ6MTh8cy5lOmcuZnxwLmM6I2ZmZmZmZmZmLHMudDoxOHxzLmU6bC50LmZ8cC5jOiNmZmMzYjZhMixzLnQ6ODF8cy5lOmcuZnxwLmM6I2ZmZmZmZmZmLHMudDo4MXxzLmU6bC50fHAuYzojZmZjM2I2YTIscy50OjgxfHMuZTpsLnQuZnxwLmM6I2ZmYzNiNmEyLHMudDo4MnxzLmU6Zy5mfHAuYzojZmZmZmZmZmYscy50OjEzMTN8cy5lOmcuZnxwLmM6I2ZmZmZmZmZmLHMudDoxMzE0fHMuZTpnLmZ8cC5jOiNmZmZmZmZmZixzLnQ6MzN8cy5lOmcuZnxwLmM6I2ZmZmZmZmZmLHMudDo0MHxzLmU6Zy5mfHAuYzojZmZmZmZmZmYscy50OjQwfHMuZTpsLml8cC5jOiNmZjgwODA4MCxzLnQ6NDB8cy5lOmwudC5mfHAuYzojZmY4MDgwODAscy50OjM1fHMuZTpnLmZ8cC5jOiNmZmZmZmZmZixzLnQ6NTB8cy5lOmcuZnxwLmM6I2ZmZjBmMGYwLHMudDo1MHxzLmU6Zy5zfHAuYzojZmZjMGMwYzB8cC5zOi03NXxwLmw6LTgwLHMudDo1MHxzLmU6bHxwLnY6b2ZmLHMudDo0OXxzLmU6Zy5mfHAuYzojZmZlZGVkZWQscy50OjQ5fHMuZTpnLnN8cC5jOiNmZmVkZWRlZCxzLnQ6NDl8cy5lOmx8cC52Om9mZixzLnQ6NDl8cy5lOmwudHxwLmM6I2ZmZWRlZGVkLHMudDo0OXxzLmU6bC50LmZ8cC5jOiNmZjkxYmJkNSxzLnQ6Nzg1fHAuYzojZmZlZGVkZWQscy50OjUxfHAudjpvZmYscy50OjUxfHMuZTpnLmZ8cC5jOiNmZmVkZWRlZCxzLnQ6NjV8cy5lOmcuZnxwLmM6I2ZmZjBmMGYwLHMudDoxMDU5fHMuZTpsLnQuZnxwLmM6I2ZmYzNiNmEyLHMudDo2fHMuZTpnLmZ8cC5jOiNmZmM3ZDdkNCxzLnQ6NnxzLmU6bC50LmZ8cC5jOiNmZjkxYmJkNQ!4e0!5m1!5f2&amp;key=AIzaSyDiMIj9qJw-InawUWnu7kUK4GjDQ7dktMQ&amp;token=36882" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: -256px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i12!2i1205!3i1538!4i256!2m3!1e0!2sm!3i579304112!3m17!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy50OjE3fHMuZTpnLmZ8cC5jOiNmZmZmZmZmZixzLnQ6MTh8cy5lOmcuZnxwLmM6I2ZmZmZmZmZmLHMudDoxOHxzLmU6bC50LmZ8cC5jOiNmZmMzYjZhMixzLnQ6ODF8cy5lOmcuZnxwLmM6I2ZmZmZmZmZmLHMudDo4MXxzLmU6bC50fHAuYzojZmZjM2I2YTIscy50OjgxfHMuZTpsLnQuZnxwLmM6I2ZmYzNiNmEyLHMudDo4MnxzLmU6Zy5mfHAuYzojZmZmZmZmZmYscy50OjEzMTN8cy5lOmcuZnxwLmM6I2ZmZmZmZmZmLHMudDoxMzE0fHMuZTpnLmZ8cC5jOiNmZmZmZmZmZixzLnQ6MzN8cy5lOmcuZnxwLmM6I2ZmZmZmZmZmLHMudDo0MHxzLmU6Zy5mfHAuYzojZmZmZmZmZmYscy50OjQwfHMuZTpsLml8cC5jOiNmZjgwODA4MCxzLnQ6NDB8cy5lOmwudC5mfHAuYzojZmY4MDgwODAscy50OjM1fHMuZTpnLmZ8cC5jOiNmZmZmZmZmZixzLnQ6NTB8cy5lOmcuZnxwLmM6I2ZmZjBmMGYwLHMudDo1MHxzLmU6Zy5zfHAuYzojZmZjMGMwYzB8cC5zOi03NXxwLmw6LTgwLHMudDo1MHxzLmU6bHxwLnY6b2ZmLHMudDo0OXxzLmU6Zy5mfHAuYzojZmZlZGVkZWQscy50OjQ5fHMuZTpnLnN8cC5jOiNmZmVkZWRlZCxzLnQ6NDl8cy5lOmx8cC52Om9mZixzLnQ6NDl8cy5lOmwudHxwLmM6I2ZmZWRlZGVkLHMudDo0OXxzLmU6bC50LmZ8cC5jOiNmZjkxYmJkNSxzLnQ6Nzg1fHAuYzojZmZlZGVkZWQscy50OjUxfHAudjpvZmYscy50OjUxfHMuZTpnLmZ8cC5jOiNmZmVkZWRlZCxzLnQ6NjV8cy5lOmcuZnxwLmM6I2ZmZjBmMGYwLHMudDoxMDU5fHMuZTpsLnQuZnxwLmM6I2ZmYzNiNmEyLHMudDo2fHMuZTpnLmZ8cC5jOiNmZmM3ZDdkNCxzLnQ6NnxzLmU6bC50LmZ8cC5jOiNmZjkxYmJkNQ!4e0!5m1!5f2&amp;key=AIzaSyDiMIj9qJw-InawUWnu7kUK4GjDQ7dktMQ&amp;token=129546" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 0px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i12!2i1206!3i1538!4i256!2m3!1e0!2sm!3i579304112!3m17!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy50OjE3fHMuZTpnLmZ8cC5jOiNmZmZmZmZmZixzLnQ6MTh8cy5lOmcuZnxwLmM6I2ZmZmZmZmZmLHMudDoxOHxzLmU6bC50LmZ8cC5jOiNmZmMzYjZhMixzLnQ6ODF8cy5lOmcuZnxwLmM6I2ZmZmZmZmZmLHMudDo4MXxzLmU6bC50fHAuYzojZmZjM2I2YTIscy50OjgxfHMuZTpsLnQuZnxwLmM6I2ZmYzNiNmEyLHMudDo4MnxzLmU6Zy5mfHAuYzojZmZmZmZmZmYscy50OjEzMTN8cy5lOmcuZnxwLmM6I2ZmZmZmZmZmLHMudDoxMzE0fHMuZTpnLmZ8cC5jOiNmZmZmZmZmZixzLnQ6MzN8cy5lOmcuZnxwLmM6I2ZmZmZmZmZmLHMudDo0MHxzLmU6Zy5mfHAuYzojZmZmZmZmZmYscy50OjQwfHMuZTpsLml8cC5jOiNmZjgwODA4MCxzLnQ6NDB8cy5lOmwudC5mfHAuYzojZmY4MDgwODAscy50OjM1fHMuZTpnLmZ8cC5jOiNmZmZmZmZmZixzLnQ6NTB8cy5lOmcuZnxwLmM6I2ZmZjBmMGYwLHMudDo1MHxzLmU6Zy5zfHAuYzojZmZjMGMwYzB8cC5zOi03NXxwLmw6LTgwLHMudDo1MHxzLmU6bHxwLnY6b2ZmLHMudDo0OXxzLmU6Zy5mfHAuYzojZmZlZGVkZWQscy50OjQ5fHMuZTpnLnN8cC5jOiNmZmVkZWRlZCxzLnQ6NDl8cy5lOmx8cC52Om9mZixzLnQ6NDl8cy5lOmwudHxwLmM6I2ZmZWRlZGVkLHMudDo0OXxzLmU6bC50LmZ8cC5jOiNmZjkxYmJkNSxzLnQ6Nzg1fHAuYzojZmZlZGVkZWQscy50OjUxfHAudjpvZmYscy50OjUxfHMuZTpnLmZ8cC5jOiNmZmVkZWRlZCxzLnQ6NjV8cy5lOmcuZnxwLmM6I2ZmZjBmMGYwLHMudDoxMDU5fHMuZTpsLnQuZnxwLmM6I2ZmYzNiNmEyLHMudDo2fHMuZTpnLmZ8cC5jOiNmZmM3ZDdkNCxzLnQ6NnxzLmU6bC50LmZ8cC5jOiNmZjkxYmJkNQ!4e0!5m1!5f2&amp;key=AIzaSyDiMIj9qJw-InawUWnu7kUK4GjDQ7dktMQ&amp;token=31375" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 256px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i12!2i1207!3i1538!4i256!2m3!1e0!2sm!3i579304112!3m17!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy50OjE3fHMuZTpnLmZ8cC5jOiNmZmZmZmZmZixzLnQ6MTh8cy5lOmcuZnxwLmM6I2ZmZmZmZmZmLHMudDoxOHxzLmU6bC50LmZ8cC5jOiNmZmMzYjZhMixzLnQ6ODF8cy5lOmcuZnxwLmM6I2ZmZmZmZmZmLHMudDo4MXxzLmU6bC50fHAuYzojZmZjM2I2YTIscy50OjgxfHMuZTpsLnQuZnxwLmM6I2ZmYzNiNmEyLHMudDo4MnxzLmU6Zy5mfHAuYzojZmZmZmZmZmYscy50OjEzMTN8cy5lOmcuZnxwLmM6I2ZmZmZmZmZmLHMudDoxMzE0fHMuZTpnLmZ8cC5jOiNmZmZmZmZmZixzLnQ6MzN8cy5lOmcuZnxwLmM6I2ZmZmZmZmZmLHMudDo0MHxzLmU6Zy5mfHAuYzojZmZmZmZmZmYscy50OjQwfHMuZTpsLml8cC5jOiNmZjgwODA4MCxzLnQ6NDB8cy5lOmwudC5mfHAuYzojZmY4MDgwODAscy50OjM1fHMuZTpnLmZ8cC5jOiNmZmZmZmZmZixzLnQ6NTB8cy5lOmcuZnxwLmM6I2ZmZjBmMGYwLHMudDo1MHxzLmU6Zy5zfHAuYzojZmZjMGMwYzB8cC5zOi03NXxwLmw6LTgwLHMudDo1MHxzLmU6bHxwLnY6b2ZmLHMudDo0OXxzLmU6Zy5mfHAuYzojZmZlZGVkZWQscy50OjQ5fHMuZTpnLnN8cC5jOiNmZmVkZWRlZCxzLnQ6NDl8cy5lOmx8cC52Om9mZixzLnQ6NDl8cy5lOmwudHxwLmM6I2ZmZWRlZGVkLHMudDo0OXxzLmU6bC50LmZ8cC5jOiNmZjkxYmJkNSxzLnQ6Nzg1fHAuYzojZmZlZGVkZWQscy50OjUxfHAudjpvZmYscy50OjUxfHMuZTpnLmZ8cC5jOiNmZmVkZWRlZCxzLnQ6NjV8cy5lOmcuZnxwLmM6I2ZmZjBmMGYwLHMudDoxMDU5fHMuZTpsLnQuZnxwLmM6I2ZmYzNiNmEyLHMudDo2fHMuZTpnLmZ8cC5jOiNmZmM3ZDdkNCxzLnQ6NnxzLmU6bC50LmZ8cC5jOiNmZjkxYmJkNQ!4e0!5m1!5f2&amp;key=AIzaSyDiMIj9qJw-InawUWnu7kUK4GjDQ7dktMQ&amp;token=64275" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 256px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i12!2i1207!3i1539!4i256!2m3!1e0!2sm!3i579304112!3m17!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy50OjE3fHMuZTpnLmZ8cC5jOiNmZmZmZmZmZixzLnQ6MTh8cy5lOmcuZnxwLmM6I2ZmZmZmZmZmLHMudDoxOHxzLmU6bC50LmZ8cC5jOiNmZmMzYjZhMixzLnQ6ODF8cy5lOmcuZnxwLmM6I2ZmZmZmZmZmLHMudDo4MXxzLmU6bC50fHAuYzojZmZjM2I2YTIscy50OjgxfHMuZTpsLnQuZnxwLmM6I2ZmYzNiNmEyLHMudDo4MnxzLmU6Zy5mfHAuYzojZmZmZmZmZmYscy50OjEzMTN8cy5lOmcuZnxwLmM6I2ZmZmZmZmZmLHMudDoxMzE0fHMuZTpnLmZ8cC5jOiNmZmZmZmZmZixzLnQ6MzN8cy5lOmcuZnxwLmM6I2ZmZmZmZmZmLHMudDo0MHxzLmU6Zy5mfHAuYzojZmZmZmZmZmYscy50OjQwfHMuZTpsLml8cC5jOiNmZjgwODA4MCxzLnQ6NDB8cy5lOmwudC5mfHAuYzojZmY4MDgwODAscy50OjM1fHMuZTpnLmZ8cC5jOiNmZmZmZmZmZixzLnQ6NTB8cy5lOmcuZnxwLmM6I2ZmZjBmMGYwLHMudDo1MHxzLmU6Zy5zfHAuYzojZmZjMGMwYzB8cC5zOi03NXxwLmw6LTgwLHMudDo1MHxzLmU6bHxwLnY6b2ZmLHMudDo0OXxzLmU6Zy5mfHAuYzojZmZlZGVkZWQscy50OjQ5fHMuZTpnLnN8cC5jOiNmZmVkZWRlZCxzLnQ6NDl8cy5lOmx8cC52Om9mZixzLnQ6NDl8cy5lOmwudHxwLmM6I2ZmZWRlZGVkLHMudDo0OXxzLmU6bC50LmZ8cC5jOiNmZjkxYmJkNSxzLnQ6Nzg1fHAuYzojZmZlZGVkZWQscy50OjUxfHAudjpvZmYscy50OjUxfHMuZTpnLmZ8cC5jOiNmZmVkZWRlZCxzLnQ6NjV8cy5lOmcuZnxwLmM6I2ZmZjBmMGYwLHMudDoxMDU5fHMuZTpsLnQuZnxwLmM6I2ZmYzNiNmEyLHMudDo2fHMuZTpnLmZ8cC5jOiNmZmM3ZDdkNCxzLnQ6NnxzLmU6bC50LmZ8cC5jOiNmZjkxYmJkNQ!4e0!5m1!5f2&amp;key=AIzaSyDiMIj9qJw-InawUWnu7kUK4GjDQ7dktMQ&amp;token=102682" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div></div></div></div><div style="z-index: 3; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px; touch-action: pan-x pan-y;"><div style="z-index: 4; position: absolute; left: 50%; top: 50%; width: 100%; transform: translate(0px, 0px);"><div style="position: absolute; left: 0px; top: 0px; z-index: 104; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 105; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 106; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 107; width: 100%;"></div></div></div><div class="gm-style-moc" style="z-index: 4; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px; opacity: 0;"><p class="gm-style-mot"></p></div></div><iframe aria-hidden="true" frameborder="0" tabindex="-1" style="z-index: -1; position: absolute; width: 100%; height: 100%; top: 0px; left: 0px; border: none;"></iframe><div style="pointer-events: none; width: 100%; height: 100%; box-sizing: border-box; position: absolute; z-index: 1000002; opacity: 0; border: 2px solid rgb(26, 115, 232);"></div><div></div><div></div><div></div><div></div><div><button draggable="false" aria-label="Toggle fullscreen view" title="Toggle fullscreen view" type="button" style="background: none rgb(255, 255, 255); display: none; border: 0px; margin: 10px; padding: 0px; text-transform: none; appearance: none; position: absolute; cursor: pointer; user-select: none; top: 0px; right: 0px;"></button></div><div></div><div></div><div></div><div></div><div></div><div><div style="margin-left: 5px; margin-right: 5px; z-index: 1000000; position: absolute; left: 0px; bottom: 0px;"><a target="_blank" rel="noopener" href="https://maps.google.com/maps?ll=40.762529,-73.957334&amp;z=12&amp;t=m&amp;hl=en-US&amp;gl=US&amp;mapclient=apiv3" title="Open this area in Google Maps (opens a new window)" style="position: static; overflow: visible; float: none; display: inline;"><div style="width: 66px; height: 26px; cursor: pointer;"><img alt="" src="https://maps.gstatic.com/mapfiles/api-3/images/google_white5_hdpi.png" draggable="false" style="position: absolute; left: 0px; top: 0px; width: 66px; height: 26px; user-select: none; border: 0px; padding: 0px; margin: 0px;"></div></a></div></div><div></div><div><div class="gmnoprint" style="z-index: 1000001; position: absolute; right: 182px; bottom: 0px;"><div draggable="false" class="gm-style-cc" style="user-select: none; height: 14px; line-height: 14px;"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; box-sizing: border-box; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(0, 0, 0); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><button draggable="false" aria-label="Keyboard shortcuts" title="Keyboard shortcuts" type="button" style="background: none; display: inline-block; border: 0px; margin: 0px; padding: 0px; text-transform: none; appearance: none; position: relative; cursor: pointer; user-select: none; color: rgb(0, 0, 0); font-family: inherit; line-height: normal;">Keyboard shortcuts</button></div></div></div><div class="gmnoprint" style="z-index: 1000001; position: absolute; right: 68px; bottom: 0px; width: 115px;"><div draggable="false" class="gm-style-cc" style="user-select: none; height: 14px; line-height: 14px;"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; box-sizing: border-box; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(0, 0, 0); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><button draggable="false" aria-label="Map Data" title="Map Data" type="button" style="background: none; display: none; border: 0px; margin: 0px; padding: 0px; text-transform: none; appearance: none; position: relative; cursor: pointer; user-select: none; color: rgb(0, 0, 0); font-family: inherit; line-height: normal;">Map Data</button><span>Map data ©2021 Google</span></div></div></div><div class="gmnoprint gm-style-cc" draggable="false" style="z-index: 1000001; user-select: none; height: 14px; line-height: 14px; position: absolute; right: 0px; bottom: 0px;"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; box-sizing: border-box; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(0, 0, 0); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a href="https://www.google.com/intl/en-US_US/help/terms_maps.html" target="_blank" rel="noopener" style="text-decoration: none; cursor: pointer; color: rgb(0, 0, 0);">Terms of Use</a></div></div><div class="gmnoscreen" style="position: absolute; right: 0px; bottom: 0px;"><div style="font-family: Roboto, Arial, sans-serif; font-size: 11px; color: rgb(0, 0, 0); direction: ltr; text-align: right; background-color: rgb(245, 245, 245);">Map data ©2021 Google</div></div></div></div></div></div>
<div class="button-direction position-absolute">
<a href="#" class="btn btn-sm btn-icon-left">
<i class="fas fa-location-arrow"></i>
Get Direction
</a>
</div>
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
<div class="card-body px-0 pt-6 pb-3">
<div class="photo-gallery d-flex flex-wrap justify-content-between">
<a href="../../images/shop/full-hotels-shop-2.jpg" class="photo-item" data-gtf-mfp="true" data-gallery-id="01">
<img src="../../images/listing/gallery-01.jpg" alt="Gallery 01">
</a>
<a href="../../images/listing/full-gallery-02.jpg" class="photo-item" data-gtf-mfp="true" data-gallery-id="01">
<img src="../../images/listing/gallery-02.jpg" alt="Gallery 02"></a>
<a href="../../images/listing/full-gallery-03.jpg" class="photo-item" data-gtf-mfp="true" data-gallery-id="01">
<img src="../../images/listing/gallery-03.jpg" alt="Gallery 03"></a>
<a href="../../images/listing/full-gallery-04.jpg" class="photo-item" data-gtf-mfp="true" data-gallery-id="01">
<img src="../../images/listing/gallery-04.jpg" alt="Gallery 04"></a>
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
<div class="image mr-3"><img src="../../images/listing/jobs-testimonial-1.png" alt="Contact me" class="rounded-circle"></div>
<div class="media-body lh-14 font-size-sm">
<span class="font-weight-semibold text-dark text-capitalize d-block font-size-md name">Ron Weasley</span>
<span class="text-gray d-block mb-2">San Francisco, CA, USA</span>
<div class="d-flex pb-4 align-items-center">
<a href="#" class="btn btn-primary font-size-base py-0 px-1 mr-2 rounded-sm">Follow</a>
<span class="text-dark font-weight-semibold d-inline-block mr-2">2,865</span>
<span class="text-gray">Followers</span>
</div>
</div>
</div>
</div>
<div class="card-body px-0 pb-3">
<div class="card-title text-uppercase text-dark font-weight-semibold font-size-md">
<span class="text-secondary d-inline-block mr-2"><i class="fas fa-envelope"></i></span>
<span>Contact me</span>
</div>
<div class="contact-form">
<form>
<div class="form-group mb-2">
<label class="sr-only" for="name">Name</label>
<input type="text" id="name" class="form-control form-control-sm border-0 bg-white" placeholder="Name:">
</div>
<div class="form-group mb-2">
<label class="sr-only" for="email">Email</label>
<input type="text" id="email" class="form-control form-control-sm border-0 bg-white" placeholder="Email Address:">
</div>
<div class="form-group mb-2">
<label class="sr-only" for="message">Message</label>
<textarea class="form-control border-0" id="message" placeholder="Message..."></textarea>
</div>
<button type="submit" class="btn btn-primary btn-block btn-sm">Send Message
</button>
</form>
</div>
</div>
</div>
<div class="card p-4 widget border-0 relate-listing bg-gray-06 rounded-0">
<div class="card-title d-flex mb-0 font-size-md font-weight-semibold text-dark text-uppercase border-bottom pb-2 lh-1">
<span>related listing</span>
</div>
<div class="card-body px-0 pb-0 pt-3">
<ul class="list-group list-group-flush">
<li class="list-group-item bg-transparent text-dark px-0 py-3 h-100">
<div class="store media align-items-stretch">
<div class="store-image">
<a href="listing-details-full-gallery.html">
<img src="../../images/shop/recent-view-1.jpg" alt="Recent view 1">
</a>
</div>
<div class="media-body pl-0 pl-sm-3 pt-4 pt-sm-0 pr-0">
<a href="listing-details-full-gallery.html" class="font-size-md font-weight-semibold text-dark d-inline-block mb-1 lh-11"><span class="letter-spacing-25">Canabo View Street,<br> Main St</span>
</a>
<div class="d-flex align-items-center mb-1">
<div class="pr-3"><span class="badge badge-warning d-inline-block mr-1">4.3</span><span class="number">6 rating</span>
</div>
</div>
<div>
<span class="d-inline-block mr-1"><i class="fal fa-map-marker-alt">
</i>
</span>
<a href="#" class="text-secondary text-decoration-none address">77
Main
St, Queen,
NY</a>
</div>
</div>
</div>
</li>
<li class="list-group-item bg-transparent text-dark px-0 py-3 h-100">
<div class="store media align-items-stretch">
<div class="store-image">
<a href="listing-details-full-gallery.html">
<img src="../../images/shop/recent-view-2.jpg" alt="Recent view 1">
</a>
</div>
<div class="media-body pl-0 pl-sm-3 pt-4 pt-sm-0 pr-0">
<a href="listing-details-full-gallery.html" class="font-size-md font-weight-semibold text-dark d-inline-block mb-1 lh-11"><span class="letter-spacing-25">Japan's Sushi <br> 10th Ave St</span>
 </a>
<div class="d-flex align-items-center mb-1">
<div class="pr-3"><span class="badge badge-success d-inline-block mr-1">5.0</span><span class="number">7 rating</span>
</div>
</div>
<div>
<span class="d-inline-block mr-1"><i class="fal fa-map-marker-alt">
</i>
</span>
<a href="#" class="text-secondary text-decoration-none address">99
10th Ave St,
Mahattan</a>
</div>
</div>
</div>
</li>
</ul>
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
</div>

@endisset
@endsection