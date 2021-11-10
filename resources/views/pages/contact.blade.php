@extends('layouts.template')

@section('content')

<div class="banner">
<div class="container">
<div class="banner-content text-center">
<div class="heading fadeInDown animated" data-animate="fadeInDown">
<h1 class="mb-0 text-white">
We’re Building The Destination For Getting Things Done
</h1>
</div>
</div>
</div>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-10 p-3">
            <div class="block-form-review bg-gray-06 px-5 pb-6">
            <h4 class="font-size-md pb-1 border-bottom pt-4 mb-4">
            Contact Us &amp; Support 24/7
            </h4>
            <form>
            <div class="row mb-4 flex-md-nowrap align-items-center">
            <div class="form-group d-flex form-rate col-md-6 align-items-center mb-4 mb-md-0">
            <span class="d-inline-block mr-2"></span>
            <div class="rate-input d-flex">
            <input type="radio" id="star5" name="rate" value="5">
            <label for="star5" title="text" class="mb-0">
            <svg class="icon icon-ionicons_svg_md-star">
            <use xlink:href="#icon-ionicons_svg_md-star"></use>
            </svg>
            </label>
            <input type="radio" id="star4" name="rate" value="4" checked="">
            <label for="star4" title="text" class="mb-0">
            <svg class="icon icon-ionicons_svg_md-star">
            <use xlink:href="#icon-ionicons_svg_md-star"></use>
            </svg>
            </label>
            <input type="radio" id="star3" name="rate" value="3">
            <label for="star3" title="text" class="mb-0">
            <svg class="icon icon-ionicons_svg_md-star">
            <use xlink:href="#icon-ionicons_svg_md-star"></use>
            </svg>
            </label>
            <input type="radio" id="star2" name="rate" value="2">
            <label for="star2" title="text" class="mb-0">
            <svg class="icon icon-ionicons_svg_md-star">
            <use xlink:href="#icon-ionicons_svg_md-star"></use>
            </svg>
            </label>
            <input type="radio" id="star1" name="rate" value="1">
            <label for="star1" title="text" class="mb-0">
            <svg class="icon icon-ionicons_svg_md-star">
            <use xlink:href="#icon-ionicons_svg_md-star"></use>
            </svg>
            </label>
            </div>
            </div>
            
            </div>
            <div class="form-row mx-0">
            <div class="col-sm-4 form-group mb-4 pl-0 pr-0 pr-sm-3">
            <input class="form-control" placeholder="Name">
            </div>
            <div class="col-sm-4 form-group pl-0 mb-4 pr-0 pr-sm-3">
            <input class="form-control" placeholder="Email Address">
            </div>
            <div class="col-sm-4 form-groupmb-4 px-0">
            <input class="form-control" placeholder="Subject">
            </div>
            </div>
            <div class="form-group mb-4">
            <textarea class="form-control" placeholder="Write your review here..."></textarea>
            </div>
            <div class="text-center">
            <button class="btn btn-primary font-size-md btn-lg lh-base">Send &amp; Message
            Review
            </button>
            </div>
            </form>
            </div>
            </div>
            <div class="col-lg-2">
                
            </div>
            </div>
    </div>

@endsection