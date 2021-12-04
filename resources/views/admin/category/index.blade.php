
@extends('layouts.template-admin')
@section('content')

<div id="wrapper-content" class="wrapper-content pt-0 pb-0">
    <div class="page-wrapper d-flex flex-wrap flex-xl-nowrap mt-11">
        @include('admin.sidebar')
        <div class="page-container">
            <div class="container-fluid">
                <div class="page-content-wrapper d-flex flex-column justify-content-center">
                    <div class="row">
                     <div class="col-xl-10 mb-6 mb-xl-0 mt-2">
                        <button class="btn btn-primary text-right  btn-sm mb-2" onclick="goBack()">   
                            <i class="fas fa-arrow-left"></i> Ga terug
                         </button>
                        <div class="card rounded-0 border-0 reccent-activities">
                            <div class="card-body">
                                <h5 class="card-title text-capitalize border-bottom pb-2 mb-2">
                                    Recent
                                    Categories</h5>
                                        <div class="table-responsive">
                                            <table class="table">
                                            <tbody>
                                                <tr>
                                                    <th>Naam</th>
                                                    <th>Gemaakt bij </th>
                                                    <th>Actief</th>
                                                    <th>Beheren</th>
                                                </tr>
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
                                            <td>{{$c->created_at}}</td>

                                            <td>@if($c->active == "YES")<span class="text-success">Actief</span>@else <span class="text-danger">Niet actief</span>@endif</td>

                                            <td><a href="{{asset('/category/'.$c->id)}}" class="text-muted"><i class="fas fa-wrench"></i> Beheren</a></td>
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