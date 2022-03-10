@extends('layouts.template')

@section('title', 'Reizen, coupons en kortingen')
@section('content')

<div class="mt-9">
     @include('user.top-campain')

     </div>
    
     @include('components.section-01')
   
     @include('components.section-03')
     
     @include('components.become-partner')

     @include('components.other-categories')

		
	
     <p id="demo"></p>

    
@endsection