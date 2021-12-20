
<section id="section-01" class="home-main-intro">
    <div class="home-main-intro-container">
    <div class="container"> 
        <div class="heading mb-3">
            <h1 class="mb-2">
                <span class="d-block slideInLeft animated m-font-intro" data-animate="slideInLeft">Bekijk Hier</span>
                <span class="font-weight-light d-block fadeInRight animated n-font-intro" data-animate="fadeInRight">De leukste <br>en beste deals!</span>
            </h1>
            <p class="font-weight-normal text-secondary mb-0 fadeInDown animated" data-animate="fadeInDown">
                Zoek waar een <br>vrijeplaats voor vrij is!
            </p>
        </div>
        <div class="form-search form-search-style-02  fadeInDown animated" data-animate="fadeInDown">
        <form action="{{asset('/categorie={name}/city={name}')}}" method="GET" id="searchbycategorycity">

        @csrf
        <div class="row align-items-end no-gutters  p-3 rounded">
        <div class="col-xl-6 mb-4 mb-xl-0 py-2 px-4 bg-white  position-relative rounded-left shadow">
        <label for="key-word" class="font-size-md font-weight-semibold text-dark mb-0 lh-1">Wat zoek je precies?</label>
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
                @php
                echo $c->icon
                @endphp
                <span class="font-size-md">{{$c->name}}</span>
            
                </a>
            </li>
            @endforeach
            </ul>
        </div>
        </div>
            <div class="col-xl-4 mb-4 mb-xl-0 py-2 px-4 bg-white position-relative rounded-right  shadow">
                <label for="region" class="font-size-md font-weight-semibold text-dark mb-0 lh-1">Welke gewenste locatie?</label>
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
                <input type="submit" class="btn btn-primary primary-color btn-lg btn-icon-left btn-block" value="Zoeken!">
                
            
                </div>
            </div>
        </form>
        </div>
<div class="font-size-lg mb-4">
Bekijk hier een van onze grootste aanbod vrijeplaatsen!
</div>
    <div class="row">
    <div class="col-lg-12">
    <div class="list-inline list-w">
        @foreach($categories as $category)
       
        <div class="list-inline-item py-2">
        <form method="POST" action="{{asset('/categorie/location')}}" class="findlocation">
            @csrf
            <input type="hidden" name="categoryId" id="categoryId" value="{{$category->id}}">
            <input type="hidden" class="latitudes" id="latitudes" name="latitude" value="">
            <input type="hidden" class="longlatitudes" id="longlatitudes" name="longlatitude" value="">
            <button type="submit" class="card border-0 link-hover-dark-white icon-box-style-01  shadow">
            <div class="card-body p-0  st-btn" style="font-size:27px">
                @php echo $category->icon @endphp
                <span class="card-text font-size-md font-weight-semibold mt-2 d-block">
                {{$category->name}}
                </span>
            </div>
            </button>
            </form>
        </div>
       
        @endforeach
    </div>
    </div>
    </div>
<div class="home-main-how-it-work bg-white pt-11">
<div class="container">
<h2 class="mb-8">
<span>Bekijk</span>
<span class="font-weight-light">Hoe vrijeplaats te werk gaat</span>
</h2>
<div class="row no-gutters pb-11">
<div class="col-lg-4 mb-4 mb-lg-0 px-0 px-lg-4">
<div class="media icon-box-style-02" data-animate="fadeInDown">
<div class="d-flex flex-column align-items-center mr-6">
<svg class="icon icon-checkmark-circle">
<use xlink:href="#icon-checkmark-circle"></use>
</svg>
<span class="number h1 font-weight-bold">1</span>
</div>
<div class="media-body lh-14">
<h5 class="mb-3 lh-1">
Maak een selectie 
</h5>
<p class="font-size-md text-gray mb-0 text-muted">
Ben je opzoek naar een leuk hotel? Misschien een lekkere etentje voor een mooi prijsje? Bij vrijeplaats bent u bij het juiste adres.
 </p>
</div>
</div>
</div>
<div class="col-lg-4 mb-4 mb-lg-0 px-0 px-lg-4">
<div class="media icon-box-style-02" data-animate="fadeInDown">
<div class="d-flex flex-column align-items-center mr-6">
<svg class="icon icon-checkmark-circle">
<use xlink:href="#icon-checkmark-circle"></use>
</svg>
<span class="number h1 font-weight-bold">2</span>
</div>
<div class="media-body lh-14">
<h5 class="mb-3 lh-1">
Bevestig wat u graag wilt hebben
</h5>
<p class="font-size-md text-gray mb-0 text-muted">
Keuze uit duizenden plekken en diensten waar je geen nee tegen kunt zeggen!
</p>
</div>
</div>
</div>
<div class="col-lg-4 mb-4 mb-lg-0 px-0 px-lg-4">
<div class="media icon-box-style-02" data-animate="fadeInDown">
<div class="d-flex flex-column align-items-center mr-6">
<svg class="icon icon-checkmark-circle">
<use xlink:href="#icon-checkmark-circle"></use>
</svg>
<span class="number h1 font-weight-bold">3</span>
</div>
<div class="media-body lh-14">
<h5 class="mb-3 lh-1">
Geniet van de beste Vrijeplaatsen
</h5>
<p class="font-size-md text-gray mb-0 text-muted">
De beste deals en laagste prijzen zorgen voor de ideale vrije plaats bij u in de buurt.
</p>
</div>
</div>
</div>
</div>
<div class="border-bottom"></div>
</div>
</div>
</div>
</div>



</section>
