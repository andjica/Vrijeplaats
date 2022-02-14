<header id="header" class="main-header header-sticky header-sticky-smart header-style-10 text-uppercase bg-white">
<div class="sticky-area-wrap"><div class="header-wrapper sticky-area border-bottom" style="">
<div class="container-fluid">
<nav class="navbar navbar-expand-xl">
<div class="header-mobile d-flex d-xl-none flex-fill justify-content-between align-items-center">

<div class="navbar-toggler toggle-icon" data-toggle="collapse" data-target="#navbar-main-menu">
<span></span>
</div>
<a href="{{asset('/')}}">
<img src="{{asset('/images/')}}/logosmall.jpeg" alt="Vrijeplaats" class="logo-image">
</a>

</div>
<div class="collapse navbar-collapse" id="navbar-main-menu" style="    height: 80px;">

<ul class="navbar-nav container">

<div class="col-lg-2" style="    margin-left: -100px; margin-right:-220px;">
<a class="navbar-brand navbar-brand-mobile" href="{{asset('/')}}">
<img src="{{asset('/images/')}}/logosmall.jpeg" alt="Vrijeplaats" style="border-radius:100%;">
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
    justify-content: right; margin-right: -100px;">

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
</div></div>
</header>

<Style>
    .dashboards .facts-box .card {
    padding: 37px 50px;
    color: #fff;
    background: blue;
    height: 100%;
    border-radius: 16px !important;
    text-align: center;
    white-space: nowrap;
}
a.nav-link.nh {
    border: 2px solid white;
    border-radius: 22px;
    height: 38px;
    width: 161px;
    text-align: center;
    color: white !important;
    padding-left: 19px !important;
}
span.font-size-md.font-weight-semibold.text-uppercase.text-dark.lh-13 {
    font-size: 12px !important;
    text-transform: capitalize !important;
    color: white !important;

}
.card-body.d-flex.align-items-center.p-6.bg-white {
    display: grid !important;
    text-align: center;
    background: blue !important;
    border-radius: 16px !important;
    color: white !important;
}
.card-body.d-flex.align-items-center.py-6.px-8.bg-white {
    display: grid !important;
    text-align: center;
    color: white !important;

}
.card-body.d-flex.align-items-center.py-6.px-8.bg-white {
    display: grid !important;
    text-align: center;
    background: blue !important;
    border-radius: 16px !important;
    color: white !important;
}
</Style>