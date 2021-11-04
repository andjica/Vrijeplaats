
@extends('layouts.template-admin')
@section('content')



<div id="wrapper-content" class="wrapper-content pt-0 pb-0">
<div class="page-wrapper d-flex flex-wrap flex-xl-nowrap">
@include('admin.sidebar')
<div class="page-container">
<div class="container-fluid">
<div class="page-content-wrapper d-flex flex-column justify-content-center">
    <div class="features card-deck">
        <div class="card rounded-0 border-0 bg-transparent mb-6">
            <div class="card-body d-flex align-items-center py-6 px-8 bg-white">
                @isset($countposts)
                <span class="font-size-h1 font-weight-semibold d-inline-block mr-2 text-primary lh-1">{{$countposts}}</span>
                <span class="font-size-md font-weight-semibold text-uppercase text-dark lh-13">Active <br> POSTS</span>
                @endisset
             </div>
        </div>
        <div class="card rounded-0 border-0 bg-transparent mb-6">
        @isset($countusers)
            <div class="card-body d-flex align-items-center py-6 px-8 bg-white">
                <span class="font-size-h1 font-weight-semibold d-inline-block mr-2 text-darker-light lh-1">{{$countusers}}</span>
                <span class="font-size-md font-weight-semibold text-uppercase text-dark lh-13"> geregistreerde<br> gebruikers</span>
            </div>
            @endisset
        </div>
    <div class="card rounded-0 border-0 bg-transparent mb-6">
    @isset($counthotels)
        <div class="card-body d-flex align-items-center py-6 px-8 bg-white">
            <span class="font-size-h1 font-weight-semibold d-inline-block mr-2 lh-1 published">{{$counthotels}}</span>
            @isset($hotels)
            <span class="font-size-md font-weight-semibold text-uppercase text-dark lh-13">@php echo $hotels->category->icon @endphp posts from <br> {{$hotels->category->name}}</span>
            @endisset
        </div>
        @endisset
    </div>
    <div class="card rounded-0 border-0 bg-transparent mb-6">
        <div class="card-body d-flex align-items-center py-6 px-8 bg-white">
            @isset($expiredposts)
            <span class="font-size-h1 font-weight-semibold d-inline-block mr-2 lh-1 experied">{{$expiredposts}}</span>
            <span class="font-size-md font-weight-semibold text-uppercase text-dark lh-13">Experied<br> Posts</span>
            @endisset
        </div>
    </div>
    <div class="card rounded-0 border-0 bg-transparent mb-6">
            <div class="card-body d-flex align-items-center p-6 bg-white">
            @isset($countcategories)
                <span class="font-size-h1 font-weight-semibold d-inline-block mr-2 lh-1 active">{{$countcategories}}</span>
                <span class="font-size-md font-weight-semibold text-uppercase text-dark lh-13">Active campaign <br> Listings</span>
                @endisset
            </div>
        </div>
    </div>
