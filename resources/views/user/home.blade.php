@extends('layouts.app')

@section('content')

<div class="container">

    <section class="jumbotron text-center">
    <div class="container">
      <div class="row">
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
      <p>
        
        <a href="{{asset('/add-adv')}}" class="btn btn-primary my-2"><i class="fas fa-plus-circle"></i>&nbsp;Een nieuwe advertentie maken</a>
        <a href="{{asset('/')}}" class="btn btn-secondary my-2">Zoek en surf verder</a>
      </p>
    </div>
    </div>
    </div>
  </section>
 
</div>
@endsection
