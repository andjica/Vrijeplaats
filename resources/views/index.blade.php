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
         .home-main-intro {
   
    background: white !important;
}
         .top-campaign {
    background: #004eff !important;
    width: 68% !important;
    margin: 0px auto;
    border-radius: 20px;
    z-index: 100000000000 !important;
    position: fixed !important;
    height: 68px;
    top: 66px !important;
    line-height: 3;
    left: 15.5% !important;
    right: 15.5% !important;
}
section#section-01 {
    margin-top: 123px !important;
    border: none !important;
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
@media screen and (max-width:668px){
    .form-search.form-search-style-02 .form-control {
    line-height: 0;
    height: 30px;
    padding-top: 0px;
    margin-top: -5px;
    text-align: center;
}
.store.card {
    display: block;
    height: 100%;
    width: 320px !important;
}
.store .content-left .badge {
    padding: 5px 8px;
    width: 72px;
    height: 40px;
    text-align: center;
    border-radius: 10px;
    padding-top: 10px;
    font-size: 19px;
    background: blue;
    margin-left: 25px !important;
}
.h890 {
    display: flex !important;
    flex-wrap: inherit !important;
    width: 100% !important;
    overflow-x: scroll !important;
}
.nestani{
    display:none !important;
}
.home-main-how-it-work {
    max-width: 1370px;
    display: none;
    margin: 0 auto;
}
.logo-image {
    border-radius: 100%;
    width: 269px !important;
    position: fixed;
    text-align: center;
    margin: 0 auto;
    right: 18%;
    left: 16%;
    top: -102px !important;
}
.top-campaign {
    background: #004eff !important;
    width: 68% !important;
    margin: 0px auto;
    border-radius: 20px;
    z-index: 100000000000 !important;
    position: fixed !important;
    height: 42px;
    top: 64px;
    line-height: 3;
    left: 15.5% !important;
    right: 15.5% !important;
}
.content-s.col-lg-8.klucic {
    font-size: 14px !important;
    overflow: clip;
    width: 90%;
    line-height: 2;
    margin-top: -3px;
    height: 28px;
}
.top-campaign .code {
    background: white;
    display: inline-block;
    color: #ed008c !important;
    right: -24px;
    font-weight: 600;
    position: relative;
    width: 100px !important;
    text-align: center !important;
    height: 34px !important;
    border-radius: 14px;
    float: right;
    line-height: 3.7 !important;
    font-size: 10px !important;
    top: -5px;
}
.card-text:last-child {
    margin-bottom: 0;
    font-size: 10px!important;
    color: black !important;
    width: 100%;
    padding-left: 0px;
    padding-right: 0px;
    font-weight: bold !important;
    margin-top: -5px;
}
        .logo-image {
    border-radius: 100%;
    position: fixed;
    text-align: center;
    margin: 0 auto;
    right: 18%;
    left: 16%;
}
label.font-size-md.font-weight-semibold.text-dark.mb-0.lh-1 {
    color: #ed008c !important;
    font-size: 17px !important;
}
.col-lg-4.mb-4.mb-lg-0.px-0.px-lg-4 {
    padding: 20px !important;
    background: #f5f5f5;
    color: white !important;
    width: 100% !important;
    max-width: 100% !important;
    margin-right: 10px;
    border-radius: 20px !important;
    height: 100% !important;
    color: white !important;
}
.form-search.form-search-style-02 .btn {
    font-size: 20px;
    border-radius: 20px;
    color: white !important;
    position: relative;
    top: 0px !important;
    left: 0px !important;
}
.h890 {
    width: 100% !important;
    margin: 0px auto;
}
img.ucos {
    max-width: 24px;
    margin: 0px auto;
}
.p-4.p-sm-5.rounded-3.bg-coupon {
    display: none;
}
.main-footer {
    padding-bottom: 55px;
    display: none;
}
.col-lg-2 {
    width: auto;
    display: grid;
    text-align: center;
    margin: 0px auto;
    justify-content: center;
    align-items: center;
}
.mobile-app-footer {
    position: fixed;
    width: 100%;
    bottom: 0;
    background: white;
    z-index: 100000000 !important;
    text-align: center;
    margin: 0px auto;
    justify-content: center;
    align-items: center;
}
.appversion{
    margin-top:-33px !important;
}
a.link {
    color: black;
    font-weight: bold;
}
.mobile-app-footer {
    position: fixed;
    width: 100%;
    bottom: 0;
}

}

@media screen and (min-width:669px){
    .mobile-app-footer {
    display:none !important;
}
}
     </style>
@endsection