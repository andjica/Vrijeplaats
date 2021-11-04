<header id="header" class="main-header header-sticky header-sticky-smart header-style-01 header-float text-uppercase">
<div class="sticky-area-wrap"><div class="header-wrapper sticky-area" style="      height: 80px;  background: #ED008c;">
<div class="container container-1720">
<nav class="navbar navbar-expand-xl">
<div class="header-mobile d-flex d-xl-none flex-fill justify-content-between align-items-center">
<div class="navbar-toggler toggle-icon" data-toggle="collapse" data-target="#navbar-main-menu">
<span></span>
</div>
<a class="navbar-brand navbar-brand-mobile" href="{{asset('/')}}">
<img src="{{asset('/images/')}}/logo.jpeg" alt="Vrijeplaats">
</a>
<a class="mobile-button-search" href="#search-popup" data-gtf-mfp="true" data-mfp-options="{&quot;type&quot;:&quot;inline&quot;,&quot;mainClass&quot;:&quot;mfp-move-from-top mfp-align-top search-popup-bg&quot;,&quot;closeOnBgClick&quot;:false,&quot;showCloseBtn&quot;:false}">
    <i class="fas fa-search"></i></a>
</div>
<div class="collapse navbar-collapse" id="navbar-main-menu" style="    height: 80px;">
<a class="navbar-brand d-none d-xl-block mr-auto" style="max-height: 80px !important; border-radius: 100%;" href="{{asset('/')}}">
<img src="{{asset('/images/')}}/logo.jpeg" style=" border-radius: 100%;" alt="TheDir">
</a>
<ul class="navbar-nav">
<li class="nav-item">
<a class="nav-link text-white" href="#">Home <span class="caret"><i class="fa fa-angle-down"></i></span></a>
<ul class="sub-menu x-animated x-fadeInUp">
<li class="nav-item"><a class="nav-link" href="{{asset('/')}}">Home</a>
</li>
@foreach($categories as $c)
<li class="nav-item"><a class="nav-link" href="{{asset('/')}}">{{$c->name}}</a>
</li>
@endforeach
</ul>
</li>
<li class="nav-item">
<a class="nav-link" href="#">Test<span class="caret"><i class="fa fa-angle-down"></i></span></a>
<div class="sub-menu x-menu-mega x-animated x-fadeInUp width-800">
<div class="container">
<div class="row w-100">
<div class="col-lg-4">
<h5>Group 01</h5>
<ul class="mega-menu-col">

<li class="nav-item"><a class="nav-link" href="elements/button.html">Buttons</a>
</li>

</ul>
</div>
<div class="col-lg-4">
<h5>Group 02</h5>
<ul class="mega-menu-col">
<li class="nav-item"><a class="nav-link" href="elements/heading.html">Heading</a>
</li>
<li class="nav-item"><a class="nav-link" href="elements/icon-box.html">Icon
box</a></li>
<li class="nav-item"><a class="nav-link" href="elements/image-box.html">Image
box</a></li>
<li class="nav-item"><a class="nav-link" href="elements/listing.html">Listing</a>
</li>
<li class="nav-item"><a class="nav-link" href="elements/post.html">Post</a>
</li>
</ul>
</div>
<div class="col-lg-4">
<h5>Group 03</h5>
<ul class="mega-menu-col">
<li class="nav-item"><a class="nav-link" href="elements/store.html">Store</a>
</li>
<li class="nav-item"><a class="nav-link" href="elements/tab.html">Tab</a>
</li>
<li class="nav-item"><a class="nav-link" href="elements/table-listing.html">Table
listing</a></li>
<li class="nav-item"><a class="nav-link" href="elements/testimonial.html">Testimonial</a>
</li>
<li class="nav-item"><a class="nav-link" href="elements/widget.html">Widget</a>
</li>
</ul>
</div>
</div>
</div>
</div>
</li>
<li class="nav-item">

<a class="mobile-button-search nav-link" href="#search-popup" data-gtf-mfp="true" data-mfp-options="{&quot;type&quot;:&quot;inline&quot;,&quot;mainClass&quot;:&quot;mfp-move-from-top mfp-align-top search-popup-bg&quot;,&quot;closeOnBgClick&quot;:false,&quot;showCloseBtn&quot;:false}">
    <i class="fas fa-search"></i></a>

</li>
<li class="nav-item">
<a class="nav-link" href="#">test<span class="caret"><i class="fa fa-angle-down"></i></span></a>
<ul class="sub-menu x-animated x-fadeInUp">
<li class="nav-item">
<a class="nav-link" href="#"> layout
<span class="caret"><i class="fa fa-angle-down"></i></span>
</a>
<ul class="sub-menu x-animated x-fadeInUp">
<li class="nav-item"><a class="nav-link" href="explore-full-map-grid.html"> full
map grid</a></li>
<li class="nav-item"><a class="nav-link" href="explore-full-map-list.html"> full
map list</a></li>
<li class="nav-item"><a class="nav-link" href="explore-half-map-grid.html"> half
map grid</a></li>
<li class="nav-item"><a class="nav-link" href="explore-half-map-list.html"> half
map list</a></li>
<li class="nav-item"><a class="nav-link" href="explore-sidebar-grid.html"> sidebar
grid</a></li>
<li class="nav-item"><a class="nav-link" href="explore-sidebar-list.html"> sidebar
list</a></li>
</ul>
</li>
<li class="nav-item">
<a class="nav-link" href="#">Listing details
<span class="caret"><i class="fa fa-angle-down"></i></span>
</a>
<ul class="sub-menu x-animated x-fadeInUp">
<li class="nav-item"><a class="nav-link" href="listing-details-full-gallery.html">
 full gallery</a></li>
<li class="nav-item"><a class="nav-link" href="listing-details-full-image.html">
full image</a></li>
<li class="nav-item"><a class="nav-link" href="listing-details-full-map.html">
full map</a></li>
<li class="nav-item"><a class="nav-link" href="listing-details-gallery.html">gallery</a>
</li>
<li class="nav-item"><a class="nav-link" href="listing-details-image.html"> image</a>
</li>
<li class="nav-item"><a class="nav-link" href="listing-details-no-image.html"> no
image</a></li>
</ul>
</li>
</ul>
</li>
@if(auth()->user())
<li class="nav-item dropdown">
<a class="nav-link" href="{{asset('/logout')}}"><i class="fas fa-sign-out-alt"></i> Logout</a>
</li>
@else
<li class="nav-item dropdown">
<a class="nav-link" href="{{asset('/login')}}"><i class="fas fa-sign-out-alt"></i> Login</a>
</li>
@endif
</ul>

<div class="header-customize justify-content-end align-items-center d-none d-xl-flex">
@if(auth()->user())
<a href="{{asset('/home')}}" class="btn btn-info mr-2">Go to panel</a>

@else

@endif
<div class="header-customize-item button">
<a href="{{asset('add-adv')}}" class="btn btn-primary btn-icon-right">Add
Listing
<i class="fas fa-angle-right"></i></a>
</div>
</div>

</div>
</nav>
</div>
</div></div>
</header>