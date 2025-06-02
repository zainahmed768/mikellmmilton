@extends('layouts.app')
@section('content')
    {{-- list sec starts here --}}
    <section class="list-sec">
        <div class="container">
            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="list-card-wrapper text-center">
                                <div class="list-icon-wrapper">
                                    <img src="{{ frontImage('cf-4-icon-1.svg') }}" class="img-fluid" alt="">
                                </div>
                                <div class="list-heading-wrapper">
                                    <a href="#">
                                        Lorem Ipsum
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="list-card-wrapper text-center">
                                <div class="list-icon-wrapper">
                                    <img src="{{ frontImage('cf-4-icon-2.svg') }}" class="img-fluid" alt="">
                                </div>
                                <div class="list-heading-wrapper">
                                    <a href="#">
                                        Lorem Ipsum
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="list-card-wrapper text-center">
                                <div class="list-icon-wrapper">
                                    <img src="{{ frontImage('cf-4-icon-3.svg') }}" class="img-fluid" alt="">
                                </div>
                                <div class="list-heading-wrapper">
                                    <a href="#">
                                        Lorem Ipsum
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="list-card-wrapper text-center">
                                <div class="list-icon-wrapper">
                                    <img src="{{ frontImage('cf-4-icon-4.svg') }}" class="img-fluid" alt="">
                                </div>
                                <div class="list-heading-wrapper">
                                    <a href="#">
                                        Lorem Ipsum
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2"></div>
            </div>
        </div>
    </section>
    {{-- list sec ends here --}}
    {{-- About starts here --}}
    <section class="about-sec">
        <div class="container">
            <div class="row pb-4">
                <div class="col-lg-12">
                    <div class="about-heading-wrapper d-flex justify-content-between">
                        <h5>About the Book</h5>
                        <div class="icon-wrapper">
                            <i aria-hidden="true" class="fas fa-pen-nib"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-content-wrapper">
                        <h2>The Dope Breakthrough
                            Divining Our Perfect
                            Eternity</h2>
                        <div class="about-paragraph-wrapper">
                            <p class="bold">In The Beginning… You Know The Ending.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec
                                ullamcorper mattis, pulvinar dapibus leo. Lorem ipsum dolor sit amet, consectetur adipiscing
                                elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo. Lorem ipsum
                                dolor.
                            </p>
                            <div class="about-btn-wrapper">
                                <a class="btn-effect-1 text-decoration-none">
                                    <span>know more</span>
                                    <div class="corner tl"></div>
                                    <div class="corner tr"></div>
                                    <div class="corner bl"></div>
                                    <div class="corner br"></div>
                                </a>
                            </div>
                        </div>
                        <div class="about-content-last-img mt-5">
                            <img src="{{ frontImage('a4-illus-1.webp') }}" class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="row pt-4">
                        <div class="col-lg-6">
                            <div class="about-card-wrapper">
                                <div class="about-icon-wrapper">
                                    <span>
                                        <i class="fa-solid fa-industry"></i>
                                    </span>

                                </div>
                                <div class="about-icon-heading-wrapper">
                                    <a href="#">
                                        Lorem Ipsum
                                    </a>
                                    <p>Lorem ipsum is a dummy which will be replaced by actual text</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="about-card-wrapper">
                                <div class="about-icon-wrapper">
                                    <span>
                                        <i class="fa-solid fa-robot"></i>
                                    </span>
                                </div>
                                <div class="about-icon-heading-wrapper">
                                    <a href="#">
                                        Lorem Ipsum
                                    </a>
                                    <p>Lorem ipsum is a dummy which will be replaced by actual text</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-img-wrapper">
                        <img src="{{ frontImage('about-img.png') }}" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- About ends here --}}
    {{-- Break starts here --}}
    <section class="break-sec overflow-x-hidden position-relative">
        <div class="container-fluid px-0">
            <div class="row">
                <div class="col-lg-12">
                    <div class="break-img-wrapper">
                        <figure class="mb-0">
                            <img src="{{ frontImage('break.jpg') }}" class="img-fluid" alt="">
                        </figure>
                        <div class="break-heading-wrapper">
                            <div class="marquee-container">
                                <div class="marquee">
                                    <span>T</span><span>H</span><span>E</span>
                                    <span>D</span><span>R</span><span>O</span><span>P</span>
                                    <span>B</span><span>R</span><span>E</span><span>A</span><span>K</span>
                                    <span>T</span><span
                                        class="highlight">H</span><span>R</span><span>O</span><span>U</span><span>G</span><span>H</span>
                                    &nbsp;&nbsp;&nbsp;
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Break ends here --}}
    {{-- available starts here --}}
    <section class="availabel-sec">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="availabel-heading-wrapper">
                        <h2 class="text-dark text-center">
                            <span class="text-primary">Available in the following</span> Formats
                        </h2>
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
    {{-- dope starts here --}}
    <section class=""></section>
    {{-- dope ends here --}}
@endsection
