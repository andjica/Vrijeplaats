
@extends('layouts.template-admin')
@section('content')
<div id="wrapper-content" class="wrapper-content pt-0 pb-0">
    <div class="page-wrapper d-flex flex-wrap flex-xl-nowrap mt-11">
        @include('admin.sidebar')
        <div class="page-container mt-7">
            <div class="container-fluid">
                <div class="page-content-wrapper d-flex flex-column justify-content-center">
                    <div class="row">
                    <div class="col-xl-11">
                   
                        <div class="card rounded-0 border-0 invoices">
                            <div class="card-body">
                                <h5 class="card-title text-capitalize border-bottom pb-2 mb-2">
                                Nummber of registered users <span class="badge badge-secondary">{{$users->count()}}</span></h5>
                                <a href="{{asset('/companies')}}" class="btn btn-outline-success text-dark border-bottom pb-2 mb-2">
                                Sorteren op bedrijf <i class="fas fa-sort"></i><i class="fas fa-building text-success"></i></a>
                                <a href="{{asset('/users')}}" class="btn btn-outline-success text-dark border-bottom pb-2 mb-2">
                                Sorteren op gebruikers <i class="fas fa-sort"></i><i class="fas fa-users text-success"></i></a>
                                <div class="table-responsive-sm">
                                <h5 class="text-dark mt-3 mb-0">Zoek gebruiker</h5>
                                <input class="form-control" id="myInput" type="text" placeholder="Zoek gebruiker">
                                <small class="text-muted">(u kunt zoeken op gebruikersnaam, achternaam, e-mail)</small><br><br>
                                <table class="table text-left" id="myTable">
                                    <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Voornaam  en Achternaam</th>
                                    <th>Email</th>
                                    <th>Rol</th>
                                    <th>Account aangemaakt bij</th>
                                    <th>Bekijk profiel</th>
                                    <th>Inovices</th>
                                </tr>
                                </thead>
                                    <tbody>
                                     @foreach($users as $user)
                                    <tr>
                                        <td>{{$user->id}}</td>
                                    <td>
                                    {{$user->userview->firstname}} {{$user->userview->lastname}}
                                    </td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->role->name}}</td>
                                    <td>{{$user->created_at->format('d-m-Y')}}</td>
                                    <td></td>
                                    <td><a href="{{asset('/role-invoices/'.$user->id)}}"><i class="fas fa-file-invoice"></i>View all</a></td>
                                    
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