@php
    $pagename = 'Cart
';
    $breadcrumbs = [
        ['label' => 'Home', 'url' => url('/')],
        [
            'label' => 'Cart
',
            'url' => route('cart'),
        ],
    ];
@endphp
@extends('layouts.app')

@section('content')
    {{-- inner-banner Starts Here --}}
    <section class="inner-banner">
        <div class="inner_banner_wrapper">
            @include('layouts.front.partials.breadcrumbs', [
                'pagename' => $pagename,
                'breadcrumbs' => $breadcrumbs,
            ])
        </div>
    </section>
    {{-- inner-banner Ends Here --}}

    {{-- cart-section Starts Here  --}}
    <section class="cart-section section">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="cart_detail_main">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>Details</th>
                                        <th> Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="cart_img">
                                                <figure>
                                                    <img src="{{ frontImage('cart-img.png') }}" alt=""
                                                        class="img-fluid">
                                                </figure>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="#" class="blog_name text-decoration-none">The Dope Breakthrough
                                                <br> – Ebook</a>
                                            <h6 class="blog_name mt-2">$89.00</h6>
                                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac
                                                turpis egestas. Vestibulum tortor…</p>
                                            <button type="button"
                                                class="remove_btn bg-transparent border-0 p-0 text-decoration-underline">Remove
                                                item</button>
                                        </td>
                                        <td>
                                            <span>$356.00</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ms-auto">
                    <div class="cart_total_wrapper">
                        <div class="cart_heading border-bottom pb-3 mb-3 text-uppercase">
                            <h5 class="cart_text">Cart totals
                            </h5>
                        </div>
                        <div class="cart_coupon_wrapper">
                            <button
                                class="coupon_btn toggler-btn d-flex align-items-center justify-content-between w-100 bg-transparent border-0 px-3">
                                Add a coupon
                                <span><i class="fa-solid fa-angle-down"></i></span>
                            </button>
                            <div class="cart_input_wrap border-bottom py-3 d-none">
                                <div class="row px-3">
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control form-control-3" placeholder="Enter code">
                                    </div>
                                    <div class="col-lg-3">
                                        <button class="btn">Apply</button>
                                    </div>
                                </div>
                            </div>
                            <div class="cart_item p-3 border-bottom d-flex align-items-center justify-content-between">
                                <span class="total_span">Subtotal</span>
                                <span class="total_span">$99.00</span>
                            </div>
                            <div class="cart_item p-3 d-flex align-items-center justify-content-between">
                                <span class="item_total total_span">Total</span>
                                <span class="item_total total_span">$99.00</span>
                            </div>
                            <div class="cart_btn availabel-btn-wrapper">
                                <a href="#" class="btn btn-primary w-100 py-3">Proceed to Checkout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- cart-section Ends Here  --}}
@endsection
