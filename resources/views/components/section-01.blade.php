
<section id="section-01" class="home-main-intro">
    <div class="home-main-intro-container">
    <div class="container"> 
    
    <div class="row mb-8" style="margin-top:-120px">
   
    
    </div>
    <div class="row p-2">
    
        <div class="col-lg-12 ">
        <div class="heading mb-3">
            <h1 class="m-2">
                <span class="d-block slideInLeft animated m-font-intro" data-animate="slideInLeft">Reizen, Eten Tickets,<br>
                NFT's en nog veel meer!</span>
            </h1>
            <p class="font-weight-normal text-dark mb-0 fadeInDown animated m-2 mb-5" data-animate="fadeInDown">
               Ben je opzoek naar een leuk hotel? Misschien een lekkere etentje voor een<br> mooi prijsje? bij Fulltoko ben je bij het juiste adres!
            </p>
        </div>
        <div class="bleucont">
        <div class="form-search form-search-style-02  fadeInDown animated" data-animate="fadeInDown">
        <form action="{{asset('/categorie={name}/city={name}')}}" method="GET" id="searchbycategorycity">

        @csrf
        <div class="row align-items-end no-gutters mb-5 rounded">
        <div class="col-xl-6 mb-4 mb-xl-0 py-2 px-4 bg-white  position-relative  shadow b-orange buca">
        <label for="key-word" class="font-size-md font-weight-semibold text-dark mb-0 lh-1">Wat zoek je precies? <i class="fas fa-search"></i></label>
        <div class="input-group dropdown show">
        <input type="text" autocomplete="true" id="key-word" name="category"
        class="form-control form-control-mini border-0 px-0 bg-transparent"
        placeholder="Hapjes, Auto's en nog meer" data-toggle="dropdown" aria-haspopup="true">
        <a href="#" class="input-group-append text-decoration-none" data-toggle="dropdown">
        <i class="fa fa-chevron-down"></i>
        </a>
            <ul id="andjicasearch" class="dropdown-menu form-search-ajax" aria-labelledby="key-word">
            @foreach($categories as $c)
            <li class="dropdown-item item">
                <a href="#" class="link-hover-dark-white">
                <img src="{{asset('/icons/'.$c->icon)}}" class="img-fluid1">
                <span class="font-size-md">{{$c->name}}</span>
            
                </a>
            </li>
            @endforeach
            </ul>
        </div>
        </div>
            <div class="col-xl-6 mb-4 mb-xl-0 py-2 px-4 bg-white position-relative  shadow b-orange buca2">
                <label for="region" class="font-size-md font-weight-semibold text-dark mb-0 lh-1">Welke gewenste locatie? <i class="fas fa-map-pin"></i></label>
                <div class="input-group dropdown show">
                <input type="text"  autocomplete="true" name="city" id="region" class="form-control form-control-mini border-0 px-0 bg-transparent" placeholder="Rotterdam" data-toggle="dropdown" aria-haspopup="true">
                <a href="#" class="input-group-append text-decoration-none" data-toggle="dropdown">
                <i class="fa fa-chevron-down"></i>
                </a>
                <ul class="dropdown-menu form-search-ajax" aria-labelledby="region" id="cities">
                @foreach($cities as $city)
                <li class="dropdown-item item">
                <a href="#" class="link-hover-dark-white">
                <i class="fas fa-location-arrow"></i>{{$city->name}}
                
                </a>
                </li>
                @endforeach
                </ul>
                </div>
            </div>
                <div class="col-xl-2 button">
                <input type="submit" class="btn btn-primary primary-color btn-lg btn-icon-left btn-block" value="Zoeken">
                
            
                </div>
            </div>
        </form>
        </div>
        <br>
        <h3 style="text-align: center;
    color: white;">Of selecteer een van deze categorieen</h3>
    <br>
        <div class="col-lg-12 y0">
        @include('components.categories-search')
    </div>
</div>
        </div>
        </div>
        


<div class="home-main-how-it-work bg-white pt-7 mt-7 rounded">
<div class="container ">
<h2 class="mb-2">
<span class="d-block slideInLeft animated m-font-intro"><strong>Hoe werkt Fulltoko</strong> ontdek het in 3 simpele stappen!</span>

</h2>
<div class="row no-gutters pb-11">

