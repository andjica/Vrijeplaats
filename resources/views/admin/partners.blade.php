
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
                                    <option  class="form-control" value="{{$a->company_name}}">{{$a->company_name}}</option>
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
                              
                                   <p class="ml-3 mt-2"> Op deze manier laat je het bedrijf actief zijn. <br>Door op verzenden te klikken, ontving het bedrijf een e-mail met inloggegevens. Het drukt ook automatisch een factuur af die kan worden bekeken door zowel de beheerder als de gebruiker die het profiel activeert.</p>
                               
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
                                    <th>Gebruiker</th>
                                    <th>NAAM VAN HET BEDRIJF</th>
                                    <th>Email</th>
                                    <th>Telefoon</th>
                                    <th>Adres en postcode</th>
                                    <th>Active STATUS</th>
                                    <th>Bekijk meer informatie</th>
                                    <th>Verwijderen</th>
                                </tr>
                                </thead>
                                    <tbody>
                                @foreach($partners as $p)
                                    <tr>
                                    <td>
                                    {{$p->id}}
                                    </td>
                                    <td>{{$p->created_at}}</td>
                                    <td>{{$p->firstname}} {{$p->lastname}}</td>
                                    <td>{{$p->company_name}}</td>
                                    <td>{{$p->email}}</td>
                                    <td>{{$p->phone}}</td>
                                    <td>{{$p->address}}, {{$p->post_code}}</td>
                                    @if($p->payed_status == 0)
                                    <td><span class="text-danger">NO</span></td>
                                    @else
                                    <td><span class="text-success">YES</span></td>
                                    @endif
                                    <td><a href="{{asset('/company/'.$p->id)}}">find out</a></td>
                                    <td> <button  class="btn btn-danger btn-icon-left  mb-2 mb-sm-0 px-5 font-size-md" data-toggle="modal" data-target="#user{{$p->id}}">
                                        <i class="fa fa-trash-alt"></i>
                                            Overzicht
                                    </button>
                                    <div class="modal fade" id="user{{$p->id}}" tabindex="-1" role="dialog" aria-labelledby="postmodal" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="postmodals"><b>{{$p->company_name}}</b></h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                Om er zeker van te zijn dat u de gebruiker wilt verwijderen
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <a href="{{asset('/delete-user/'.$p->id)}}" class="btn btn-danger">
                                                <i class="fas fa-trash"></i>Overzicht</a>
                                            </div>
                                            </div>
                                        </div>
                                    </div>  
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