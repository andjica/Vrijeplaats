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
.col-lg-7.text-center.text-lg-start {
    display: none;
}
svg.svg-inline--fa.fa-home.fa-w-18 {
    font-size: 25px;
    text-align: center;
    margin: 0px auto;
    color: #004eff;
}

a.link {
    color: black;
    font-weight: bold;
    font-size: 12px;
    color: #004eff;
}
.row.mb-8 {
    margin-top: -224px !important;
}
.bleucont {
    background: #004eff !important;
    margin-top: -38px;
}
svg.svg-inline--fa.fa-cog.fa-w-16 {
    font-size: 24px;
    margin: 0px auto;
    color: #004eff;
}

p.font-weight-normal.text-dark.mb-0.fadeInDown.animated.m-2.mb-5 {
    display: none;
}
h3 {
    font-size: 0.875rem;
    margin-top: -20px;
    margin-bottom: -20px;
}
.bg-blue {
    background: blue;
    border-radius: 10px;
    display: flex;
    overflow-x: scroll;
}
button.card-pink.border-0.link-hover-dark-white.icon-box-style-01.shadow-lg {
    width: 99px !important;
    height: 99px !important;
    border-radius: 20px;
    background: white !important;
    color: black !important;
}
.form-search.form-search-style-02 .btn {
    font-size: 20px;
    border-radius: 20px;
    color: white !important;
    position: relative;
    top: 0px !important;
    left: 0px !important;
    background: #ed008c !important;
    width: 100%;
}
}

@media screen and (min-width:669px){
.mobile-app-footer {
display:none !important;
}
}
</style>
<div class="mobile-app-footer">
      <div class="container">
      <div class="toolbar-inner row">
      <div class="col-lg-2"><a href="{{asset('/')}}" class="link"><svg class="svg-inline--fa fa-home fa-w-18" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="home" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M280.37 148.26L96 300.11V464a16 16 0 0 0 16 16l112.06-.29a16 16 0 0 0 15.92-16V368a16 16 0 0 1 16-16h64a16 16 0 0 1 16 16v95.64a16 16 0 0 0 16 16.05L464 480a16 16 0 0 0 16-16V300L295.67 148.26a12.19 12.19 0 0 0-15.3 0zM571.6 251.47L488 182.56V44.05a12 12 0 0 0-12-12h-56a12 12 0 0 0-12 12v72.61L318.47 43a48 48 0 0 0-61 0L4.34 251.47a12 12 0 0 0-1.6 16.9l25.5 31A12 12 0 0 0 45.15 301l235.22-193.74a12.19 12.19 0 0 1 15.3 0L530.9 301a12 12 0 0 0 16.9-1.6l25.5-31a12 12 0 0 0-1.7-16.93z"></path></svg><!-- <i class="fa fa-home"> </i> Font Awesome fontawesome.com -->home</a></div>
      <div class="col-lg-2"><a href="{{asset('/')}}" class="link"><svg class="svg-inline--fa fa-handshake fa-w-20" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="handshake" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg="" style="
    margin: 0px auto;
    font-size: 23px;
    color: #004eff;
"><path fill="currentColor" d="M434.7 64h-85.9c-8 0-15.7 3-21.6 8.4l-98.3 90c-.1.1-.2.3-.3.4-16.6 15.6-16.3 40.5-2.1 56 12.7 13.9 39.4 17.6 56.1 2.7.1-.1.3-.1.4-.2l79.9-73.2c6.5-5.9 16.7-5.5 22.6 1 6 6.5 5.5 16.6-1 22.6l-26.1 23.9L504 313.8c2.9 2.4 5.5 5 7.9 7.7V128l-54.6-54.6c-5.9-6-14.1-9.4-22.6-9.4zM544 128.2v223.9c0 17.7 14.3 32 32 32h64V128.2h-96zm48 223.9c-8.8 0-16-7.2-16-16s7.2-16 16-16 16 7.2 16 16-7.2 16-16 16zM0 384h64c17.7 0 32-14.3 32-32V128.2H0V384zm48-63.9c8.8 0 16 7.2 16 16s-7.2 16-16 16-16-7.2-16-16c0-8.9 7.2-16 16-16zm435.9 18.6L334.6 217.5l-30 27.5c-29.7 27.1-75.2 24.5-101.7-4.4-26.9-29.4-24.8-74.9 4.4-101.7L289.1 64h-83.8c-8.5 0-16.6 3.4-22.6 9.4L128 128v223.9h18.3l90.5 81.9c27.4 22.3 67.7 18.1 90-9.3l.2-.2 17.9 15.5c15.9 13 39.4 10.5 52.3-5.4l31.4-38.6 5.4 4.4c13.7 11.1 33.9 9.1 45-4.7l9.5-11.7c11.2-13.8 9.1-33.9-4.6-45.1z"></path></svg><!-- <i class="fa fa-handshake"></i> Font Awesome fontawesome.com --><a href="" class="link">deals </a></div>
      <div class="col-lg-2"><svg class="svg-inline--fa fa-map-marker-alt fa-w-12" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="map-marker-alt" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg="" style="
    margin: 0px auto;
    text-align: center;
    font-size: 22px;
    color: #ed008c;
    background: white;
    border-radius: 100%;
    height: 28px;
    position: relative;
    top: -12px;
    width: 40px;
    height: 40px;
    border-top: 3px solid #ed008c;
    "><path fill="currentColor" d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80-80 35.817-80 80 35.817 80 80 80z"></path></svg><!-- <i class="fa fa-map-marker" aria-hidden="true"></i> Font Awesome fontawesome.com --><a href="" class="link" style="
    margin-top: -7px;
    margin-bottom: 2px;
