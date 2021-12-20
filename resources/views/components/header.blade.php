<header id="header" class="main-header  header-sticky header-sticky-smart header-style-10 text-uppercase z-header">
<div class="sticky-area-wrap"><div class="header-wrapper sticky-area border-bottom" style="">
<div class="container-fluid">
<nav class="navbar navbar-expand-xl">
<div class="header-mobile d-flex d-xl-none flex-fill justify-content-between align-items-center">

<div class="navbar-toggler toggle-icon" data-toggle="collapse" data-target="#navbar-main-menu">
<span></span>
</div>
<a href="{{asset('/')}}">
<img src="{{asset('/images/')}}/logo.jpeg" alt="Vrijeplaats" class="logo-image">
</a>

</div>
<div class="collapse navbar-collapse" id="navbar-main-menu" style="    height: 80px;">

<ul class="navbar-nav container">


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

<div class="col-lg-2">
<a class="navbar-brand navbar-brand-mobile" href="{{asset('/')}}">
<img src="{{asset('/images/')}}/logo.jpeg" alt="Vrijeplaats" style="border-radius:100%;">
</a>
</div>

<div class="col-lg-5 bruv">
<li> 
  <a class="mobile-button-search" aria-label="Search popup" href="#search-popup" data-gtf-mfp="true" data-mfp-options="{&quot;type&quot;:&quot;inline&quot;,&quot;mainClass&quot;:&quot;mfp-move-from-top mfp-align-top search-popup-bg&quot;,&quot;closeOnBgClick&quot;:false,&quot;showCloseBtn&quot;:false}">
    <i class="fas fa-search"></i></a></li>
  @if(auth()->user())
<li class="nav-item dropdown">
<a class="nav-link" href="{{asset('/logout')}}"><i class="fas fa-sign-out-alt"></i> Uiloggen</a>
</li>


<li class="nav-item">

<a class="mr-2 btn btn-info" href="{{asset('/home')}}"><i class="fas fa-sign-out-alt"></i> Portaal</a>

</li>
@else
<li class="nav-item dropdown">
<a class="nav-link" href="{{asset('/login')}}"><i class="fas fa-sign-out-alt"></i> Inloggen</a>
</li>
<li class="nav-item dropdown">
<a class="nav-link" href="{{asset('/register')}}">Aanmelden</a>
</li>

@endif
<li class="nav-item">
<a href="{{asset('add-adv')}}" class="nav-link">Deal
plaatsen
<i class="fas fa-angle-right"></i></a>


</li>
  </div>
</div>



</ul>



               
            </nav>
        </div>  
    </div>
</div>
</header>

