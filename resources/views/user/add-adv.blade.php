@extends('layouts.app')
@section('head')
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>


    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
@endsection
@section('content')
<style>
    .card-body.px-0.pt-6 {
    background: white;
    padding: 10px !important;
    color: white !important;
    border-radius: 10px;
    -webkit-box-shadow: 0px 0px 15px 2px #000000;
    box-shadow: 0px 0px 15px 2px #d7d7d7;
}
input.btn.btn-success.btn-lg.btn-block {
    width: 20%;
    margin: 0px auto;
    border-radius: 10px;
    background: #ed008c;
    border-right: 7px solid blue;
    border-top: none;
    border-bottom: none;
    border-left: none;
    font-size: 17px;
}
.card.border-0.p-0 {
    background: white;
    padding: 10px !important;
    color: white !important;
    border-radius: 10px;
    -webkit-box-shadow: 0px 0px 15px 2px #000000;
    box-shadow: 0px 0px 15px 2px #d7d7d7;
}
</style>
<div class="container" style="margin-top:100px">
    <div class="row">
        <div class="col-lg-3">
            @include('user.sidebar')
        </div>
        <div class="col-lg-9">
        <div class="row">
            <div class="col-md-6">
            <div class="card border-0 p-0">
            <div class="card-body px-0 pt-6">
            <form id="insert-advertising" method="POST" action="{{asset('/insert-advertising')}}" enctype="multipart/form-data">
                @csrf
            <div class="form-group mb-4">
            <div class="text-dark font-weight-semibold font-size-md mb-2 lh-15">Listing Tittle
            <a href="#" class="text-darker-light d-inline-block ml-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Title for listing">
                <i class="fas fa-question-circle"></i></a>
            </div>
            <input type="text" class="form-control" placeholder="Staple &amp; Fancy Hotel" id="title" name="title">
            <small class="text-danger" id="title-er"></small>
            </div>
            <div class="form-group mb-4">
            <div class="text-dark font-weight-semibold font-size-md mb-2 lh-15">Short description
            <a href="#" class="text-darker-light d-inline-block ml-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Give a main short description for post">
                <i class="fas fa-question-circle"></i></a>
            </div>
            <textarea class="form-control" id="shortdesc" name="shortdesc"></textarea>
            <small class="text-danger" id="shortdesc-er"></small>
            </div>
            <div class="form-group mb-4">
            <div class="mb-2 d-flex align-items-center lh-15">
            <label class="mb-0 text-dark font-weight-semibold font-size-md lh-15" for="city">City</label>
            <a href="#" class="text-darker-light d-inline-block ml-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Region of listing">
            <i class="fas fa-question-circle"></i></a></div>
                <input type="text" name="autocompletecity" id="autocomplete-city" class="form-control" placeholder="Enter City">
                <input type="hidden" id="citylatitude" name="citylatitude" class="form-control">
                <input type="hidden" name="citylongitude" id="citylongitude" class="form-control">
                <small class="text-danger" id="city-er"></small>
                @if ($errors->has('citylatitude'))  <p style="color:red;">{{$errors->first('citylatitude')}}</p> @endif

            </div>
            <div class="form-group mb-4">
            <label for="phone" class="text-dark font-weight-semibold font-size-md mb-2 lh-15">Phone</label>
            <input type="text" id="phone" name="phone" class="form-control" placeholder="+316604653857">
            <small class="text-danger"  id="phone-er"></small>
            </div>
            <div class="form-group mb-4">
            <div class="mb-2 d-flex align-items-center lh-15">
            <label class="mb-0 text-dark font-weight-semibold font-size-md lh-15" for="address">Full Address
            (Geolocation) </label>
            <input type="text" name="autocompleteaddress" id="autocomplete" class="form-control" placeholder="Enter Location">

                <input type="hidden" id="latitude" name="adresslatitude" class="form-control">
                <input type="hidden" name="adresslongitude" id="longitude" class="form-control">
               
            </div>
            <small class="text-danger" id="address-er"></small>
            </div>
           
            </div>
            </div>
            </div>
            <div class="col-md-6 ">
            <div class="card border-0 p-0">
         
            <div class="form-group mb-4">
            <label for="category" class="text-dark font-weight-semibold font-size-md mb-2 lh-15">Category</label>
            <select id="category" class="form-control color-gray" name="category">
            @foreach($categories as $c)
            <option value="{{$c->id}}" class="form-control">{{$c->name}}</option>
            @endforeach
            </select>
            @if ($errors->has('category'))  <p style="color:red;">{{$errors->first('category')}}</p> @endif

            </div>
            <div class="form-row mb-4">
                <div class="col">
                <label for="price-form" class="text-dark font-weight-semibold font-size-md mb-2 lh-15">Current price</label>
                <input type="text" class="form-control" name="currentprice" id="currentprice">
                <small class="text-danger" id="currentprice-er"></small>
            </div>
            <div class="col">
                <label class="text-dark font-weight-semibold font-size-md mb-2 lh-15" for="price-to">Price before discount</label>
                <input type="text" class="form-control" name="firstprice" id="firstprice">
                <small class="text-danger" id="firstprice-er"></small>
            </div>
            </div>
            <div class="form-group mb-4 mt-4 bg-light">
            <label class="text-dark font-weight-semibold font-size-md mb-2 lh-15">Images
            </label>
            <div class=" upload-file text-center dz-clickable">
            <div class="dz-default dz-message">
            <div class="title">
            <span>Drag &amp; Drop files here</span>
            <span>or</span>
            </div>
            <div class="">
            <input type="file" id="images" name="images[]" class="btn btn-warning" multiple="multiple" >
            @if ($errors->has('images'))  <p style="color:red;">{{$errors->first('images')}}</p> @endif

            </div>
            </div>
            </div>
            <div class="mt-3">The first image will be shown on listing
            cards.
            </div>
            </div>
            <div class="form-group mb-4">
            <label for="website" class="text-dark font-weight-semibold font-size-md mb-2 lh-15">Website</label>
            <input type="text" id="website" name="website" class="form-control" placeholder="http://">
                <small class="text-danger" id="website-er"></small>
            </div>
            <div class="form-group mb-4">
            <label for="ticket" class="text-dark font-weight-semibold font-size-md mb-2 lh-15">Nummber of valible tickets</label>
            <input type="text" id="tickets" class="form-control" name="tickets" placeholder="">
            <small class="text-danger" id="tickets-er"></small>
            </div>
            <div class="form-group">
            <label for="datetime" class="text-dark font-weight-semibold font-size-md mb-2 lh-15">This advertising is valid until</label>
            <input type="date" id="validuntil" name="validuntil" value="2021-10-01" min="2021-10-01" max="" class="form-control" name="validuntil">
            <small class="text-danger" id="validuntil-er"></small>
            </div>
            </div>
            </div>
            
            <div class="card-body px-0 pt-6 border-top">
            <div class="form-group">
            <label><strong>Description :</strong></label>
            <!-- <div id="summernote">Hello Summernote</div> -->

            <textarea class="summernote" name="description" id="description"></textarea>
            @if ($errors->has('description'))  <p style="color:red;">{{$errors->first('description')}}</p> @endif
            <small class="text-danger" id="description-er"></small>
            </div>  
            <div class="form-group mb-4">
            <label class="text-dark font-weight-semibold font-size-md mb-2 lh-15">Social</label>
            <div class="row mb-4">
            
            <div class="col-md-6 mb-4 mb-md-0">
            <i class="fab fa-whatsapp text-success"></i>
            <input type="text" class="form-control" id="whatsapp" name="whatsapp" placeholder="Your Whatsapp contact nummber">
            <small class="text-danger" id="whatsapp-er"></small>

            </div>
           
            <div class="col-md-6">
            <i class="fab fa-facebook-square text-info"></i>
            <input type="text" class="form-control" id="facebook" name="facebook" placeholder="Your Facebook URL">
            <small class="text-danger" id="facebook-er"></small>

            </div>
            </div>
            <div class="row mb-4">
          
            <div class="col-md-6 mb-4 mb-md-0">
            <i class="fab fa-linkedin text-info"></i>
            <input type="text" class="form-control" id="linkedin" name="linkedin" placeholder="Your Linkedln URL">
            <small class="text-danger" id="linkedin-er"></small>

            </div>
            </div>
            <div class="row mb-4">
            <div class="col-md-6 mb-4 mb-md-0">
            <i class="fab fa-youtube text-danger"></i>
            <input type="text" class="form-control" id="youtube" name="youtube" placeholder="Your Youtube URL">
            <small class="text-danger" id="youtube-er"></small>

            </div>
            <div class="col-md-6">
            <i class="fab fa-instagram"></i>
            <input type="text" class="form-control" id="instagram" name="instagram" placeholder="Your Instagram URL">
            <small class="text-danger" id="instagram-er"></small>

            </div>
            </div>
            </div>
            <div class="form-group mb-4">
            <div class="mb-2 d-flex align-items-center lh-15">
            <label class="mb-0 text-dark font-weight-semibold font-size-md lh-15" for="tags">Tags or keywords (Comma
            seprated)</label>
            <a href="#" class="text-darker-light d-inline-block ml-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Tags or keyword for search easier"><i class="fas fa-question-circle"></i></a>
            </div>
            <textarea id="tags" class="form-control" placeholder="Enter tags or keywords comma sperated..."></textarea>
            </div>
            </div>
            </div>
        </div>
        
    </div>

<div class="row lh-18">
    <input type="submit" name="submit" value="Insert" class="btn btn-success btn-lg btn-block">
</form>
</div>
</div>
    <script type="text/javascript" src="{{asset('/js/')}}/google-geo-parameters.js"></script>

@endsection