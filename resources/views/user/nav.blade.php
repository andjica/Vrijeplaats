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

<div class="mobile-app-footer">
      <div class="container">
      <div class="toolbar-inner row">
      <div class="col-lg-2"><a href="{{asset('/')}}" class="link"><img class="ucos" src="https://cdn-icons-png.flaticon.com/512/846/846449.png">home</a></div>
      <div class="col-lg-2"><a href="{{asset('/categorie/location')}}" class="link"><img class="ucos" src="https://cdn-icons-png.flaticon.com/512/2618/2618576.png">deals </a></div>
      <div class="col-lg-2"><a href="{{asset('/')}}" class="link"><img class="ucos" src="https://cdn-icons-png.flaticon.com/512/1216/1216895.png">dichtbij </a></div>
      <div class="col-lg-2"><a href="{{asset('/')}}" class="link"><img class="ucos" src="https://cdn-icons-png.flaticon.com/512/879/879757.png">acties </a></div>
      <div class="col-lg-2"><a href="{{asset('/')}}admin-home" class="link"><img class="ucos" src="https://cdn-icons-png.flaticon.com/512/2099/2099058.png">settings </a></div>
    </div>
      </div>
    </div> 

    <style>
        @media screen and (max-width:668px){
   
   .logo-image {
border-radius: 100%;
width: 170px !important;
position: fixed;
text-align: center;
margin: 0 auto;
right: 18%;
left: 16%;
top: -54px !important;
}
.col-lg-4.mb-4.mb-lg-0.px-0.px-lg-4 {
padding: 20px !important;
background: #f5f5f5;
color: white !important;
width: 100% !important;
max-width: 100% !important;
margin-right: 10px;
border-radius: 20px !important;
height: 100% !important;
color: white !important;
}
.form-search.form-search-style-02 .btn {
font-size: 20px;
border-radius: 20px;
color: white !important;
position: relative;
top: 0px !important;
left: 0px !important;
}
.h890 {
width: 100% !important;
margin: 0px auto;
}
img.ucos {
max-width: 24px;
margin: 0px auto;
}
.p-4.p-sm-5.rounded-3.bg-coupon {
display: none;
}
.main-footer {
padding-bottom: 55px;
display: none;
}
.col-lg-2 {
width: auto;
display: grid;
text-align: center;
margin: 0px auto;
justify-content: center;
align-items: center;
}
.mobile-app-footer {
position: fixed;
width: 100%;
bottom: 0;
background: white;
z-index: 100000000 !important;
text-align: center;
margin: 0px auto;
justify-content: center;
align-items: center;
}

a.link {
color: black;
font-weight: bold;
}
.mobile-app-footer {
position: fixed;
width: 100%;
bottom: 0;
}
.store .content-left .badge {
padding: 5px 8px;
width: 72px;
height: 40px;
text-align: center;
border-radius: 10px;
padding-top: 10px;
font-size: 19px;
background: blue;
margin-left: 11px !important;
}
}

@media screen and (min-width:669px){
.mobile-app-footer {
display:none !important;
}
}
    </style>