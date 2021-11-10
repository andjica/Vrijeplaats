
@extends('layouts.template-admin')
@section('content')



<div id="wrapper-content" class="wrapper-content pt-0 pb-0">
    <div class="page-wrapper d-flex flex-wrap flex-xl-nowrap">
        @include('admin.sidebar')
            <div class="page-container">
                <div class="container-fluid">
                <div class="page-content">
                    <div class="tabs">
                    <ul class="nav nav-pills tab-style-01 font-size-lg" role="tablist">
                    <li class="nav-item">
                    <a class="nav-link active" id="all-tab" data-toggle="tab" href="#all" role="tab" aria-controls="all" aria-selected="true">All Listings ({{$countposts}}) </a>
                    </li>
                  
               
                    <li class="nav-item">
                    <a class="nav-link" id="expires-tab" data-toggle="tab" href="#expires" role="tab" aria-controls="expires" aria-selected="false"> Expires
                    Listings
                    (2) </a>
                    </li>
                    </ul>
                    </div>
                    <div class="tab-content">
                    <div class="tab-pane fade active show" id="all" role="tabpanel" aria-labelledby="all-tab">
                    <div class="store-listing-style-04">
                    @foreach($posts as $p)
                    <div class="store-listing-item">
                    <div class="d-flex align-items-center flex-wrap flex-lg-nowrap border-bottom py-4 py-lg-0">
                    <div class="store media align-items-stretch py-4">
                    @php 
                    $images = $p->images;
                    $images = $images->first();
                    
                    @endphp
                    @isset($images)
                    <a href="listing-details-full-image.html" class="store-image">
                    <img src="{{asset('/images/posts/'.$images->url)}}" alt="{{$images->alt}}">
                    </a>
                    @endisset
                    <div class="media-body px-0 pt-4 pt-md-0">
                    <a href="{{asset('/categorie='.$p->category->link.'/city='.$p->city->name.'/name='.$p->title)}}" class="font-size-lg font-weight-semibold text-dark d-inline-block mb-2 lh-1">
                        <span class="letter-spacing-25">{{$p->title}} </span>
                    </a>
                    <ul class="list-inline store-meta mb-3 font-size-sm d-flex align-items-center flex-wrap">
                    <li class="list-inline-item">
                        <span class="badge badge-success d-inline-block mr-1">{{$p->count_of_ticket}}</span><span class="number">numm of ticket</span>
                    </li>
                    <li class="list-inline-item separate"></li>
                    <li class="list-inline-item"><span class="mr-1">From</span><span class="text-danger font-weight-semibold">€{{$p->price_first}}</span>
                    </li>
                    <li class="list-inline-item separate"></li>
                    <li class="list-inline-item"><a href="#" class="link-hover-secondary-primary">
                    <svg class="icon icon-cog">
                    <use xlink:href="#icon-cog"></use>
                    </svg>
                    <span>{{$p->category->name}}</span>
                    </a></li>
                    </ul>
                    <div class="border-top pt-2 d-flex">
                    <span class="d-inline-block mr-1"><i class="fa fa-map-marker-alt">
                    </i>
                    </span>
                    <a href="#" class="text-secondary text-decoration-none address">{{$p->full_address}}</a>
                    <div class="ml-0 ml-sm-auto">
                    <span class="label">Status:</span>
                    @php 
                        $datenow =  Carbon\Carbon::now();
                    @endphp
                    @if($datenow > $p->valid_until)
                    <span class="status experied">Experied</span>
                    @else
                    <span class="status active">Active</span>
                    @endif
                    </div>
                    </div>
                    </div>
                    </div>
                    <div class="action ml-0 ml-lg-auto mt-3 mt-lg-0 align-items-center flex-wrap flex-sm-nowrap w-100 w-lg-auto">
                    <a href="page-submit-listing.html" class="btn btn-light btn-icon-left mb-2 mb-sm-0 font-size-md">
                    <i class="fa fa-edit"></i>
                    Edit
                    </a>
                    <a href="#" class="btn btn-primary btn-icon-left  mb-2 mb-sm-0 px-5 font-size-md">
                    <i class="fa fa-trash-alt"></i>
                    Delete
                    </a>
                    </div>
                    </div>
                    </div>
                    @endforeach
                    </div>
                    <ul class="pagination pagination-style-02">
                    
                    <li class="page-item">{{ $posts->links() }}
                    </li>
                   
                    </ul>
                    </div>
                
                    <div class="tab-pane fade" id="expires" role="tabpanel" aria-labelledby="expires-tab">
                    <div class="store-listing-style-04">
                        @foreach($postsexpired  as  $ex)
                        <div class="store-listing-item">
                                <div class="d-flex align-items-center flex-wrap flex-lg-nowrap border-bottom py-4 py-lg-0">
                                <div class="store media align-items-stretch py-4">
                                @php 
                                $imagesex = $ex->images;
                                $imagesex = $imagesex->first();
                                
                                @endphp
                                @isset($imagesex)
                                <a href="listing-details-full-image.html" class="store-image">
                                <img src="{{asset('/images/posts/'.$imagesex->url)}}" alt="{{$imagesex->alt}}">
                                </a>
                                @endisset
                                <div class="media-body px-0 pt-4 pt-md-0">
                                <a href="{{asset('/categorie='.$p->category->link.'/city='.$p->city->name.'/name='.$p->title)}}" class="font-size-lg font-weight-semibold text-dark d-inline-block mb-2 lh-1">
                                    <span class="letter-spacing-25">{{$ex->title}} </span>
                                </a>
                                <ul class="list-inline store-meta mb-3 font-size-sm d-flex align-items-center flex-wrap">
                                <li class="list-inline-item">
                                    <span class="badge badge-success d-inline-block mr-1">{{$ex->count_of_ticket}}</span><span class="number">numm of ticket</span>
                                </li>
                                <li class="list-inline-item separate"></li>
                                <li class="list-inline-item"><span class="mr-1">From</span><span class="text-danger font-weight-semibold">€{{$p->price_first}}</span>
                                </li>
                                <li class="list-inline-item separate"></li>
                                <li class="list-inline-item"><a href="#" class="link-hover-secondary-primary">
                                <svg class="icon icon-cog">
                                <use xlink:href="#icon-cog"></use>
                                </svg>
                                <span>{{$ex->category->name}}</span>
                                </a></li>
                                </ul>
                                <div class="border-top pt-2 d-flex">
                                <span class="d-inline-block mr-1"><i class="fa fa-map-marker-alt">
                                </i>
                                </span>
                                <a href="#" class="text-secondary text-decoration-none address">{{$ex->full_address}}</a>
                                <div class="ml-0 ml-sm-auto">
                                <span class="label">Status:</span>
                                @php 
                                    $datenow =  Carbon\Carbon::now();
                                @endphp
                                @if($datenow > $ex->valid_until)
                                <span class="status experied">Experied</span>
                                @else
                                <span class="status active">Active</span>
                                @endif
                                </div>
                                </div>
                                </div>
                                </div>
                                <div class="action ml-0 ml-lg-auto mt-3 mt-lg-0 align-items-center flex-wrap flex-sm-nowrap w-100 w-lg-auto">
                                <a href="page-submit-listing.html" class="btn btn-light btn-icon-left mb-2 mb-sm-0 font-size-md">
                                <i class="fa fa-edit"></i>
                                Edit
                                </a>
                                <a href="#" class="btn btn-primary btn-icon-left  mb-2 mb-sm-0 px-5 font-size-md">
                                <i class="fa fa-trash-alt"></i>
                                Delete
                                </a>
                                </div>
                                </div>
                                </div>
                               
                        @endforeach
                        
                    </div>
                    
                    </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection