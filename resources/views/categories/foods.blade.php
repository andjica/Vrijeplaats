@extends('layouts.app')

@section('content')
@include('user.top-campain')
<section id="section-01" class="">
<nav aria-label="breadcrumb m-3">
  <ol class="breadcrumb m-3 bg-light">
    <li class="breadcrumb-item"><a href="{{asset('/')}}">Home</a></li>
    @isset($category)
    <li class="breadcrumb-item"><a href="{{asset('/categorie/'.$category->link)}}">{{$category->name}}</a></li>
    @endisset
  </ol>
</nav>
<div class="container" id="container-desk">

<div class="row">
    <div class="col-lg-6">

    <div class="store-listing-style-04">
    @foreach($restourants as $p)
    
    <div class="store-listing-item">
                    <div class="d-flex align-items-center flex-wrap flex-lg-nowrap border-bottom py-4 py-lg-0">
                    <div class="store media align-items-stretch py-4">
                    @php 
                    $images = $p->images;
                    $images = $images->first();
                    
                    @endphp
                    @isset($images)
                    <a href="listing-details-full-image.html" class="store-image">
                    <img src="{{asset('/images/posts/'.$images->url)}}" alt="{{$images->alt}}">
                    </a>
                    @endisset
                    <div class="media-body px-0 pt-4 pt-md-0">
                    <a href="{{asset('/categorie='.$p->category->link.'/city='.$p->city->name.'/name='.$p->title)}}" class="font-size-lg font-weight-semibold text-dark d-inline-block mb-2 lh-1">
                        <span class="letter-spacing-25">{{$p->title}} </span>
                    </a>
                    <ul class="list-inline store-meta mb-3 font-size-sm d-flex align-items-center flex-wrap">
                    <li class="list-inline-item">
                        <span class="badge badge-success d-inline-block mr-1">{{$p->count_of_ticket}}</span><span class="number">numm of ticket</span>
                    </li>
                    <li class="list-inline-item separate"></li>
                    <li class="list-inline-item"><span class="mr-1">From</span><span class="text-danger font-weight-semibold">???{{$p->price_first}}</span>
                    </li>
                    <li class="list-inline-item separate"></li>
                    <li class="list-inline-item"><a href="#" class="link-hover-secondary-primary">
                   
                    <i class="fas fa-gift"></i>
                         
                    <span>{{$p->category->name}}</span>
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
                  
                    <a href="{{asset('/categorie='.$p->category->link.'/city='.$p->city->name.'/name='.$p->title)}}" class="btn btn-primary btn-icon-left  mb-2 mb-sm-0 px-5 font-size-md">
                   
                        FIND OUT
                    </a>
                    </div>
                    </div>
                    </div>
        
        @endforeach
    </div>
        </div>
        <div class="col-lg-6 pl-0">
        <div class="mapouter"><div class="gmap_canvas">
            <iframe width="1080" height="1080" id="gmap_canvas" src="https://maps.google.com/maps?q=rotterdam&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://123movies-to.org"></a><br><style>.mapouter{position:relative;text-align:right;height:1080px;width:1080px;}</style><a href="https://www.embedgooglemap.net">embedgooglemap.net</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:1080px;width:1080px;}</style></div></div>
        </div>
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