
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
                        <img src="images/logo.png" alt="Thedir">
                        </div>
                        <div class="text-dark font-size-md lh-1625">
                        <address>
                        Stack Creative Studio<br>
                        4025 Oak Avenue,<br>
                        New York,<br>
                        NY 10092,<br>
                        United States
                        </address>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4 mb-md-0">
                        <div class="text-gray font-weight-medium text-uppercase mb-4">
                        Bill to
                        </div>
                        <div class="text-dark font-size-md lh-1625">
                        <address>
                        Mr. Bret Lezama<br>
                        4879 Westfall Avenue,<br>
                        Albuquerque,<br>
                        New Mexico-87102.<br>
                        Mexico
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
                        <span> 20/07/2017 </span>
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
                <th>quantity</th>
                <th>price</th>
                <th>VAT</th>
                <th class="text-right">total</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                <td>Premium Plan</td>
                <td>1 Years</td>
                <td>$59.00/mo</td>
                <td>10%</td>
                <td>$599.00</td>
                </tr>
                </tbody>
                </table>
                </div>
                <div class="d-flex mt-4">
                <div class="ml-auto text-right">
                <span class="text-dark font-size-lg d-block font-weight-semibold total">Invoice Total: $599.00</span>
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