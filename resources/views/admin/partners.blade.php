
@extends('layouts.template-admin')
@section('content')



<div id="wrapper-content" class="wrapper-content pt-0 pb-0">
    <div class="page-wrapper d-flex flex-wrap flex-xl-nowrap mt-11">
        @include('admin.sidebar')
        <div class="page-container mt-5">
            <div class="container-fluid">
                <div class="page-content-wrapper d-flex flex-column justify-content-center">
                    <div class="row">
                    <div class="col-xl-12">
                        <div class="card rounded-0 border-0 partners">
                        <div class="card-body">
                             <h5 class="card-title text-capitalize border-bottom pb-2 mb-2">
                                Partner Worden</h5>
                                <form class="form-inline">
                                <label class="sr-only" for="inlineFormInputName2">Name</label>
                                <input type="text" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder="Jane Doe">

                                <label class="sr-only" for="inlineFormInputGroupUsername2">Username</label>
                                <div class="input-group mb-2 mr-sm-2">
                                    <div class="input-group-prepend">
                                    <div class="input-group-text">@</div>
                                    </div>
                                    <input type="text" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Username">
                                </div>

                                <div class="form-check mb-2 mr-sm-2">
                                    <input class="form-check-input" type="checkbox" id="inlineFormCheck">
                                    <label class="form-check-label" for="inlineFormCheck">
                                    Remember me
                                    </label>
                                </div>

                                <button type="submit" class="btn btn-primary mb-2">Submit</button>
                                </form>
                            </div>
                        </div>
                        <div class="card rounded-0 border-0 partners">
                            <div class="card-body">
                                <h5 class="card-title text-capitalize border-bottom pb-2 mb-2">
                                Partner Worden</h5>
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
                                    <th>Active STATUS</th>
                                </tr>
                                </thead>
                                    <tbody>
                                @foreach($partners as $p)
                                    <tr>
                                    <td>
                                    {{$p->id}}
                                    </td>
                                    <td>{{$p->created_at}}</td>
                                    <td>{{$p->userview->firstname}} {{$p->userview->lastname}}</td>
                                    <td>{{$p->userview->company}}</td>
                                    <td>{{$p->email}}</td>
                                    <td>{{$p->userview->phone}}</td>
                                    <td>{{$p->userview->address}}, {{$p->userview->post_code}}</td>
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