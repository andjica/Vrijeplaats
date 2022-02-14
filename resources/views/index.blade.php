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

     <style>
         .bg-blue{
             background:#004eff !important;
         }
         .bleucont{
            background:#004eff !important;

         }
         .top-campaign {
    background: #004eff !important;
    width: 68% !important;
    margin: 0px auto;
    border-radius: 20px;
    z-index: 100000000000 !important;
    position: fixed !important;
    height: 68px;
    top: 60px;
    line-height: 3;
    left: 15.5% !important;
    right: 15.5% !important;
}
.store .content-left .badge{
    background:#004eff !important;

}
.btn-primary {
    color: #fff;
    background: #ed008c -webkit-gradient(linear,left top,left bottom,from(#ed008c),to(#a8157c)) repeat-x;
    background: #ff008e !important;
    border-color: #ed008c;
    -webkit-box-shadow: none;
    box-shadow: none;
}
.bg-coupon {
    background-image: url(../images/other/gradient.jpg);
    height: 300px;
    width: 70%;
    margin: 0px auto;
    border-radius: 60px;
    color: white !important;
    background: #283960 !important;
}
          label.font-size-md.font-weight-semibold.text-dark.mb-0.lh-1 {
    color: #ed008c !important;
}
.form-search.form-search-style-02 .btn {
    font-size: 20px;
    border-radius: 20px;
    color: white !important;
    position: absolute;
    top: -72px !important;
    left: 938px;
}
.col-xl-6.mb-4.mb-xl-0.py-2.px-4.bg-white.position-relative.shadow.b-orange {
    height: 78px;
}
     </style>
@endsection