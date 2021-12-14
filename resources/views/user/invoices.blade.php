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
                                <table class="table text-left border">
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
                                    <td>@if($p->post_id == null) {{$p->role_payment}} @else{{$p->post['title']}}@endif</td>
                                    <td>{{$p->total}}</td>
                                    @php 
                                        $now = Carbon\Carbon::now();
                                        
                                    @endphp
                                    @if($p->post_id == null) 
                                    <td>/</td> 
                                    @else
                                    <td>
                                        
                                            @if($now >= $p->post['valid_until'])
                                            <span class="status text-danger">De coupon is verlopen {{$p->post['valid_until']}}</span>
                                            @else
                                            <span class="status text-success"> Active until {{$p->post['valid_until']}}   </span>
                                            @endif
                                   </td>
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