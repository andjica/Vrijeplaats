
@extends('layouts.template-admin')
@section('content')



<div id="wrapper-content" class="wrapper-content pt-0 pb-0">
    <div class="page-wrapper d-flex flex-wrap flex-xl-nowrap">
        @include('admin.sidebar')
        <div class="page-container">
            <div class="container-fluid">
                <div class="page-content-wrapper d-flex flex-column justify-content-center">
                    <div class="row">
                    <div class="col-xl-12">
                        <div class="card rounded-0 border-0 invoices">
                            <div class="card-body">
                                <h5 class="card-title text-capitalize border-bottom pb-2 mb-2">
                                Invoices</h5>
                                <div class="table-responsive-sm">
                                <table class="table text-left">
                                    <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Datum van aanvraag</th>
                                    <th>User</th>
                                    <th>Company name</th>
                                    <th>Email</th>
                                    <th>Telefoon</th>
                                    <th>Adres en postcode</th>
                                    <th>PAYED STATUS</th>
                                </tr>
                                </thead>
                                    <tbody>
                                @foreach($partners as $p)
                                    <tr>
                                    <td>
                                    {{$p->inv_id}}
                                    </td>
                                    <td>{{$p->created_at->format('d-m-Y')}}</td>
                                    <td>{{$p->contactperson}}</td>
                                    <td>{{$p->company_name}}</td>
                                    <td>{{$p->email}}</td>
                                    <td>{{$p->phone}}</td>
                                    <td>{{$p->adress}}, {{$p->post_code}}</td>
                                    <td><span class="text-danger">NO</span></td>
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