<div id="search-popup" class="mfp-hide">
<div class="search-popup text-center">
<h2 class="mb-8">Search</h2>
<div class="form-search">
<form action="{{asset('/categorie={name}/city={name}')}}" method="GET">
@csrf
<div class="row align-items-end no-gutters">
<div class="col-xl-6 mb-4 mb-xl-0 py-3 px-4 bg-white border-right position-relative rounded-left form-search-item">
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
    <div class="col-xl-4 mb-4 mb-xl-0 py-3 px-4 bg-white position-relative rounded-right form-search-item">
        <label for="key-word" class="font-size-md font-weight-semibold text-dark mb-0 lh-1">Welke gewenste locatie?</label>
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
<div class="heading mb-4">
<div class="pt-8 font-size-lg mb-5">
Or browse the highlights
</div>
</div>
<div class="row">
    <div class="col-lg-12">
    <div class="list-inline list-w">
        @foreach($categories as $category)
       
        <div class="list-inline-item py-2">
        <form method="POST" action="{{asset('/categorie/location')}}" class="findlocation">
            @csrf
            <input type="hidden" name="categoryId" id="categoryId" value="{{$category->id}}">
            <input type="hidden"  id="latitudes2" name="latitude" value="">
            <input type="hidden"  id="longlatitudes2" name="longlatitude" value="">
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
<a href="#" class="d-inline-block button-close mt-11 pt-1 text-dark font-size-lg font-weight-semibold text-decoration-none">
<span class="d-block"><i class="fa fa-times"></i></span>
<span class="d-block">Close</span>
</a>
</div>
</div>