<div class="col-lg-4 mb-4 mb-lg-0 px-0 px-lg-4">
<div class="media icon-box-style-02" data-animate="fadeInDown">
<div class="d-flex flex-column align-items-center mr-6">

<span class="number h1 font-weight-bold" style="font-size: 8rem;">1.</span>
</div>
<div class="media-body lh-14">
<img src="./images/selection.png" style="    height: 100px;   text-align: center;">


</div>
</div>
<h5 class="mb-1 lh-1">
Maak een selectie 
</h5>
<p class="font-size-md text-gray mb-0 text-muted">
Ben je opzoek naar een leuk hotel? Misschien een lekkere etentje voor een mooi prijsje? Bij vrijeplaats bent u bij het juiste adres.
 </p>
</div>
<div class="col-lg-4 mb-4 mb-lg-0 px-0 px-lg-4">
<div class="media icon-box-style-02" data-animate="fadeInDown">
<div class="d-flex flex-column align-items-center mr-6">

<span class="number h1 font-weight-bold" style="font-size: 8rem;">2.</span>
</div>
<div class="media-body lh-14">
<img src="./images/ee1e767e-fb88-4218-8075-de123ab42028.png" style="    height: 100px;   text-align: center;">
  
</div>
</div>
<h5 class="mb-1 lh-1">
Bevestig je keuze

</h5>
<p class="font-size-md text-gray mb-0 text-muted">
Keuze uit duizenden plekken en diensten waar je geen nee tegen kunt zeggen!
</p>
</div>
<div class="col-lg-4 mb-4 mb-lg-0 px-0 px-lg-4">
<div class="media icon-box-style-02" data-animate="fadeInDown">
<div class="d-flex flex-column align-items-center mr-6">

<span class="number h1 font-weight-bold" style="font-size: 8rem;">3.</span>
</div>
<div class="media-body lh-14">
<img src="./images/happy.png" style="    height: 100px;   text-align: center;">


</div>
</div>
<h5 class="mb-1 lh-1">
Geniet van je aankoop!
</h5>
<p class="font-size-md text-gray mb-0 text-muted">
De beste deals en laagste prijzen zorgen voor de ideale vrije plaats bij u in de buurt.
</p>
</div>
</div>

<div class="border-bottom"></div>

</div>
</div>
</div>
</div>


</section>

<style>
    .form-search.form-search-style-02 .form-control {
    line-height: 0;
    height: 30px;
    padding-top: 0px;
    margin-top: -5px;
}
    .y0{
        padding:0px !important;
    }
    .lh-1 {
    line-height: 1!important;
    text-align: center;
    font-size: 27px;
    color: #202042;
}
    section#section-01 {
    margin-top: 146px;
}
    .home-main-intro::after {
    background-image: url("./images/Main-header-illustration.svg") !important;
    background-size: initial !important;
    background-repeat: no-repeat !important;
    background-position: top right 262px !important;
}
    .form-search.form-search-style-02 .btn {
    font-size: 20px;
    border-radius: 20px;
    color: white !important;
    position: absolute;
    top: -71px;
    left: 938px;
}
.col-lg-4.mb-4.mb-lg-0.px-0.px-lg-4 {
    padding: 20px !important;
    background: #edf0f5 !important;
    color: white !important;
    width: 30% !important;
    max-width: 32% !important;
    margin-right: 10px;
    border-radius: 20px !important;
    height: 300px;
    color: white !important;
}
    .col-xl-6.mb-4.mb-xl-0.py-2.px-4.bg-white.position-relative.shadow.b-orange {
    border: 0px !important;
    border-top-left-radius: 0px !important;
    border-bottom-left-radius: 0px;
}
.store.card{
    background: #f5f5f5;
    border-radius: 20px !important;
}
.rounded-0 {
    border-radius: 20px !important;
}
.font-size-md {
    font-size: 14px !important;
    /* text-align: center; */
    margin: 0px auto;
    padding: 10px;
    color: black !important;
}
.col-xl-6.mb-4.mb-xl-0.py-2.px-4.bg-white.position-relative.shadow.b-orange {
    border: 0px !important;
    border-top-right-radius: 0px !important;
    border-bottom-right-radius: 0px !important;
}
    .mb-3, .my-3 {
    margin-bottom: 4rem!important;
    margin-top: -59px !important;
    text-align: left;
    padding-left: 0px;
    margin-left: 0px;
}
    button.card-pink.border-0.link-hover-dark-white.icon-box-style-01.shadow-lg {
    width: 128px;
    height: 123px;
    border-radius: 20px;
    background: white !important;
    color: black !important;
}
.text-white {
    color: black !important;
}
p.mt-3.mb-0 {
    font-size: 32px;
}
    .bleucont {
    padding: 10px;
    background: #002bff;
    border-radius: 20px;
}
.col-xl-6.mb-4.mb-xl-0.py-2.px-4.bg-white.position-relative.shadow.b-orange.buca2 {
    border-top-right-radius: 20px !important;
    border-bottom-right-radius: 20px !important;
}
.col-xl-6.mb-4.mb-xl-0.py-2.px-4.bg-white.position-relative.shadow.b-orange.buca {
    border-top-left-radius: 20px !important;
    border-bottom-left-radius: 20px !important;
    border-right:3px solid #002bff !important;
}


