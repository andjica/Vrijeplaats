
@extends('layouts.template-admin')
@section('content')

<div id="wrapper-content" class="wrapper-content pt-0 pb-0">
    <div class="page-wrapper d-flex flex-wrap flex-xl-nowrap">
        @include('admin.sidebar')
        <div class="page-container">
            <div class="container-fluid">
                @isset($purchase)
            <div class="page-content">
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
                        Bill to
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
                        information invoice
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
                <th style="width:34%">items &amp; description</th>
                <th>Ticket valid until</th>
                <th>price</th>
                <th class="text-right">total</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                <td>{{$purchase->post->title}} - <br>{{$purchase->category->name}} <br>
                {{$purchase->post->full_address}}<br>

                </td>
                <td>{{$purchase->post->valid_until}}</td>
                <td>€{{$purchase->total}}</td>
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
                <a href="mailto:www.example.com" class="link-hover-dark-primary">www.example.com</a>
                <span class="separate text-dark">|</span>
                <a href="mailto:office@example.com" class="link-hover-dark-primary">office@example.com </a>
                <span class="separate text-dark">|</span>
                <span class="text-dark">(123) 123-456</span>
                </div>
                </div>
                @endisset
            </div>
        </div>
    </div>
</div>
@endsection