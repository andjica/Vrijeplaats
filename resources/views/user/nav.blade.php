<header id="header" class="main-header header-sticky header-sticky-smart header-style-01 header-float text-uppercase">
<div class="sticky-area-wrap"><div class="header-wrapper sticky-area" style="      height: 80px;  background: #ED008c;">
<div class="container container-1720">
<nav class="navbar navbar-expand-xl">
<div class="header-mobile d-flex d-xl-none flex-fill justify-content-between align-items-center">
<div class="navbar-toggler toggle-icon" data-toggle="collapse" data-target="#navbar-main-menu">
<span></span>
</div>
<a class="navbar-brand navbar-brand-mobile" href="{{asset('/')}}">
<img src="{{asset('/images/')}}/pp-removebg-preview.png" alt="Vrijeplaats">
</a>
<a class="mobile-button-search" href="#search-popup" data-gtf-mfp="true" data-mfp-options="{&quot;type&quot;:&quot;inline&quot;,&quot;mainClass&quot;:&quot;mfp-move-from-top mfp-align-top search-popup-bg&quot;,&quot;closeOnBgClick&quot;:false,&quot;showCloseBtn&quot;:false}">
    <i class="fas fa-search"></i></a>
</div>
<div class="collapse navbar-collapse" id="navbar-main-menu" style="    height: 80px;">
<a class="navbar-brand d-none d-xl-block mr-auto" style="max-height: 80px !important; border-radius: 100%;" href="{{asset('/')}}">
<img src="{{asset('/images/')}}/pp-removebg-preview.png" style=" border-radius: 100%;" alt="TheDir">
</a>
<ul class="navbar-nav">
<li class="nav-item">
<a class="nav-link text-white" href="{{asset('/')}}">Home</a>

</li>
<li class="nav-item">
<a class="nav-link" href="{{asset('about')}}">Over Vrijeplaats</a>

</li>
<li class="nav-item">
<a class="nav-link" href="{{asset('contact')}}">Contact</a>

</li>
<li class="nav-item">

<a class="mobile-button-search nav-link" href="#search-popup" data-gtf-mfp="true" data-mfp-options="{&quot;type&quot;:&quot;inline&quot;,&quot;mainClass&quot;:&quot;mfp-move-from-top mfp-align-top search-popup-bg&quot;,&quot;closeOnBgClick&quot;:false,&quot;showCloseBtn&quot;:false}">
    <i class="fas fa-search"></i></a>

</li>

@if(auth()->user())
<li class="nav-item dropdown">
<a class="nav-link" href="{{asset('/logout')}}"> Uitloggen</a>
</li>
@else
<li class="nav-item dropdown">
<a class="nav-link" href="{{asset('/login')}}"><i class="fas fa-sign-out-alt"></i> Login</a>
</li>
@endif
</ul>

<div class="header-customize justify-content-end align-items-center d-none d-xl-flex">
@if(auth()->user())
<a href="{{asset('/home')}}" class="btn btn-info mr-2">Portaal</a>

@else

@endif
<div class="header-customize-item button">
<a href="{{asset('add-adv')}}" class="btn btn-primary btn-icon-right">Deals

<i class="fas fa-angle-right"></i></a>
</div>
</div>

</div>
</nav>
</div>
</div></div>
</header>