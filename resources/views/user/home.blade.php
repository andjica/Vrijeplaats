@extends('layouts.app')

@section('content')
<div class="mt-9">
@include('user.top-campain')
</div>
<div class="container">
      <div class="row bg-light p-11">
        <div class="col-lg-4">
          @include('user.sidebar')
        </div>
      <div class="col-lg-8 p-5">
      @if(session('success'))
      <div class="alert alert-success">
          {{session('success')}}
      </div>
      @endif
      <h3 class="pt-3">Begin</h3>
      <p class="text-dark">Welkom op de website van de Vrijeplaats. Op ons platform heeft u de 
          mogelijkheid om uw diensten en producten te verkopen en te bewerken.</p>
          <div class="list-inline pb-8 flex-wrap my-n2">
          <div class="row">
      <div class="col-lg-12">
       
        @include('components.categories-search')
       
    </div>
    </div>
          <p>
      @if(auth()->user()->role_id == 3)
        <a href="{{asset('/add-adv')}}" class="btn btn-primary my-2"><i class="fas fa-plus-circle"></i>&nbsp;Een nieuwe advertentie maken</a>
        @else

        @endif
        <a href="{{asset('/')}}" class="btn btn-secondary my-2">Zoek en surf verder</a>
      </p>
      </div>
     
    </div>
    </div>
    </div>
  </section>
  <div class="page-right px-3 border">
      <div class="card rounded-0 border-0 contact py-6 px-3">
        <div class="card-body text-center p-0">
          <div class="contact-icon text-dark mb-3">
            <svg class="icon icon-headset">
              <use xlink:href="#icon-headset"></use>
            </svg>
          </div>
            <div class="text-dark font-size-md mb-5">
              <p class="mb-2">Heb een probleem en
                ondersteuning nodig?<br> Bel ons direct
              </p>
                <p class="font-weight-semibold h5 mb-2">(+34) 967-123-888</p>
                <p>Of chat met ons</p>
            </div>
            <a href="#" class="btn btn-primary font-size-md px-8 lh-15">Contact Us</a>
      </div>
      </div>
      </div>
</div>
@endsection
