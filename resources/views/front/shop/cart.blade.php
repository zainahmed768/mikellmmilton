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
                <div class="col-md-8">
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
                                            <button type="button" class="remove_btn bg-transparent border-0 p-0 text-decoration-underline">Remove
                                                item</button>
                                        </td>
                                        <td>
                                            <span>$356.00</span>
                                        </td>
                                    </tr>
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
                                            <h6 class="blog_name mt-2">$99.00</h6>
                                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac
                                                turpis egestas. Vestibulum tortor…</p>
                                            <button type="button" class="remove_btn bg-transparent border-0 p-0 text-decoration-underline">Remove
                                                item</button>
                                        </td>
                                        <td>
                                            <span>$198.00</span>
                                        </td>
                                    </tr>
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
                                            <h6 class="blog_name mt-2">$99.00</h6>
                                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac
                                                turpis egestas. Vestibulum tortor…</p>
                                            <button type="button" class="remove_btn bg-transparent border-0 p-0 text-decoration-underline">Remove
                                                item</button>
                                        </td>
                                        <td>
                                            <span>$198.00</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- cart-section Ends Here  --}}
@endsection
