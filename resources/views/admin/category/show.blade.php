
@extends('layouts.template-admin')
@section('content')


@isset($category)
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
                        <div class="card rounded-0 border-0 invoices bg-white">
                            <h4 class="p-2">{{$category->name}} Categorie is @if($category->active == "YES")<span class="text-success">Actief</span>
                             @else <span class="text-danger">Niet actief @endif</span></h4>
                        </div>
                        <div class="row  facts-box ">
                        <div class="col-lg-5 mt-2">
                            <div class="card time-bookmark rounded-0 border-0 text-white">
                                    <div class="card-body d-flex align-items-center p-0">
                                        <div class="content mr-auto">
                                            <span class="font-size-h1 font-weight-semibold lh-1 d-block">{{$category->posts->count()}}</span>
                                            <span class="font-size-m">
                                            Berichten in totaal uit deze categorie</span>
                                        </div>
                                        <div class="fact-icon">
                                            <svg class="svg-inline--fa fa-bookmark fa-w-12" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="bookmark" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg=""><path fill="currentColor" d="M0 512V48C0 21.49 21.49 0 48 0h288c26.51 0 48 21.49 48 48v464L192 400 0 512z"></path></svg><!-- <i class="fas fa-bookmark"></i> Font Awesome fontawesome.com -->
                                        </div>
                                    </div>
                                </div>
                           
                            </div>
                            <div class="col-lg-5 mt-2">
                            <div class="card review rounded-0 border-0 text-white">
                                    <div class="card-body d-flex align-items-center p-0">
                                        <div class="content mr-auto">
                                            <span class="font-size-h1 font-weight-semibold lh-1 d-block">{{$category->posts->count()}}</span>
                                            <span class="font-size-m">
                                            Berichten in totaal uit deze categorie</span>
                                        </div>
                                        <div class="fact-icon">
                                            <svg class="svg-inline--fa fa-bookmark fa-w-12" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="bookmark" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg=""><path fill="currentColor" d="M0 512V48C0 21.49 21.49 0 48 0h288c26.51 0 48 21.49 48 48v464L192 400 0 512z"></path></svg><!-- <i class="fas fa-bookmark"></i> Font Awesome fontawesome.com -->
                                        </div>
                                    </div>
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
                                <td><a href="{{asset('/category/'.$c->id)}}" class="text-success">Meer over</a></td>
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

@endisset
@endsection