@extends('layouts.app')

@section('content')
<div class="page-container">
    @include('user.top-campain')
<div class="container">
@php
        $userId = auth()->user()->id;
        $user =\App\UserView::where('user_id', $userId)->first();
        if(!$user):
@endphp
<div class="alert alert-warning fade show fadeIn" role="alert">
    
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    	<span aria-hidden="true">&times;</span>
			  	</button>
  <h4 class="alert-heading">Goed gedaan!</h4>
  <p>Bedankt voor uw succesvolle registratie op de website van VrijePlaats. Om op het platform te surfen en uw advertenties toe te voegen, is het noodzakelijk om uw profiel in te vullen. 
     </p>
  <hr>
  <p class="mb-0"> Surf daarna gratis en maak je eigen berichten</p>
  <img src="{{asset('/images/')}}/logosmall.jpeg" alt="Vrijeplaats" width="100px;" class="img-rounded-circle">

</div>
@php 
    endif;
@endphp



<div class="page-content-wrapper d-flex flex-column">
<h1 class="font-size-h4 mb-4 font-weight-normal">My Profile</h1>
<div class="row">
<div class="col-lg-5">
@include('user.sidebar')
</div>

<div class="col-lg-6 mb-4 mb-lg-0">
@if(session('success'))
<div class="alert alert-success">
    {{session('success')}}
</div>
@endif
@php
        $userId = auth()->user()->id;
        $user =\App\UserView::where('user_id', $userId)->first();
        if(!$user):
@endphp
        @include('user.insert-info')
@php 
    
    else:
@endphp
        @include('user.edit-info')
@php 
    
    endif;
@endphp
</div>
</div>
</div>
</div>

</div>
<div class="mt-6">
© 2020 Thedir. All Rights Reserved.
</div>
</div>
</div>
</div>

@endsection