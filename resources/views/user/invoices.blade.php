@extends('layouts.app')

@section('content')


    <div class="container mt-11 pt-8 border pb-7">
      <div class="row">
        <div class="col-lg-4">
          @include('user.sidebar')
        </div>
      <div class="col-lg-8">
      @if(session('success'))
      <div class="alert alert-success">
          {{session('success')}}
      </div>
      @endif
      
      <div class="card rounded-0 border-0 invoices">
                            <div class="card-body">
                                <h5 class="card-title text-capitalize border-bottom pb-2 mb-2">
                                Invoices</h5>
                                <div class="table-responsive-sm">
                                <table class="table text-left">
                                    <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>AANKOOPDATUM</th>
                                    <th>Post</th>
                                    <th>Price</th>
                                    <th>Geldig tot</th>
                                    <th>Details</th>
                                </tr>
                                </thead>
                                    <tbody>
                                @foreach($purchases as $p)
                                    <tr>
                                    <td>
                                    {{$p->inv_id}}
                                    </td>
                                    <td>{{$p->created_at->format('d-m-Y')}}</td>
                                    <td>{{$p->post->title}}</td>
                                    <td>{{$p->total}}</td>
                                    @php 
                                        $now = Carbon\Carbon::now();
                                        
                                    @endphp
                                    @if($now >= $p->post->valid_until)
                                    <td><span class="status text-danger">{{$p->post->valid_until}}</span></td>

                                    @else
                                    <td><span class="status paid">{{$p->post->valid_until}}</span></td>

                                     @endif
                                    <td>
                                        <a href="{{asset('/user-invoice='.$p->inv_id)}}" class="link-hover-dark-blue">
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

        <div class="page-right px-3 border">
            <div class="card rounded-0 border-0 contact py-6 px-3">
                <div class="card-body text-center p-0">
                <div class="contact-icon text-dark mb-3">
                    <svg class="icon icon-headset">
                    <use xlink:href="#icon-headset"></use>
                    </svg>
                </div>
                    <div class="text-dark font-size-md mb-5">
                    <p class="mb-2">Heb een probleem en
                        ondersteuning nodig?<br> Bel ons direct
                    </p>
                        <p class="font-weight-semibold h5 mb-2">(+34) 967-123-888</p>
                        <p>Of chat met ons</p>
                    </div>
                    <a href="#" class="btn btn-primary font-size-md px-8 lh-15">Contact Us</a>
            </div>
            </div>
            </div>
</div>
@endsection