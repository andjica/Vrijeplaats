@extends('layouts.app')

@section('content')

<div class="page-container mt-8">
    @include('user.top-campain')
<div class="container border mt-2">
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
<h1 class="font-size-h4 mb-4 font-weight-normal"></h1>
<div class="row">
<div class="col-lg-4">
@include('user.sidebar')
</div>

<div class="col-lg-8 mb-4 mb-lg-0">
@if(session('success'))
<div class="alert alert-success">
    {{session('success')}}
</div>
@endif

<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Profiel Details</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false"><i class="fas fa-key"></i>Verander het wachtwoord</button>
  </li>

</ul>

<div class="tab-content">
  <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab"> 
        @php
            $userId = auth()->user()->id;
            $user =\App\UserView::where('user_id', $userId)->first();
        @endphp
        @if(!$user)
           @include('user.insert-info')
        @else
            @include('user.edit-info')
        @endif
 
    </div>
  <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">@include('user.edit-password')</div>
 
</div>
        

<div class="mt-6 float-right">
© 2021 Vrijeplaats. All Rights Reserved.
</div>
</div>
</div>
</div>
</div>

</div>

</div>
</div>
</div>
<script type="text/javascript" src="https://vrijeplaats.nl/public/js/google-geo-parameters.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<script>
    
  var firstTabEl = document.querySelector('#myTab li:last-child a')
  var firstTab = new bootstrap.Tab(firstTabEl)

  firstTab.show()
</script>
@endsection