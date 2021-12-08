@extends('layouts.template')
@section('content')
@php
    $categories = \App\Category::where('active', 'YES')->get();
    $cities = \App\City::all();
@endphp
@section('content')
<main class="py-4 home-main-login">
<div class="container">
    <div class="row justify-content-center mt-8">
        <div class="col-md-8 mt-5">
            <div class="card">
                <div class="card-header text-center bg-white">
                    
                    <img src="{{asset('/images/')}}/logosmall.jpeg" class="img-fluid rounded" width="350px">
                    <h1 class="text-login text-center mt-3">{{ __('Aanmelden') }}</h1>
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
                    <div class="card-footer mt-4">
                    <p class="text-dark">Om te kunnen volgen en winkelen op de site van VrijePlaats 
                    is het noodzakelijk om je te registreren.
                     Door te registreren stellen wij de identiteit van de gebruiker vast en verbinden wij ons ertoe uw persoonsgegevens te bewaren.
                   
                    <br><br>Vrijeplaats biedt de mogelijkheid tot twee soorten registratie: 
                    <br> als gebruiker - die tickets kan ruilen - verkopen en kopen, en ook om alle tickets te maken
                    <br>een andere mogelijkheid is om je als bedrijf te registreren en ook om tickets te ruilen en te maken.
                    </p>    
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
</main>
@endsection
