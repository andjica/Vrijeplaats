@extends('layouts.template')
@section('title', 'Aanmelden')

@section('content')
@php
    $categories = \App\Category::where('active', 'YES')->get();
    $cities = \App\City::all();
@endphp
@section('content')
<div class="container col-xl-10 col-xxl-8 px-4 py-5">
    <div class="row align-items-center g-lg-5 py-5">
    
      <div class="col-md-11 mx-auto col-lg-5 mt-2">
      <div class="card">
                <div class="card-header text-center bg-white">
                    
                    <img src="{{asset('/images/other/')}}/thirdvrijeplaats.jpg" class="img-fluid rounded" width="350px">
                    
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right text-dark">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right text-dark">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="customercompany" class="col-md-4 col-form-label text-md-right text-dark">{{ __('Customer or Company ') }}</label>
                            <div class="col-md-6">
                            <select name="customercompany" class="form-control">
                                <option value="2">Customer</option>
                               
                            </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right text-dark">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right text-dark">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                 
                </div>
            </div>
      </div>
      <div class="col-lg-6 text-center text-lg-start">
        <h1 class="display-4 fw-bold lh-1 mb-3">Aanmelden</h1>
        <p class="text-dark">Om te kunnen volgen en winkelen op de site van VrijePlaats 
                    is het noodzakelijk om je te registreren.
                     Door te registreren stellen wij de identiteit van de gebruiker vast en verbinden wij ons ertoe uw persoonsgegevens te bewaren.
                   
                    <br><br>Freeplace biedt de mogelijkheid tot twee soorten registratie:<br>
als gebruiker - die kan handelen - tickets kan verkopen en kopen, en ook alle tickets kan maken
een andere mogelijkheid is om je als bedrijf te registreren. Volg de link om een <a href="{{asset('/become-partner')}}">​​bedrijf te registreren</a>..
                    </p> 
      </div>
    </div>
  </div>

@endsection
