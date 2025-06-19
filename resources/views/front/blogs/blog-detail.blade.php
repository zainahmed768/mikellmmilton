@extends('layouts.app')

@section('content')
    {{-- inner-banner Starts Here --}}
    <section class="inner-banner">
        <div class="inner_banner_wrapper justify-content-center">
            <h1 class="inner_banner_heading">Blog Title here
            </h1>
        </div>
    </section>
    {{-- inner-banner Ends Here --}}

    {{-- blogsdetail-section Starts Here  --}}
    <section class="blogsdetail-section section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="blog_desc_wrapper">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper
                            mattis, pulvinar dapibus leo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit
                            tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo. Lorem ipsum dolor.
                            <br><br>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper
                            mattis, pulvinar dapibus leo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit
                            tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo. Lorem ipsum dolor.
                            <br><br>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper
                            mattis, pulvinar dapibus leo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit
                            tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo. Lorem ipsum dolor.
                            <br><br>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper
                            mattis, pulvinar dapibus leo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit
                            tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo. Lorem ipsum dolor.
                            <br><br>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper
                            mattis, pulvinar dapibus leo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit
                            tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo. Lorem ipsum dolor.
                        </p>
                        <div class="blog_form_wrapper pt-5">
                            <div class="form_heading_wrap mb-3">
                                <h3 class="form_heading">Leave a Reply
                                </h3>
                            </div>
                            <div class="blog_detail_form p-5">
                                <form action="#">
                                    <div class="form-group">
                                        <label for="" class="form-label">Message
                                        </label>
                                        <textarea name="" id="" cols="30" rows="3" class="form-control"
                                            placeholder="Write your message here..."></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="form-label">Full name
                                        </label>
                                        <input type="text" class="form-control" placeholder="Full Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="form-label">email
                                        </label>
                                        <input type="email" class="form-control" placeholder="info@example.com">
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="form-label">Phone Number
                                        </label>
                                        <input type="number" class="form-control" placeholder="+1 234 567 890">
                                    </div>
                                    <div class="form-btn">
                                        <button type="submit" class="btn contact_btn">Send Message <i
                                                class="fa-solid fa-arrow-right-long"></i> <span class="shape"></span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- blogsdetail-section Starts Here  --}}
@endsection
