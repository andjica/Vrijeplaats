@extends('layouts.app')

@section('content')
<div class="mt-9">
@include('user.top-campain')
</div>
<div class="container mt-5">
      <div class="row bg-light p-2">
        <div class="col-lg-4">
          @include('user.sidebar')
        </div>
      <div class="col-lg-8">
      @if(session('success'))
      <div class="alert alert-success">
          {{session('success')}}
      </div>
      @endif
      <h1 class="jumbotron-heading">Begin</h1>
      <p class="lead text-muted">Welkom op de website van de Vrijeplaats. Op ons platform heeft u de 
          mogelijkheid om uw diensten en producten te verkopen en te bewerken.</p>
          <div class="list-inline pb-8 flex-wrap my-n2">
          @foreach($categories as $category)
          <div class="list-inline-item py-2">
              <a href="{{asset('/categorie/'.$category->link)}}" class="card border-0 link-hover-dark-white icon-box-style-01">
              <div class="card-body p-0" style="font-size:27px">
                  @php echo $category->icon @endphp
                  <span class="card-text font-size-md font-weight-semibold mt-2 d-block">
                  {{$category->name}}
                  </span>
              </div>
              </a>
          </div>
          @endforeach
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
