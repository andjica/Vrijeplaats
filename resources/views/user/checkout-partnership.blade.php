@extends('layouts.app')

@section('content')
<div class="mt-10">
@include('user.top-campain')
</div>

<div class="container pt-5 mt-5">
<img class="d-block mx-auto mb-4" src="{{asset('/images/')}}/logosmall.jpeg" alt="Vrijeplaat checkout" width="120" class="img-fluid">
<h1 class="d-none">Checkout</h1>
    <p class="">Nog een kleine stap bent u verwijderd om onze partner te worden, als u de betaling hieronder wilt verrichten wordt u geregistreerd in onze database en bij live gang kunt u genieten van al onze voordelen. <br>
    Daardoor gaan er samen wat moois van maken want FULL PLACES IS HAPPY FACES.<i class="fas fa-laugh-beam text-success"></i></p>


  <div class="row">
    <div class="col-md-4 order-md-1 mb-4">
      <h4 class="d-flex justify-content-between align-items-center mb-3">
        <span class="text-muted">Your cart</span>
        <span class="badge badge-secondary badge-pill">1</span>
      </h4>
      <div class="store card border-0 rounded-0">
                <div class="position-relative store-image">
               
                    <img src="{{asset('/images/other/')}}/maps.jpg" alt="Membership vrijeplaats" class="card-img-top rounded-0">

                </div>
            <div class="card-body px-0 pb-0 pt-3">
                <a href="" class="card-title h5 text-dark d-inline-block mb-2" tabindex="0">
                    <span class="letter-spacing-25"></span>
                </a>
           
                <div class="media">
                    <div class="media-body lh-14 font-size-sm">
                       
                    </div>
                    </div>
                    </div>
                    <ul class="list-inline card-footer rounded-0 border-top pt-3 mt-5 bg-transparent px-0 store-meta d-flex align-items-center">
                    <li class="list-inline-item">
                    <span class="d-inline-block mr-1">
                    
                    </span>
                    <a href="#" class="text-secondary text-decoration-none link-hover-secondary-blue" tabindex="0">
                    </a>
                    </li>
                    <li class="list-inline-item separate">
                        
                    </li>
                    <li class="list-inline-item">
                    <span class="text-green">
                    <img class="d-block mx-auto mb-4" src="{{asset('/images/')}}/logosmall.jpeg" alt="Vrijeplaat checkout" width="120" class="img-fluid">

                    </span>
                    </li>
                    </ul>
    </div>
      
    </div>
    <div class="col-md-8 order-md-2 mb-4 mt-5">
 
        <ul class="list-group mb-3">
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h4 class="my-0">VRIJEPLAATS informatie:</h4>
            <h5 class="text-dark">Adres: Abosaver BV te Woudenberg</h5>
          </div>
         
        </li>
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">KVK</h6>
            <p class="text-dark">82660689</p>
          </div>
          
        </li>
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">BTW</h6>
            <p class="text-muted">NL862556508B01</p>
          </div>
          <span class="text-muted"></span>
        </li>
        <li class="list-group-item d-flex justify-content-between bg-light">
          <div class="text-success">
            <h6 class="my-0">Rekening nummer</h6>
            <p>NL25 INGB 0008 1787 07</p>
          </div>
          
        </li>
        <li class="list-group-item d-flex justify-content-between">
          <h5>Total (EUR)</h5>
          <h4>€60,44</h4>
        </li>
      </ul>

      <form class="card p-2" action="paymentforpartership" method="GET">
      @csrf
        <div class="input-group">
            <input type="hidden" name="user" value="{{auth()->user()}}">
          <div class="input-group-append">
            <button type="submit" class="btn btn-warning">Submit payment</button>
          </div>
        </div>
      </form>
      <div class="row mt-5 pt-5">
      <div class="col-lg-4">
        <div class="card__Container-sc-1uyj6no-1 gtRLbi">
              
                <img src="//images.ctfassets.net/k4kk06v59kf0/6177FYImNGeYa2uIkWcO0q/dafb890147196202a418bf6cc5f8e3b6/maestro.svg" alt="Popular credit card used in 210 countries worldwide." draggable="false" width="80" height="80" class="card__Icon-sc-1uyj6no-4 XMLbb">
                <img src="//images.ctfassets.net/k4kk06v59kf0/1OaMv75Tv01kqKxgCOFfUx/d3426e8cf0c8053d53207062df1cb684/iDealLogo_new_icon.svg" alt="The most used online payment method in the Netherlands." draggable="false" width="80" height="80" class="card__Icon-sc-1uyj6no-4 XMLbb">


            </div>
        </div>  
    
</div>
    </div>

  </div>

  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">© 2017-2019 Company Name</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacy</a></li>
      <li class="list-inline-item"><a href="#">Terms</a></li>
      <li class="list-inline-item"><a href="#">Support</a></li>
    </ul>
  </footer>
</div>

@endsection