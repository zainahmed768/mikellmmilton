@php
    $pagename = 'Contact Us';
    $breadcrumbs = [['label' => 'Home', 'url' => url('/')], ['label' => 'Contact Us', 'url' => route('blogs')]];
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

    {{-- contactdetail-section Starts Here  --}}
    <section class="contactdetail-section section">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="prophecy-img-wrapper">
                        <figure class="mb-0">
                            <img src="{{ frontImage('prophecy-img.jpeg') }}" alt="" class="img-fluid prophecy_img">
                        </figure>
                    </div>
                </div>
                <div class="col-md-6 ps-lg-5">
                    <div class="contact_form_wrapper">
                        <h6> <img src="{{frontImage('star-shape.webp')}}" alt="" class="img-fluid"> Contact us</h6>
                        <div class="text-container">
                            <h2 class="reveal-text target-heading" data-text="Get in touch with us!"></h2>
                        </div>
                        <form action="#">
                            <div class="form-group">
                                <label for="" class="form-label">name</label>
                                <input type="text" class="form-control" placeholder="e.g. Oliver Spiteri">
                            </div>
                            <div class="form-group">
                                <label for="" class="form-label">phone
                                </label>
                                <input type="number" class="form-control" placeholder="e.g. +1 877 217 8371">
                            </div>
                            <div class="form-group">
                                <label for="" class="form-label">email
                                </label>
                                <input type="email" class="form-control" placeholder="example@email.com">
                            </div>
                            <div class="form-group">
                                <label for="" class="form-label">message
                                </label>
                                <textarea name="" id="" cols="30" rows="4" class="form-control"
                                    placeholder="write your message here"></textarea>
                            </div>
                            <div class="form-btn">
                                <button type="submit" class="btn">Submit Now</button>
                            </div>
                        </form>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </section>
    {{-- contactdetail-section Ends Here  --}}
@endsection