">dichtbij </a></div>
      <div class="col-lg-2"><a href="{{asset('/')}}" class="link"><svg class="svg-inline--fa fa-percent fa-w-14" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="percent" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="" style="
    margin: 0px auto;
    font-size: 23px;
    color: #004eff;"><path fill="currentColor" d="M112 224c61.9 0 112-50.1 112-112S173.9 0 112 0 0 50.1 0 112s50.1 112 112 112zm0-160c26.5 0 48 21.5 48 48s-21.5 48-48 48-48-21.5-48-48 21.5-48 48-48zm224 224c-61.9 0-112 50.1-112 112s50.1 112 112 112 112-50.1 112-112-50.1-112-112-112zm0 160c-26.5 0-48-21.5-48-48s21.5-48 48-48 48 21.5 48 48-21.5 48-48 48zM392.3.2l31.6-.1c19.4-.1 30.9 21.8 19.7 37.8L77.4 501.6a23.95 23.95 0 0 1-19.6 10.2l-33.4.1c-19.5 0-30.9-21.9-19.7-37.8l368-463.7C377.2 4 384.5.2 392.3.2z"></path></svg><!-- <i class="fa fa-handshake"></i> Font Awesome fontawesome.com -->acties</a></div>

      <div class="col-lg-2"><a href="{{asset('/admin-home')}}" class="link"><svg class="svg-inline--fa fa-cog fa-w-16" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="cog" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M487.4 315.7l-42.6-24.6c4.3-23.2 4.3-47 0-70.2l42.6-24.6c4.9-2.8 7.1-8.6 5.5-14-11.1-35.6-30-67.8-54.7-94.6-3.8-4.1-10-5.1-14.8-2.3L380.8 110c-17.9-15.4-38.5-27.3-60.8-35.1V25.8c0-5.6-3.9-10.5-9.4-11.7-36.7-8.2-74.3-7.8-109.2 0-5.5 1.2-9.4 6.1-9.4 11.7V75c-22.2 7.9-42.8 19.8-60.8 35.1L88.7 85.5c-4.9-2.8-11-1.9-14.8 2.3-24.7 26.7-43.6 58.9-54.7 94.6-1.7 5.4.6 11.2 5.5 14L67.3 221c-4.3 23.2-4.3 47 0 70.2l-42.6 24.6c-4.9 2.8-7.1 8.6-5.5 14 11.1 35.6 30 67.8 54.7 94.6 3.8 4.1 10 5.1 14.8 2.3l42.6-24.6c17.9 15.4 38.5 27.3 60.8 35.1v49.2c0 5.6 3.9 10.5 9.4 11.7 36.7 8.2 74.3 7.8 109.2 0 5.5-1.2 9.4-6.1 9.4-11.7v-49.2c22.2-7.9 42.8-19.8 60.8-35.1l42.6 24.6c4.9 2.8 11 1.9 14.8-2.3 24.7-26.7 43.6-58.9 54.7-94.6 1.5-5.5-.7-11.3-5.6-14.1zM256 336c-44.1 0-80-35.9-80-80s35.9-80 80-80 80 35.9 80 80-35.9 80-80 80z"></path></svg><!-- <i class="fa fa-sliders"> </i> Font Awesome fontawesome.com --></a></div>
    </div>
      </div>
    </div>