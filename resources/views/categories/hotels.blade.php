@extends('layouts.app')

@section('content')
@include('user.top-campain')
<section id="section-01" class="">
<div class="">
<div class="row">
    <div class="col-lg-6">
    <div class="row">
    <div class="col-lg-12 pr-0">
        @foreach($posts as $post)
                <div class="store media align-items-stretch bg-white">
                
                <div class="position-relative store-image" style="background-image: url()}}')">
                <div class="image-content position-absolute d-flex align-items-center">
                <div class="content-right ml-auto d-flex">
                <a href="images/shop/full-hotels-shop-4.jpg" class="item viewing" data-toggle="tooltip" data-placement="top" title="" data-gtf-mfp="true" data-original-title="Quickview">
                <i class="fas fa-location-arrow"></i>
                </a>
                <a href="#" class="item marking" data-toggle="tooltip" data-placement="top" title="" data-original-title="Bookmark"><i class="fal fa-bookmark"></i></a>
                </div>
                </div>
                </div>
                
                <div class="media-body pt-4 pb-3 px-5">
                <a href="listing-details-full-image.html" class="h5 text-dark d-inline-block mb-2"><span class="letter-spacing-25">{{$post->title}}</span></a>
                <ul class="list-inline store-meta mb-4 font-size-sm d-flex align-items-center flex-wrap">
                <li class="list-inline-item"><span class="badge badge-success d-inline-block mr-1">4.8</span><span>2 rating</span>
                </li>
                <li class="list-inline-item separate"></li>
                <li class="list-inline-item"><span class="mr-1">From</span>
                <span class="text-danger font-weight-semibold">${{$post->price_first}}</span></li>
                <li class="list-inline-item separate"></li>
                <li class="list-inline-item"><span class="text-green">There are still {{$post->count_of_ticket}} tickets
                <i class="fas fa-gift fa-2x"></i></span></li>
                </ul>
                <div class="media">
               
                    @php 
                    $images = $post->images;
                    $images = $images->first();
                    
                    @endphp
                    @isset($images)
                    <img src="{{asset('/images/posts/'.$images->url)}}" alt="testimonial" class="img-fluid" style="max-width:40%; border-radius:10px;">
                    @endisset
                <div class=" font-size-sm pl-3" style ="    margin-top: 30px;">
                {{$post->title}}<br>
                  {{$post->main_description}}<br>
                <a href="" class="btn  btn-sm btn-success mt-4"  >Go to buy ticket and find out</a>
                </div>
                </div>
                <div class="border-top pt-3 mt-5 lh-12">
                <span class="d-inline-block mr-1">
                    <i class="fas fa-location-arrow"></i>
                 </span>
                <a href="#" class="text-secondary text-decoration-none address">92
                Halsey St,
                Brooklyn, NY</a>
                </div>
                </div>
                </div>
                @endforeach
            </div>
        </div>
        </div>
        @php
           $postfirst =   $posts->first();
          
        @endphp
        @isset($postfirst)
        <div class="col-lg-6 pl-0">
        <div class="mapouter"><div class="gmap_canvas">
            <iframe width="1080" height="1080" id="gmap_canvas" src="https://maps.google.com/maps?q={{$postfirst->geo_city_latitude}}+{{$postfirst->geo_city_longlatitude}}&t=&z=13&ie=UTF8&iwloc=&output=embed"
                 frameborder="0" scrolling="no" marginheight="0" 
                 marginwidth="0"></iframe><a href="https://123movies-to.org"></a>
                    <br><style>.mapouter{position:relative;text-align:right;height:1080px;width:1080px;}</style>
                    <a href="https://www.embedgooglemap.net">embedgooglemap.net</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:1080px;width:1080px;}</style>
                </div></div>
        </div>
        @endisset
    <div>
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
@endsection