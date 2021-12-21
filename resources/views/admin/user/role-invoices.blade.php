
@extends('layouts.template-admin')
@section('content')



<div id="wrapper-content" class="wrapper-content pt-0 pb-0">
    <div class="page-wrapper d-flex flex-wrap flex-xl-nowrap mt-11">
        @include('admin.sidebar')
        <div class="page-container mt-7">
            <div class="container-fluid">
                <div class="page-content-wrapper d-flex flex-column justify-content-center">
                    <div class="row">
                   
                    <div class="col-xl-10">
                    <button class="btn btn-primary text-right  btn-sm mb-2" onclick="goBack()">   
                            <i class="fas fa-arrow-left"></i> Ga terug
                         </button>

                        <div class="card rounded-0 border-0 invoices">
                            <div class="card-body">
                         
                                <h5 class="card-title text-capitalize border-bottom pb-2 mb-2">
                                Facturen - <br>@isset($user) {{$user->name}} {{$user->userview->lastname}}@endisset</h5>
                                <div class="table-responsive-sm">
                                <table class="table text-left">
                                    <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>AANKOOPDATUM</th>
                                    <th>Gebruiker</th>
                                    <th>Post</th>
                                    <th>Prijs</th>
                                    <th>Status</th>
                                    <th>Details</th>
                                </tr>
                                </thead>
                                    <tbody>
                                @foreach($invoices as $p)
                                    <tr>
                                    <td>
                                    {{$p->inv_id}}
                                    </td>
                                    <td>{{$p->created_at->format('d-m-Y')}}</td>
                                    <td>{{$p->user->userview->firstname}} {{$p->user->userview->lastname}}</td>
                                    <td>@if($p->role_payment == "Account activatie") {{$p->role_payment}} @else @endif</td>
                                    <td>{{$p->total}}</td>
                                    <td><span class="status paid">Paid</span></td>
                                    <td>
                                        <a href="{{asset('/admin-invoice='.$p->inv_id)}}" class="link-hover-dark-blue">
                                        <span class="status overdue">Details</span>
                                        </a>
                                    </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                           
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
@endsection