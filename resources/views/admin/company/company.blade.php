
@extends('layouts.template-admin')
@section('content')
@isset($company)
<div id="wrapper-content" class="wrapper-content pt-0 pb-0">
    <div class="page-wrapper d-flex flex-wrap flex-xl-nowrap mt-11">
        @include('admin.sidebar')
        <div class="page-container mt-5">
        <button class="btn btn-primary text-right  btn-sm mb-2 ml-6" onclick="goBack()">   
            <i class="fas fa-arrow-left"></i> Ga terug
        </button>
            <div class="container-fluid">
                <div class="page-content-wrapper d-flex flex-column justify-content-center">
                    <div class="row">
                    <div class="col-xl-12">
                        <div class="card rounded-0 border-0 partners mb-3">
                        <div class="card-body border-bottom">
                             <h5 class="card-title text-capitalize border-bottom pb-2 mb-2">
                             @if($company->payed_status == 0)
                                    <span class="badge badge-danger">NO</span>
                                    @else
                                    <span class="badge badge-success">COMPANY IS ACTIVE ON WEBSITE</span>
                                    @endif
                               #ID: {{$company->id}}<br>Name: {{$company->company_name}}</h5>
                             
                               <div class="mb-5">
                                        @if($company->image)
                                        <img src="{{asset('/images/users/'.$company->image)}}" class="img-fluid" alt="{{$company->company_name}}" width="120px">
                                        @else

                                        @endif
                                    </div>
                                @if(session('success'))
                                <div class="alert alert-success">
                                    {{session('success')}}
                                </div>
                                @endif
                                <div class="row">
                                <div class="col-md-4 mb-4 mb-md-0">
                                    
                                    <div class="text-dark font-size-md lh-1625">
                                    <address>
                                    <b>Name:</b> {{$company->company_name}}<br>
                                    <b>Adres:</b> {{$company->address}}<br>
                                    <b>Post code:</b> {{$company->post_code}}
                                    </address>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-4 mb-md-0">
                                <div class="mb-5">
                                    </div>
                                    <div class="text-dark font-size-md lh-1625">
                                    <address>
                                    <b>Company kvk:</b> {{$company->company_kvk}}<br>
                                    <b>Company btw:</b> {{$company->company_btw}}<br>
                                    <b>Telefoon:</b> {{$company->phone}}
                                    </address>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-4 mb-md-0">
                                <div class="mb-5">
                                    </div>
                                    <div class="text-dark font-size-md lh-1625">
                                    <address>
                                    <b>User from company:</b> {{$company->firstname}} {{$company->lastname}}<br>
                                    <b>Email:</b> {{$company->user->email}}<br>
                                    <b>Payed status:</b> 
                                    @if($company->payed_status == 0)
                                    <span class="badge badge-danger">NO</span>
                                    @else
                                    <span class="badge badge-success">YES</span>
                                    @endif
                                    </address>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 mb-4 mb-md-0">
                                <div class="mb-5">
                                    </div>
                                    <div class="text-dark font-size-md lh-1625">
                                    <address>
                                    <b>Linkedin:</b>
                                    @if($company->linkedin)
                                        <a href="{{$company->linkedin}}">{{$company->linkedin}}</a>
                                     @else
                                        Gebruiker heeft geen url voor linkedin gepost<br>
                                     @endif
                                    <b>Facebook:</b> 
                                        @if($company->facebook)
                                        <a href="{{$company->facebook}}">{{$company->facebook}}</a>
                                        @else
                                            Gebruiker heeft geen url voor facebook gepost<br>
                                        @endif<br>
                                    <b>Instagram:</b> 
                                        @if($company->instagram)
                                        <a href="{{$company->instagram}}">{{$company->instagram}}</a>
                                        @else
                                            Gebruiker heeft geen url voor instagram gepost<br>
                                        @endif<br>
                                    </address>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-4 mb-md-0">
                                <div class="mb-5">
                                    </div>
                                    <div class="text-dark font-size-md lh-1625">
                                    <address>
                                    <b>Date of register account:</b><br> {{$company->user->created_at}}<br>
                                    <b>Website url:</b> 
                                        @if($company->website)
                                        <a href="{{$company->website}}">{{$company->website}}</a>
                                        @else
                                            Gebruiker heeft geen url voor website gepost<br>
                                        @endif<br>
                                    </address>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-4 mb-md-0">
                                <div class="mb-5">
                                    </div>
                                    <div class="text-dark font-size-md lh-1625">
                                    <address>
                                    <b>Nummber of created posts:</b> <span class="badge badge-info">{{$company->user->posts->count()}}</span><br>
                                    
                                    </address>
                                    </div>
                                </div>
                            </div>
                        </div>
                     
                </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endisset
@endsection