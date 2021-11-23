
@extends('layouts.template-admin')
@section('content')



<div id="wrapper-content" class="wrapper-content pt-0 pb-0">
    <div class="page-wrapper d-flex flex-wrap flex-xl-nowrap mt-11">
        @include('admin.sidebar')
        <div class="page-container">
            <div class="container-fluid">
                <div class="page-content-wrapper d-flex flex-column justify-content-center">
                    <div class="row">
                    <div class="col-xl-8">
                    <button class="btn btn-primary text-right  btn-sm mb-2" onclick="goBack()">   
                            <i class="fas fa-arrow-left"></i> Ga terug
                    </button>
                        <div class="card rounded-0 border-0 invoices">
                            <div class="card-body">
                                <h5 class="card-title text-capitalize border-bottom pb-2 mb-2">
                                Create a new category</h5>
                                <div class="table-responsive-sm">
                            <form action="{{asset('/insert-category')}}" method="POST">
                            @csrf 
                            <div class="form-group">
                                <label for="category">Category name</label>
                                <input type="text" name="name" class="form-control" id="name" aria-describedby="name" placeholder="Example gifts">
                                <small id="emailHelp" class="form-text text-muted">Give a short name to your category</small>
                                @if ($errors->has('name'))  <p style="color:red;">{{$errors->first('name')}}</p> @endif

                            </div>
                            <div class="form-group">
                                <label for="description">Dscription</label>
                                <textarea class="form-control" id="description" name="description"></textarea>
                            </div>
                            @foreach($icons as $i)
                                <div class="form-check fa-2x m-4" style="display:inline-block">
                                <input class="form-check-input" type="radio" value="{{$i->id}}" name="icons[]" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                <p class="dispay-4">@php echo $i->name @endphp</p>
                                </label>
                               

                                </div>
                                @endforeach
                                @if ($errors->has('icons'))  <p style="color:red;">{{$errors->first('icons')}}</p> @endif
                            <input type="submit" class="btn btn-success btn-lg btn-block" value="Create">
                            </form>
                          
                                                  
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 mb-6 mb-xl-0 mt-7">
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection