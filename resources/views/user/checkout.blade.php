@extends('layouts.app')

@section('content')
<div class="mt-10">
@include('user.top-campain')
</div>
@isset($post)
<div class="container pt-5 mt-5">
<img class="d-block mx-auto mb-4" src="{{asset('/images/')}}/logosmall.jpeg" alt="Vrijeplaat checkout" width="120" class="img-fluid">
    <p class="lead mt-5">Below is an example form built entirely with Bootstrap’s form controls. Each required form group has a validation state that can be triggered by attempting to submit the form without completing it.</p>


  <div class="row">
    <div class="col-md-4 order-md-1 mb-4">
      <h4 class="d-flex justify-content-between align-items-center mb-3">
        <span class="text-muted">Your cart</span>
        <span class="badge badge-secondary badge-pill">1</span>
      </h4>
      <div class="store card border-0 rounded-0">
                <div class="position-relative store-image">
                    @php 
                        $images = $post->images->first();
                        
                    @endphp
                <a href="{{asset('/categorie='.$post->category->link.'/city='.$post->city->name.'/name='.$post->title)}}" tabindex="0">
                    <img src="{{asset('/images/posts/'.$images->url)}}" alt="{{$images->alt}}" class="card-img-top rounded-0">
                </a>
                <div class="image-content position-absolute d-flex align-items-center">
                <div class="content-left">
                <div class="badge badge-primary">Featured</div>
                </div>
                <div class="content-right ml-auto d-flex w-lg show-link">
                <a href="{{asset('/images/posts/'.$images->url)}}" class="item viewing" data-toggle="tooltip" data-placement="top" title="" data-gtf-mfp="true" tabindex="0" data-original-title="Quickview">
                <svg class="icon icon-expand">
                <use xlink:href="#icon-expand"></use>
                </svg>
                </a>
                <a href="#" class="item marking" data-toggle="tooltip" data-placement="top" title="" tabindex="0" data-original-title="Bookmark"><i class="fa fa-bookmark"></i></a>
                <a href="#" class="item" data-toggle="tooltip" data-placement="top" title="" tabindex="0" data-original-title="Compare">
                <svg class="icon icon-chart-bars">
                <use xlink:href="#icon-chart-bars"></use>
                </svg>
                </a>
                </div>
                </div>
                </div>
            <div class="card-body px-0 pb-0 pt-3">
                <a href="{{asset('/categorie='.$post->category->link.'/city='.$post->city->name.'/name='.$post->title)}}" class="card-title h5 text-dark d-inline-block mb-2" tabindex="0">
                    <span class="letter-spacing-25">{{$post->title}}</span>
                </a>
                <ul class="list-inline store-meta mb-4 font-size-sm d-flex align-items-center flex-wrap">
                    <li class="list-inline-item"><span class="badge badge-success d-inline-block mr-1">{{$post->count_of_ticket}}</span>
                    <span>numm of tickets are available</span>
                    </li>
                    <li class="list-inline-item separate"></li>
                    <li class="list-inline-item"><span class="mr-1">From</span>
                    <span class="text-danger font-weight-semibold">€{{$post->price_discount}}</span></li>
                    <li class="list-inline-item separate"></li>
                        <li class="list-inline-item">
                        <a href="{{asset('/categorie/'.$post->category->link)}}" class="link-hover-secondary-primary" tabindex="0">
                        <svg class="icon icon-bed">
                        <use xlink:href="#icon-bed"></use>
                        </svg>
                        <span>{{$post->category->name}}</span>
                    </a>
                    </li>
                </ul>
                <div class="media">
                    <div class="media-body lh-14 font-size-sm">
                        {{$post->main_description}}
                    </div>
                    </div>
                    </div>
                    <ul class="list-inline card-footer rounded-0 border-top pt-3 mt-5 bg-transparent px-0 store-meta d-flex align-items-center">
                    <li class="list-inline-item">
                    <span class="d-inline-block mr-1">
                    <i class="fa fa-map-marker-alt">
                    </i>
                    </span>
                    <a href="#" class="text-secondary text-decoration-none link-hover-secondary-blue" tabindex="0">
                    {{$post->full_address}}</a>
                    </li>
                    <li class="list-inline-item separate"></li>
                    <li class="list-inline-item">
                    <span class="text-green">Active</span>
                    </li>
                    </ul>
    </div>
      
    </div>
    <div class="col-md-8 order-md-2 mb-4 mt-5">
 
        <ul class="list-group mb-3">
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0 text-dark">Product name</h6>
            <p class="text-dark">{{$post->title}}</p>
          </div>
         
        </li>
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">This ticket is valid until</h6>
            <small class="text-dark">{{$post->valid_until}}</small>
          </div>
          
        </li>
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">Category for this ticket</h6>
            <small class="text-muted">{{$post->category->name}}</small>
          </div>
          <span class="text-muted"></span>
        </li>
        <li class="list-group-item d-flex justify-content-between bg-light">
          <div class="text-success">
            <h6 class="my-0">Total price</h6>
            <small>€{{$post->price_discount}}</small>
          </div>
          
        </li>
        <li class="list-group-item d-flex justify-content-between">
          <span>Total (EUR)</span>
          <strong>€{{$post->price_discount}}</strong>
        </li>
      </ul>

      <form class="card p-2" action="{{asset('/mollie-paymnet')}}" method="GET">
      @csrf
        <div class="input-group">
            <input type="hidden" name="postid" value="{{$post->id}}">
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
    <!-- <div class="col-md-8 order-md-1">
      <h4 class="mb-3">Billing address</h4>
      <form class="needs-validation" novalidate="">
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="firstName">First name</label>
            <input type="text" class="form-control" id="firstName" placeholder="" value="" required="">
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="lastName">Last name</label>
            <input type="text" class="form-control" id="lastName" placeholder="" value="" required="">
            <div class="invalid-feedback">
              Valid last name is required.
            </div>
          </div>
        </div>

        <div class="mb-3">
          <label for="username">Username</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">@</span>
            </div>
            <input type="text" class="form-control" id="username" placeholder="Username" required="">
            <div class="invalid-feedback" style="width: 100%;">
              Your username is required.
            </div>
          </div>
        </div>

        <div class="mb-3">
          <label for="email">Email <span class="text-muted">(Optional)</span></label>
          <input type="email" class="form-control" id="email" placeholder="you@example.com">
          <div class="invalid-feedback">
            Please enter a valid email address for shipping updates.
          </div>
        </div>

        <div class="mb-3">
          <label for="address">Address</label>
          <input type="text" class="form-control" id="address" placeholder="1234 Main St" required="">
          <div class="invalid-feedback">
            Please enter your shipping address.
          </div>
        </div>

        <div class="mb-3">
          <label for="address2">Address 2 <span class="text-muted">(Optional)</span></label>
          <input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
        </div>

        <div class="row">
          <div class="col-md-5 mb-3">
            <label for="country">Country</label>
            <select class="custom-select d-block w-100" id="country" required="">
              <option value="">Choose...</option>
              <option>United States</option>
            </select>
            <div class="invalid-feedback">
              Please select a valid country.
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <label for="state">State</label>
            <select class="custom-select d-block w-100" id="state" required="">
              <option value="">Choose...</option>
              <option>California</option>
            </select>
            <div class="invalid-feedback">
              Please provide a valid state.
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <label for="zip">Zip</label>
            <input type="text" class="form-control" id="zip" placeholder="" required="">
            <div class="invalid-feedback">
              Zip code required.
            </div>
          </div>
        </div>
        <hr class="mb-4">
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="same-address">
          <label class="custom-control-label" for="same-address">Shipping address is the same as my billing address</label>
        </div>
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="save-info">
          <label class="custom-control-label" for="save-info">Save this information for next time</label>
        </div>
        <hr class="mb-4">

        <h4 class="mb-3">Payment</h4>

        <div class="d-block my-3">
          <div class="custom-control custom-radio">
            <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked="" required="">
            <label class="custom-control-label" for="credit">Credit card</label>
          </div>
          <div class="custom-control custom-radio">
            <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required="">
            <label class="custom-control-label" for="debit">Debit card</label>
          </div>
          <div class="custom-control custom-radio">
            <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required="">
            <label class="custom-control-label" for="paypal">PayPal</label>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="cc-name">Name on card</label>
            <input type="text" class="form-control" id="cc-name" placeholder="" required="">
            <small class="text-muted">Full name as displayed on card</small>
            <div class="invalid-feedback">
              Name on card is required
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="cc-number">Credit card number</label>
            <input type="text" class="form-control" id="cc-number" placeholder="" required="">
            <div class="invalid-feedback">
              Credit card number is required
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 mb-3">
            <label for="cc-expiration">Expiration</label>
            <input type="text" class="form-control" id="cc-expiration" placeholder="" required="">
            <div class="invalid-feedback">
              Expiration date required
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <label for="cc-cvv">CVV</label>
            <input type="text" class="form-control" id="cc-cvv" placeholder="" required="">
            <div class="invalid-feedback">
              Security code required
            </div>
          </div>
        </div>
        <hr class="mb-4">
        <button class="btn btn-primary btn-lg btn-block" type="submit">Continue to checkout</button>
      </form>
    </div> -->
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
@endisset
@endsection