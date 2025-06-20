@php
    $pagename = 'Shop
';
    $breadcrumbs = [
        ['label' => 'Home', 'url' => url('/')],
        [
            'label' => 'Shop
',
            'url' => route('shop'),
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

    {{-- available starts here --}}
    <section class="availabel-sec">
        <div class="container">
            <div class="shop_serach_wrapper">
                <div class="search_wrapper d-flex align-items-center justify-content-between">
                    <p class="search_count mb-0">
                        Showing all 4 results</p>
                    <div class="search_filter">
                        <!-- Filter -->
                        <form action="#">
                            <select name="orderby" class="form-control-2 form-select">
                                <option value="menu_order" selected="selected">Default sorting</option>
                                <option value="popularity">Sort by popularity</option>
                                <option value="rating">Sort by average rating</option>
                                <option value="date">Sort by latest</option>
                                <option value="price">Sort by price: low to high</option>
                                <option value="price-desc">Sort by price: high to low</option>
                            </select>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row pt-5">
                <div class="col-lg-3">
                    <div class="availabel-card-wrapper shop_detail">
                        <div class="availabel-img-wrapper">
                            <figure>
                                <img src="{{ frontImage('shop-img.png') }}" class="img-fluid" alt="">
                            </figure>
                        </div>
                        <div class="availabel-card-heading-wrapper text-center">
                            <h5>The Dope Breakthrough <br>
                                – Audiobook</h5>
                            <h6 class="text-primary">$99.00</h6>
                            <div class="shop_cart availabel-btn-wrapper">
                                <button type="button" class="btn btn-primary"
                                    onclick='$(".cart_sidebar").toggleClass("active");$("body").toggleClass("overflow-hidden")'>
                                    <i class="fa-solid fa-bag-shopping"></i> Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="availabel-card-wrapper shop_detail">
                        <div class="availabel-img-wrapper">
                            <figure>
                                <img src="{{ frontImage('shop-img.png') }}" class="img-fluid" alt="">
                            </figure>
                        </div>
                        <div class="availabel-card-heading-wrapper text-center">
                            <h5>The Dope Breakthrough <br>
                                – Audiobook</h5>
                            <h6 class="text-primary">$99.00</h6>
                            <div class="shop_cart availabel-btn-wrapper">
                                <button type="button" class="btn btn-primary"
                                    onclick='$(".cart_sidebar").toggleClass("active");$("body").toggleClass("overflow-hidden")'>
                                    <i class="fa-solid fa-bag-shopping"></i> Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="availabel-card-wrapper shop_detail">
                        <div class="availabel-img-wrapper">
                            <figure>
                                <img src="{{ frontImage('shop-img.png') }}" class="img-fluid" alt="">
                            </figure>
                        </div>
                        <div class="availabel-card-heading-wrapper text-center">
                            <h5>The Dope Breakthrough <br>
                                – Audiobook</h5>
                            <h6 class="text-primary">$99.00</h6>
                            <div class="shop_cart availabel-btn-wrapper">
                                <button type="button" class="btn btn-primary"
                                    onclick='$(".cart_sidebar").toggleClass("active");$("body").toggleClass("overflow-hidden")'>
                                    <i class="fa-solid fa-bag-shopping"></i> Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="availabel-card-wrapper shop_detail">
                        <div class="availabel-img-wrapper">
                            <figure>
                                <img src="{{ frontImage('shop-img.png') }}" class="img-fluid" alt="">
                            </figure>
                        </div>
                        <div class="availabel-card-heading-wrapper text-center">
                            <h5>The Dope Breakthrough <br>
                                – Audiobook</h5>
                            <h6 class="text-primary">$99.00</h6>
                            <div class="shop_cart availabel-btn-wrapper">
                                <button type="button" class="btn btn-primary"
                                    onclick='$(".cart_sidebar").toggleClass("active");$("body").toggleClass("overflow-hidden")'>
                                    <i class="fa-solid fa-bag-shopping"></i> Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- available ends here --}}
@endsection
