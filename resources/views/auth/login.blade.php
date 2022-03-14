@extends('layouts.template')
@section('title', 'Inloggen')

@section('css')
<link rel="stylesheet" href="{{asset('/css/')}}/login.css">
@endsection

@section('content')
@php
    $categories = \App\Category::where('active', 'YES')->get();
    $cities = \App\City::all();
@endphp
@include('user.top-campain')
<div class="container col-xl-10 col-xxl-8 px-4 py-11">
    <div class="row align-items-center g-lg-5 mt-10">
      <div class="col-lg-6 text-center text-lg-start">
        <h1 class="display-4 fw-bold lh-1 mt-7">Inloggen Vrijeplaats</h1><br>
        <p class="fs-4"> Vrijeplaats heeft tal van aanbiedingen voor u samengesteld van interessante activiteiten. Begin je surf met een snelle zoekopdracht. Door op een van de categorieën te klikken vindt vreplaats aanbiedingen bij jou in de buurt.</p>
        <div class="mt-7">
        @include('components.categories-search') 
        </div>
    </div>
      <div class="col-md-10 mx-auto col-lg-6 mt-2">
      <div class="card mt-5">
            <div class="card-header text-center bg-white">
          
            <img src="{{asset('/images/other/')}}/mobile.jpg" class="img-fluid" width="350px">
            </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

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
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
      </div>
    </div>
  </div>

@endsection
