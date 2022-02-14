<header id="header" class="main-header  header-sticky header-sticky-smart header-style-10 text-uppercase z-header">
<div class="sticky-area-wrap"><div class="header-wrapper sticky-area border-bottom" style="">
<div class="container-fluid">
<nav class="navbar navbar-expand-xl">
<div class="header-mobile d-flex d-xl-none flex-fill justify-content-between align-items-center">

<div class="navbar-toggler toggle-icon" data-toggle="collapse" data-target="#navbar-main-menu">
<span></span>
</div>
<a href="{{asset('/')}}">
<img src="{{asset('/images/')}}/pp-removebg-preview.png" alt="Vrijeplaats" class="logo-image">
</a>

</div>
<div class="collapse navbar-collapse" id="navbar-main-menu" style="    height: 80px;">

<ul class="navbar-nav container">

<div class="col-lg-2" style="    margin-left: -100px; margin-right:-220px;">
<a class="navbar-brand navbar-brand-mobile" href="{{asset('/')}}">
<img src="{{asset('/images/')}}/pp-removebg-preview.png" alt="Vrijeplaats" style="border-radius:100%;">
</a>
</div>
<div class="col-lg-5 bruv">
  
<li class="nav-item">
<a class="nav-link text-dark" href="#">Home <span class="caret"><i class="fa fa-angle-down"></i></span></a>
<ul class="sub-menu x-animated x-fadeInUp">
<li class="nav-item"><a class="nav-link" href="{{asset('/')}}">Home</a>
</li>
@foreach($categories as $c)
<li class="nav-item"><a class="nav-link" href="{{asset('/categorie/'.$c->link)}}">{{$c->name}}</a>
</li>
@endforeach
</ul>
</li>
<li class="nav-item">
<a class="nav-link" href="{{asset('about')}}">Over Vrijeplaats</a>
</li>
<li class="nav-item">
<a class="nav-link" href="{{asset('become-partner')}}">Partner worden
</a>
</li>
<li class="nav-item">
<a class="nav-link" href="{{asset('contact')}}">Contact</a>



</li>
<li class="nav-item mobile12">

<a class="mobile-button-search nav-link" aria-label="Search popup" href="#search-popup" data-gtf-mfp="true" data-mfp-options="{&quot;type&quot;:&quot;inline&quot;,&quot;mainClass&quot;:&quot;mfp-move-from-top mfp-align-top search-popup-bg&quot;,&quot;closeOnBgClick&quot;:false,&quot;showCloseBtn&quot;:false}">
    <i class="fas fa-search"></i></a>

</li>
</div>



<div class="col-lg-5 bruv" style="float: right;
    text-align: right;
    justify-content: right; ">

  @if(auth()->user())
<li class="nav-item dropdown">
<a class="nav-link" href="{{asset('/logout')}}"> Uiloggen</a>
</li>


<li class="nav-item">

<a class="nav-link" href="{{asset('/home')}}"> Portaal</a>

</li>
@else
<li class="nav-item dropdown">
<a class="nav-link" href="{{asset('/login')}}"> Inloggen</a>
</li>


@endif
<li class="nav-item">
<a href="{{asset('add-adv')}}" class="nav-link">Deal
plaatsen
</a>


</li>
<li class="nav-item dropdown ">
<a class="nav-link nh" href="{{asset('/register')}}"><i class="fas fa-user-alt" style="margin-right:10px;"></i> Aanmelden</a>
</li>
  </div>
</div>



</ul>



               
            </nav>
        </div>  
    </div>
</div>
</header>



<style>
 
  .home-main-intro::after {
    content: '';
    position: absolute;
    z-index: 2;
    top: 0;
    background-image: url(./images/10820.jpg) !im;
    left: 0;
    background-size: contain;
    width: 100%;
    height: 100%;
}
.main-header .navbar-brand img{
  max-height:212px !important;
}
  .header-style-10 .nav-item {
    -webkit-transition: padding .5s;
    transition: padding .5s;
    color: white !important;
}
.navbar-expand-xl .navbar-nav .nav-link {
    padding-right: 0.5rem;
    padding-left: 0.5rem;
    color: white !important;
}
  .header-wrapper.sticky-area.border-bottom {
    position: fixed;
    background: #ed008c!important;
    top: 0px;
    height: 88px;
}
.top-campaign {
    background: #002bff;
    width: 68% !important;
    margin: 0px auto;
    border-radius: 20px;
    z-index: 100000000000 !important;
    position: fixed !important;
    height: 68px;
    top: 60px;
    line-height: 3;
    left: 15.5% !important;
    right: 15.5% !important;
}
.home-main-intro::after {
    content: '';
    position: absolute;
    z-index: 2;
    top: 0;
    background: white !important;
    left: 0;
    width: 100%;
    height: 100%;
    background: -webkit-gradient(linear,left top,left bottom,color-stop(50%,transparent),color-stop(rgba(255,255,255,.5)),to(white));
    background: linear-gradient(to bottom,transparent 50%,rgba(255,255,255,.5),#fff);
}
  .nh{
	border: 2px solid white !important;
    border-radius: 20px !important;
    padding: 4px !important;
    width: 152px !important;
    text-align: center;
    justify-content: center;
}
.mb-8, .my-8 {
    margin-bottom: 7.125rem!important;
}
.bruv{
  padding-left:0px !important;
}

.main-header .navbar-brand img {
    max-height: 212px !important;
    position: relative;
    left: -100px;
    top: 20px;
}
</style>