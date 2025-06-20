@php
    $pagename = 'Product Details';
    $breadcrumbs = [
        ['label' => 'Home', 'url' => url('/')],
        ['label' => 'Product', 'url' => route('about')],
        ['label' => 'Book', 'url' => route('about')],
        ['label' => 'the-dope-breakthrough-paperback', 'url' => route('about')],
    ];
@endphp
@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="{{ frontCss('product-detail.css') }}">
    <link href="{{ frontCss('jquery.exzoom.css') }}" rel="stylesheet">

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
    {{-- product Detail starts here --}}
    <section class="product-detail">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="exzoom" id="exzoom">
                        <!-- Images -->
                        <div class="exzoom_img_box">
                            <ul class='exzoom_img_ul'>
                                <li><img src="{{ frontImage('book-img.png') }}" /></li>
                                <li><img src="{{ frontImage('book-img.png') }}" /></li>
                            </ul>
                        </div>
                        <div class="exzoom_nav"></div>
                        {{-- <p class="exzoom_btn">
                            <a href="javascript:void(0);" class="exzoom_prev_btn">
                                < </a>
                                    <a href="javascript:void(0);" class="exzoom_next_btn"> > </a>
                        </p> --}}
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="product-text-wrapper">
                        <h3>
                            The Dope Breakthrough
                            – Paperback</h3>
                        <h6>$99.00</h6>
                        <p>
                            Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                            Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero
                            sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.
                        </p>
                        <div class="product-counter-btn-wrapper d-flex gap-2 align-items-center">
                            <div class="product-counter-wrapper">
                                <button><i class="fa-solid fa-minus"></i></button>
                                <input type="number" value="1">
                                <button><i class="fa-solid fa-plus"></i></button>
                            </div>
                            <div class="product-cart-btn-wrapper">
                                <button class="btn btn-primary">Add to cart</button>
                            </div>
                        </div>
                        <div class="product-detail-list-wrapper mt-4">
                            <p><span>Category:</span> <a href="#">Book</a></p>
                            <p><span>Tag:</span> <a href="#">Book</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="product-detail-tabs-wrapper mt-5">
                        <div class="product-tabs-wrapper">
                            <ul class="nav nav-tabs">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#description">DESCRIPTION</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#reviews">REVIEWS (0)</a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="description">
                                <div class="description-wrapper">
                                    <div class="description-heading-wrapper">
                                        <h2>Description</h2>
                                    </div>
                                    <div class="description-txt-wrapper mt-3">
                                        <p>
                                            Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac
                                            turpis
                                            egestas.
                                            Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.
                                            Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est.
                                            Mauris placerat eleifend leo.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="reviews">
                                <div class="review-wrapper">
                                    <div class="review-heading-wrapper">
                                        <h2>Reviews</h2>
                                    </div>
                                    <div class="review-txt-wrapper">
                                        <p>There are no reviews yet.</p>
                                        <p>Be the first to review “The Dope Breakthrough <br> – Paperback”
                                        </p>
                                    </div>
                                    <div class="review-form-wrapper">
                                        <form action="">
                                            <div class="form-group">
                                                <label for="Your rating">Your rating *</label>
                                                <div class="star-rating">
                                                    <input type="radio" id="5-stars" name="rating" value="5" />
                                                    <label for="5-stars" class="star">&#9733;</label>
                                                    <input type="radio" id="4-stars" name="rating" value="4" />
                                                    <label for="4-stars" class="star">&#9733;</label>
                                                    <input type="radio" id="3-stars" name="rating" value="3" />
                                                    <label for="3-stars" class="star">&#9733;</label>
                                                    <input type="radio" id="2-stars" name="rating" value="2" />
                                                    <label for="2-stars" class="star">&#9733;</label>
                                                    <input type="radio" id="1-star" name="rating" value="1" />
                                                    <label for="1-star" class="star">&#9733;</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Your review *</label>
                                                <textarea name="" class="form-control" id="" cols="30" rows="10"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="Name">Name *</label>
                                                <input type="text" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="Name">Email *</label>
                                                <input type="email" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <button class="btn btn-primary rounded text-white"> <span>Submit</span> <i
                                                        class="fa-solid fa-arrow-right-long"></i></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- product Detail End here --}}
    {{-- available starts here --}}
    <section class="availabel-sec product-related">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="availabel-heading-wrapper">
                        <h5 class="text-dark">
                            Related products
                        </h5>
                    </div>
                </div>
            </div>
            <div class="row pt-5">
                <div class="col-lg-3">
                    <div class="availabel-card-wrapper">
                        <div class="availabel-img-wrapper">
                            <figure>
                                <img src="{{ frontImage('availabel.png') }}" class="img-fluid" alt="">
                            </figure>
                        </div>
                        <div class="availabel-card-heading-wrapper text-center">
                            <h5>The Dope Breakthrough
                                – Audiobook</h5>
                            <h6 class="text-primary">$99.00</h6>
                            <div class="availabel-btn-wrapper d-flex justify-content-between align-items-center">
                                <a href="#" class="btn btn-primary">
                                    Add to Cart
                                </a>
                                <a href="#" class="btn btn-primary">
                                    Buy Now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="availabel-card-wrapper">
                        <div class="availabel-img-wrapper">
                            <figure>
                                <img src="{{ frontImage('availabel.png') }}" class="img-fluid" alt="">
                            </figure>
                        </div>
                        <div class="availabel-card-heading-wrapper text-center">
                            <h5>The Dope Breakthrough
                                – Audiobook</h5>
                            <h6 class="text-primary">$99.00</h6>
                            <div class="availabel-btn-wrapper d-flex justify-content-between align-items-center">
                                <a href="#" class="btn btn-primary">
                                    Add to Cart
                                </a>
                                <a href="#" class="btn btn-primary">
                                    Buy Now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="availabel-card-wrapper">
                        <div class="availabel-img-wrapper">
                            <figure>
                                <img src="{{ frontImage('availabel.png') }}" class="img-fluid" alt="">
                            </figure>
                        </div>
                        <div class="availabel-card-heading-wrapper text-center">
                            <h5>The Dope Breakthrough
                                – Audiobook</h5>
                            <h6 class="text-primary">$99.00</h6>
                            <div class="availabel-btn-wrapper d-flex justify-content-between align-items-center">
                                <a href="#" class="btn btn-primary">
                                    Add to Cart
                                </a>
                                <a href="#" class="btn btn-primary">
                                    Buy Now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="availabel-card-wrapper">
                        <div class="availabel-img-wrapper">
                            <figure>
                                <img src="{{ frontImage('availabel.png') }}" class="img-fluid" alt="">
                            </figure>
                        </div>
                        <div class="availabel-card-heading-wrapper text-center">
                            <h5>The Dope Breakthrough
                                – Audiobook</h5>
                            <h6 class="text-primary">$99.00</h6>
                            <div class="availabel-btn-wrapper d-flex justify-content-between align-items-center">
                                <a href="#" class="btn btn-primary">
                                    Add to Cart
                                </a>
                                <a href="#" class="btn btn-primary">
                                    Buy Now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- available ends here --}}
@endsection
