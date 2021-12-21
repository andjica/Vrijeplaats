@extends('layouts.template')
@section('title', 'Partner Woorden')

@section('content')

<div class="banner">
<div class="container">
<div class="banner-content text-center">
<div class="heading fadeInDown animated" data-animate="fadeInDown">
<h1 class="mb-0 text-white">
Partner Worden &amp; Vrijeplaats 2022</h1>
</div>
</div>
</div>
</div>
<div class="container">
<div class="how-it-work">
    <div class="row align-items-center mb-7 mt-5">
        <div class="col-md-6 mb-4 mb-md-0">
            <img src="{{asset('/images/')}}/other/mobile.jpg" alt="How it work 1" class="img-fluid mt-3">
        </div>
        <div class="col-md-6">
            <h5 class="mb-4">1. Add Or Claim Your Listing</h5>
            <div class="mb-5">Upload photos, add helpful links to your website or to social
            media, set an address and hours of operation and other informations that you may find
            relevant.
            </div>
            <a href="#" class="font-weight-semibold text-primary text-decoration-underline">See How a
            Claimed Listings Looks</a>
        </div>
    </div>
    <div class="item row align-items-center">
        <div class="col-md-6  order-1 order-md-0 pr-0  pr-md-5">
            <h5 class="mb-4">2. Get Discovered by Visitors</h5>
            <div class="mb-5">Upon confirmation, your listing will appear throughout the website
            and will be searchable by visitors interested on similar places. A badge will be added
            to your listing to mark it as official.
            </div>
            <a href="#" class="font-weight-semibold text-primary text-decoration-underline">Find &amp; Clain
            Your Business</a>
        </div>
        <div class="col-md-6 mb-4 mb-md-0 order-0 order-md-1">
            <img src="{{asset('/images/')}}/other/first.jpg" alt="How it work 2" class="img-fluid">
        </div>
    </div>
    <div class="item row align-items-center mb-7">
        <div class="col-md-6 mb-4 mb-md-0">
            <img src="{{asset('/images/')}}/other/thirdvrijeplaats.jpg" alt="How it work 3" class="img-fluid">
        </div>
        <div class="col-md-6 ">
            <h5 class="mb-4">3. Increase Yout Earning</h5>
            <div class="mb-5">Once discovered, customers will start coming to you! It’s your job
            from here to make them happy to leave positive reviews. That’s how Listable helps them
            make better spending decisions.
            </div>
            <a href="page-pricing-plan.html" class="font-weight-semibold text-primary text-decoration-underline">Pricing &amp;
            Plan</a>
        </div>
    </div>
