@extends('layouts.template-login')

@section('content')

<div class="container mt-9">
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verifieer je e-mailadres') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Er is een nieuwe verificatielink naar uw e-mailadres verzonden.') }}
                        </div>
                    @endif

                    {{ __('Controleer voordat u doorgaat uw e-mail op een verificatielink. ') }}
                    {{ __('Als je de e-mail niet hebt ontvangen,') }} <a href="{{ route('verification.resend') }}">{{ __(' klik dan hier om een ​​nieuwe aan te vragen.') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
