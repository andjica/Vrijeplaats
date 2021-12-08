@extends('layouts.app')

@section('content')

@isset($purchase)
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
        <div class="card-body border shadow-lg">
            <h5 class="card-title text-capitalize border-bottom pb-2 mb-2">
            Invoice {{$purchase->inv_id}}</h5>
            <div class="table-responsive-sm">
            <div class="mb-9 row flex-md-nowrap">
                    <div class="col-md-4 mb-4 mb-md-0">
                    <div class="mb-5">
                        <img src="{{asset('/images/')}}/logosmall.jpeg" alt="Vrijeplaats" width="100px">
                        </div>
                        <div class="text-dark font-size-md lh-1625">
                        <address>
                       Vrijeplaats<br>
                        4025 Oak Avenue,<br>
                        Rotterdam, Netherlands
                        </address>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4 mb-md-0">
                        <div class="text-gray font-weight-medium text-uppercase mb-4">
                        
                            Rekening naar
                        </div>
                        <div class="text-dark font-size-md lh-1625">
                        <address>
                        {{$purchase->user->userview->firstname}} {{$purchase->user->userview->lastname}}<br>
                        <p>{{$purchase->user->userview->address}}</p>
                        </address>
                        </div>
                    </div>
                    <div class="col-md-4  ml-0 ml-md-auto text-left text-md-right">
                        <div class="text-gray font-weight-medium text-uppercase mb-4">
                        FACTUUR INFORMATIE
                        </div>
                        <div class="text-dark font-size-md lh-1625">
                        <div class="">
                        <span class="text-dark font-weight-semibold">Order:</span>
                        <span class="text-link"> INV-0001</span>
                        </div>
                        <div class="">
                        <span class="text-dark font-weight-semibold">Issued:</span>
                        <span> {{$purchase->created_at->format('d-m-Y')}} </span>
                        </div>
                        <span class="text-secondary">
                        Due 7 days from date of issue
                        </span>
                        </div>
                        
                    </div>
                    
                </div>
                <div class="table-responsive-md">
                <table class="table">
                <thead>
                <tr>
                <th style="width:34%">ITEMS en BESCHRIJVING:</th>
                <th>KAART GELDIG TOT</th>
                <th>Prijst</th>
                <th>Belasting</th>
                <th class="text-right">total</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                <td>@if($purchase->post['title'] == null) 
                      {{$purchase->role_payment}}
                    @else
                        {{$purchase->post['title']}} - <br>{{$purchase->category['name']}} <br>
                        {{$purchase->post['full_address']}} 
                    @endif<br>
                 </td>
                <td>@if($purchase->post['valid_until'] == null) / @else{{$purchase->post['valid_until']}}@endif</td>
                    @if($purchase->category_id == null)
                    <td>21%</td>
                    @else 
                    <td> @if($purchase->post->category['tax'] == 21)
                        @php 
                        
                                $tax = $purchase->post->price_discount / 1.21;
                                $priceextax  = $purchase->post->price_discount - $tax;
                                echo round($tax, 2);
                        @endphp
                        @else

                        @endif
                        @endif
                </td>
                <td>
                @if($purchase['category_id'] == null)
                    €{{$purchase->tax}}
                @else
                    @if($purchase->post->category['tax'] == 21)
                        @php 
                        
                                $tax = $purchase->post->price_discount / 1.21;
                                $priceextax  = $purchase->post->price_discount - $tax;
                                echo round($priceextax, 2);
                        @endphp
                        @else

                        @endif

                </td>
                @endif
                
                <td class="text-right">€{{$purchase->total}}</td>
                </tr>
                </tbody>
                </table>
                </div>
                <div class="d-flex mt-4">
                <div class="ml-auto text-right">
                <span class="text-dark font-size-lg d-block font-weight-semibold total">Invoice Total: €{{$purchase->total}}</span>
                <span class="font-size-md">Paid via Credit Card</span>
                </div>
                </div>
                <div class="contact-info d-flex flex-wrap flex-md-nowrap font-size-md mt-13">
                <a href="mailto:www.example.com" class="link-hover-dark-primary">www.vrijeplaats.nl</a>
                <span class="separate text-dark">  &nbsp; | &nbsp; </span>
                <a href="mailto:nfo@vrijeplaats.nl" class="link-hover-dark-primary">info@vrijeplaats.nl </a>
                <span class="separate text-dark"> &nbsp;|  &nbsp;</span>
                <span class="text-dark">(123) 123-456</span>
                </div>
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

@endisset
@endsection