</div>
    <div class="row">
        <div class="col-lg-9 p-3">
        @if(session('success'))
        <div class="alert alert-success">
            {{session('success')}}
        </div>
        @endif
            <div class="block-form-review border bg-light shadow-lg px-5 pb-6">
            <h4 class="font-size-md pb-1 border-bottom pt-4 mb-4">
            Become partner &amp; Vrijeplaats 2021
            </h4>
            
            <form  id="becomepartner" action="{{asset('/be-partner/')}}" method="POST">
            @csrf
           
            <div class="col-sm-10 form-group">
                <label for="contactpersoon" class="text-dark">First name</labez>
                <input class="form-control" placeholder="firstname" name="contactperson" id="contactperson">
                <small class="text-danger" id="er-contactperson"></small>
            </div>
            <div class="col-sm-10 form-group">
                <label for="contactpersoon" class="text-dark">Last name</labez>
                <input class="form-control" placeholder="lastname" name="lastname" id="lastname">
                <small class="text-danger" id="er-lastname"></small>
            </div>
            <div class="col-sm-10 form-group">
                <label for="naam Bedrijf/Vereniging" class="text-dark">Naam Bedrijf/Vereniging</label>
                <input class="form-control" placeholder="Naam Bedrijf/Vereniging" name="naambedrijf" id="naambedrijf">
                <small class="text-danger" id="er-naambedrijf"></small>
            </div>
            <div class="col-sm-10 form-group">
            <label class="text-dark" for="address">Full Address
            (Geolocation) </label>
            <input type="text" name="autocompleteaddress" id="autocomplete" class="form-control pac-target-input" placeholder="Enter Location" autocomplete="off">

                <input type="hidden" id="latitude" name="adresslatitude" class="form-control">
                <input type="hidden" name="adresslongitude" id="longitude" class="form-control">
                <small class="text-danger" id="er-adres"></small>
            </div>
          
            <div class="col-sm-10 form-group">
                <label for="Postc. Woonpl." class="text-dark">Postc. Woonpl.</label>
                <input class="form-control" placeholder="Postc. Woonpl." name="post" id="postcode">
                <small class="text-danger" id="er-postcode"></small>
            </div>
            <div class="col-sm-10 form-group">
                <label for="Telefoon" class="text-dark">Telefoon</label>
                <input class="form-control" placeholder="Telefoon" name="telefoon" id="telefoon">
                <small class="text-danger" id="er-telefoon"></small>
            </div>
            <div class="col-sm-10 form-group">
                <label for="email" class="text-dark">Email</label>
                <input class="form-control" placeholder="email" name="email" id="email">
                <small class="text-danger" id="er-email"></small>
            </div>
       
            <div class="col-sm-10 form-group pl-5">
                <input class="form-check-input" type="checkbox" value="" id="invalidCheck" oninvalid="this.setCustomValidity('  U moet voldoen aan de voorwaarden')" oninput="this.setCustomValidity('')" required="">

                <label for="vrijplaats inschrijving" class="text-dark">Vrijeplaats inschrijving
                <p> Inschrijfkosten €49,95 excl. BTW (eenmalig / Incl BTW ( €60,43 )</p></label>
                
            </div>
                <div class="col-sm-10 form-group">
                <label for="datetime" class="text-dark">Datum installatie</label>
                <input type="date" id="datum" name="datum" value="2021-10-01" min="2021-10-01" max="" class="form-control" name="datum">
                <small class="text-danger" id="validuntil-er"></small>
                
                </div>
                <div class="col-sm-10 form-group">
                    <label for="signature" class="text-dark">Handtekening opdrachtgever:</label>
                    <textarea class="form-control" name="signature" id="signature"></textarea>
                    <small class="text-danger" id="er-signature"></small>
                </div>
                <div class="text-center mt-2">
                    <input type="submit" class="btn btn-primary btn-lg btn-block font-size-md btn-lg lh-base" value="Send Message">
           
                 </div>
            </form>
            
           
            </div>
            </div>
            <div class="col-lg-3 mt-3 pt-2 border">
            @isset($randomposts)

            <div class="card border-0">
                <a href="{{asset('/categorie='.$randomposts->category->link.'/city='.$randomposts->city->name.'/name='.$randomposts->title)}}" class="hover-scale">
                    @php $images = $randomposts->images->first();
                    @endphp
                    <img src="{{asset('/images/posts/'.$images->url)}}" alt="product 1" class="card-img-top image">
                </a>
                <div class="card-body px-0">
                <div class="mb-2">
                    {{$randomposts->full_address}}</div>
                <h5 class="card-title lh-13 letter-spacing-25">
                    <a href="{{asset('/categorie='.$randomposts->category->link.'/city='.$randomposts->city->name.'/name='.$randomposts->title)}}" class="link-hover-dark-primary">
                {{$randomposts->title}}</a>
                </h5>
                <ul class="list-inline">
                    <li class="list-inline-item mr-0">
                        <span class="text-gray">Active until {{$randomposts->valid_until}}</span>
                    </li>
                    <li class="list-inline-item">
                        <a href="#" class="link-hover-dark-primary">created by: {{$randomposts->user->userview->firstname}} {{$randomposts->user->userview->lastname}}</a>
                    </li>
                </ul>
                </div>
            </div>
        </div>
        @endisset
            
                   
            </div>
    </div>
            
</div>


@endsection