@extends('layouts.template')

@section('content')

<div class="banner">
<div class="container">
<div class="banner-content text-center">
<div class="heading fadeInDown animated" data-animate="fadeInDown">
<h1 class="mb-0 text-white">
We’re Building The Destination For Getting Things Done
</h1>
</div>
</div>
</div>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-10 p-3">
        @if(session('success'))
        <div class="alert alert-success">
            {{session('success')}}
        </div>
        @endif
            <div class="block-form-review bg-gray-06 px-5 pb-6">
            <h4 class="font-size-md pb-1 border-bottom pt-4 mb-4">
            Become partner &amp; Vrijeplaats 2021
            </h4>
            <form  action="{{asset('/be-partner/')}}" method="POST">
            @csrf
            <div class="form-row mx-0">
            <div class="col-sm-10 form-group mb-4 pl-0 pr-0 pr-sm-3">
            <label for="contactpersoon">Contactpersoon</labez>
                <input class="form-control" placeholder="contactperson" name="contactperson" id="contactperson">
            </div>
            <div class="col-sm-10 form-group pl-0 mb-4 pr-0 pr-sm-3">
                <label for="naam Bedrijf/Vereniging">Naam Bedrijf/Vereniging</label>
            <input class="form-control" placeholder="Naam Bedrijf/Vereniging" name="naambedrijf" id="naambedrijf">
            </div>
            <div class="col-sm-10 form-group pl-0 mb-4 pr-0 pr-sm-3">
                <label for="adres">Adres</label>
            <input class="form-control" placeholder="Adres" name="adres" id="adres">
            </div>
            <div class="col-sm-10 form-group pl-0 mb-4 pr-0 pr-sm-3">
                <label for="Postc. Woonpl.">Postc. Woonpl.</label>
            <input class="form-control" placeholder="Postc. Woonpl." name="post" id="post">
            </div>
            <div class="col-sm-10 form-groupmb-4 px-0">
                <label for="Telefoon">Telefoon</label>
            <input class="form-control" placeholder="Telefoon" name="telefoon" id="telefoon">
            </div>
            <div class="col-sm-10 form-groupmb-4 px-0">
                <label for="email">Email</label>
                <input class="form-control" placeholder="email" name="email" id="email">
            </div>
            </div>
            
            <div class="col-sm-10 form-groupmb-4 px-0 mb-5 mt-5">

                <label>Vrijeplaats inschrijving</label><br>
                    <input class="form-check-input" class="ml-3" type="checkbox" value="" id="invalidCheck" oninvalid="this.setCustomValidity('  U moet voldoen aan de voorwaarden')" oninput="this.setCustomValidity('')" required="">
                    <label class="form-check-label" for="Vrijeplaats inschrijving">
                    Inschrijfkosten €49,95 excl. BTW (eenmalig)
                    </label>
                    
            </div>
                <div class="col-sm-10 form-groupmb-4 px-0">
                <label for="datetime" class="text-dark font-weight-semibold font-size-md mb-2 lh-15">Datum installatie</label>
                <input type="date" id="datum" name="datum" value="2021-10-01" min="2021-10-01" max="" class="form-control" name="datum">
                <small class="text-danger" id="validuntil-er"></small>
                
                </div>
                <div class="col-sm-10 form-groupmb-4 px-0">
                    <label for="signature" class="text-dark font-weight-semibold font-size-md">Handtekening opdrachtgever:</label>
                    <textarea class="form-control" name="signature" id="signature"></textarea>
                </div>
            </div>
            <div class="text-center">
            <button class="btn btn-primary font-size-md btn-lg lh-base">Send &amp; Message
            Review
            </button>
            </div>
            </form>
            </div>
            </div>
            <div class="col-lg-2">
                
            </div>
            </div>
    </div>

@endsection