<div class="d-flex two-column mb-13 mx-n3">
<div class="page-left mb-6 px-3">
<div class="alert alert-success mb-6 alert-dismissible fade show d-flex align-items-center pr-3">
<div class="font-size-lg py-0 mr-6">Your listing <a href="listing-details-full-image.html" class="font-weight-semibold link-hover-dark-primary">Hotel Govendor</a>
has
been
approved!
</div>
<div class="ml-auto">
<a href="#" class="alert-button py-0 font-size-h3 lh-1" data-dismiss="alert" aria-label="Close"><i class="fas fa-times"></i></a>
</div>
</div>
<div class="facts-box mb-6 row">
<div class="col-lg-4 mb-6 mb-xl-0">
<div class="card view rounded-0 border-0 text-white">
<div class="card-body d-flex align-items-center p-0">
<div class="content mr-auto">
<span class="font-size-h1 font-weight-semibold lh-1 d-block">824</span>
<span class="font-size-lg">Total Views</span>
</div>
<div class="fact-icon">
<svg class="icon icon-eye">
<use xlink:href="#icon-eye"></use>
</svg>
</div>
</div>
</div>
</div>
<div class="col-lg-4 mb-6 mb-xl-0">
<div class="card review rounded-0 border-0 text-white">
<div class="card-body d-flex align-items-center p-0">
<div class="content mr-auto">
<span class="font-size-h1 font-weight-semibold lh-1 d-block">73</span>
<span class="font-size-lg">Total Reviews</span>
</div>
<div class="fact-icon">
<i class="fas fa-star"></i>
</div>
</div>
</div>
</div>
<div class="col-lg-4">
<div class="card time-bookmark rounded-0 border-0 text-white">
<div class="card-body d-flex align-items-center p-0">
<div class="content mr-auto">
<span class="font-size-h1 font-weight-semibold lh-1 d-block">269</span>
<span class="font-size-lg">Times Bookmarked</span>
</div>
<div class="fact-icon">
<i class="fas fa-bookmark"></i>
</div>
</div>
</div>
</div>
</div>
 <div class="row tables">
        <div class="col-xl-6 mb-6 mb-xl-0">
            <div class="card rounded-0 border-0 reccent-activities">
                <div class="card-body">
                    <h5 class="card-title text-capitalize border-bottom pb-2 mb-2">
                        Recent
                        Categories</h5>
                            <div class="table-responsive">
                                <table class="table">
                                <tbody>
                                    @foreach($categories as $c)
                                <tr>
                                <td>
                                    <div class="icon-box no-shape icon-box-style-03 d-flex">
                                    <span class="icon-box-icon">
                                    <svg class="icon icon-layers">
                                       @php echo $c->icon @endphp
                                    </svg>
                                    </span>
                                    <div class="content-box">
                                        <a href="{{asset('/categorie/'.$c->link)}}" class="font-weight-semibold link-hover-dark-primary">
                                    {{$c->name}}</a>
                                   
                                    </div>
                                    </div>
                                </td>
                                <td><a href="" class="text-success">Meer over</a></td>
                                </tr>
                                @endforeach
                 
                           
                            </tbody>
                            </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6">
            <div class="card rounded-0 border-0 invoices">
                <div class="card-body">
                    <h5 class="card-title text-capitalize border-bottom pb-2 mb-2">
                    Invoices</h5>
                    <div class="table-responsive-sm">
                    <table class="table">
                        <thead>
                    <tr>
                        <th>ID</th>
                        <th>Date</th>
                        <th>Plan</th>
                        <th>Amount</th>
                        <th>Status</th>
                    </tr>
                    </thead>
                        <tbody>
                    @foreach($limitpurchases as $p)
                        <tr>
                        <td>
                        <a href="panel-invoice-details.html" class="link-hover-dark-blue">INV-00001</a>
                        </td>
                        <td>{{$p->created_at}}</td>
                        <td>{{$p->post->title}}</td>
                        <td>{{$p->total}}</td>
                        <td><span class="status paid">Paid</span></td>
                        </tr>
                        @endforeach
                    </tbody>
                 </table>
                 <a href="" class="text-success">View more invoices</a>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
<div class="page-right px-3">
<div class="card rounded-0 border-0 contact py-6 px-3">
 <div class="card-body text-center p-0">
<div class="contact-icon text-dark mb-3">
<svg class="icon icon-headset">
<use xlink:href="#icon-headset"></use>
</svg>
</div>
<div class="text-dark font-size-md mb-5">
<p class="mb-2">Have any problem and<br> need support? Call Us directly
</p>
<p class="font-weight-semibold h5 mb-2">(+34) 967-123-888</p>
<p>Or chat with us</p>
</div>
<a href="#" class="btn btn-primary font-size-md px-8 lh-15">Contact Us</a>
</div>
</div>
</div>
</div>
<div class="copy-right mt-auto">
© 2020 Thedir. All Rights Reserved.
</div>
</div>
</div>
</div>
</div>
</div>
@endsection
