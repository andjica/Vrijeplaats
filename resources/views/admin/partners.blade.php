
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
                    <button class="btn btn-primary text-right  btn-sm mb-2" onclick="goBack()">   
                            <i class="fas fa-arrow-left"></i> Ga terug
                        </button>
                        <div class="card rounded-0 border-0 partners mb-3">
                        <div class="card-body border-bottom">
                             <h5 class="card-title text-capitalize border-bottom pb-2 mb-2">
                                Maker partner active</h5>
                                @if(session('success'))
                                <div class="alert alert-success">
                                    {{session('success')}}
                                </div>
                                @endif
                                <form action="{{asset('/make-company-active')}}" method="POST" class="form-inline bg-light pt-2 pl-2">
                                    @csrf
                                <div class="input-group mb-2 mr-sm-2">
                                <label class="sr-only" for="inlineFormInputName2">Name</label>
                                <select name="partners" class="custom-select">
                                    @foreach($noactive as $a)
                                    <option  class="form-control" value="{{$a->id}}">{{$a->company_name}}</option>
                                    @endforeach
                                </select>
                               
                                </div>

                                <div class="form-check mb-2 mr-sm-2">
                                    
                                    <label class="form-check-label text-success" for="inlineFormCheck">
                                    Make company to be active
                                    </label>
                                </div>

                                <button type="submit" class="btn btn-primary mb-2">Submit</button>
                                </form>
                              
                                   <p class="ml-3 mt-2"> <b>Kies een bedrijf.</b><br>  Door op verzenden te klikken stelt u het bedrijf in staat om actief te worden, 
                                    door het te activeren heeft het <br>bedrijf toegang tot het maken van berichten en andere mogelijkheden.<br>
                                    Bedrijven die niet op de lijst staan ​​betekent dat ze nog niet alle 
                                    originele gegevens hebben ingevuld en dat ze dan op de lijst komen om hun profiel te activeren.</p>
                               
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
                                    <th>View more information</th>
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
                                    <td>{{$p->userview->company_name}}</td>
                                    <td>{{$p->email}}</td>
                                    <td>{{$p->userview->phone}}</td>
                                    <td>{{$p->userview->address}}, {{$p->userview->post_code}}</td>
                                    @if($p->userview->payed_status == 0)
                                    <td><span class="text-danger">NO</span></td>
                                    @else
                                    <td><span class="text-success">YES</span></td>
                                    @endif
                                    <td><a href="{{asset('/company/'.$p->userview->id)}}">find out</a></td>
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