@media screen and (max-width:668px){
        .top-campaign .code {
        background: white;
        display: inline-block;
        color: #ed008c !important;
        right: -24px;
        font-weight: 600;
        position: relative;
        width: 100px !important;
        text-align: center !important;
        height: 52px !important;
        border-radius: 14px;
        float: right;
        line-height: 5 !important;
        font-size: 10px !important;
    }
    .content-s.col-lg-8.klucic {
        font-size: 14px !important;
        overflow: clip;
        width: 90%;
        line-height: 2;
        margin-top: -3px;
        height: 51px;
    }
    .logo-image {
    border-radius: 100%;
    width: 125px;
    position: fixed;
    text-align: center;
    margin: 0 auto;
    right: 18%;
    left: 16%;
    top: 0px;
}
.col-xl-6.mb-4.mb-xl-0.py-2.px-4.bg-white.position-relative.shadow.b-orange.buca {
    border-top-left-radius: 20px !important;
    border-bottom-left-radius: 20px !important;
    border-right: 3px solid #002bff !important;
    text-align: center;
    border-radius: 20px !important;
}
.col-lg-3.p-5.zoomIn.animated {
    width: 90% !important;
    margin: 0px auto;
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
    margin-left: -11px;
    float: left;
    left: -120px;
    position: relative;
}
.col-xl-6.mb-4.mb-xl-0.py-2.px-4.bg-white.position-relative.shadow.b-orange.buca2 {
    border-top-right-radius: 20px !important;
    border-bottom-right-radius: 20px !important;
    border-radius: 20px !important;
    text-align: center;
}
.col-lg-4.mb-4.mb-lg-0.px-0.px-lg-4 {
    padding: 20px !important;
    background: lightgray;
    color: white !important;
    width: 100% !important;
    max-width: 100% !important;
    margin-right: 10px;
    border-radius: 20px !important;
    height: 300px;
    border:none !important;
    color: white !important;
}
    img.img-fluid {
        width: 82px !important;
        border-radius: 14px !important;
        margin-top: -48px !important;
        float: right !important;
        margin-right: -72px !important;
        max-height: 56px !important;
        height: 56px !important;
        display:none !important;
    }
    .ehsad {
    position: relative;
    top: -45px;
    display: grid;
    right: 0px;
    margin-left: 100px;

    }
    .col-lg-2 {
    width: auto;
}
.doba2{
    display: none !important;
}
.doba {
    color: White !important;
    margin-right: 0px !important;
    width: 109% !important;
    background: #ed008c;
    border: none;
    height: 48px;
    border-radius: 16px !important;
    font-size: 13px;
    margin-top: 120px !important;
    position: relative;
    right: -200px;
    top: -66px;
    width: 200px;
    left: 91px;
    background: white !important;
    border: 2px solid black;
    color: black !important;
    line-height: 1.3;
}
.home-main-intro::after {
    background-image: url(./images/Main-header-illustration.svg) !important;
    background: white !important;
    background-size: initial !important;
    background-repeat: no-repeat !important;
    background-position: top right 262px !important;
}
}
.icon-box-style-02 .number {
    color: white !important;
    line-height: 1;
    margin-top: 10px;
}
img.img-fluid1 {
    height: 47px;
    margin-top: 11px;
}
.col-lg-4.mb-4.mb-lg-0.px-0.px-lg-4:nth-child(2){
    border:none !important;
    border-left:none !important;
}

</style>