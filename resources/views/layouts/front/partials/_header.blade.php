<header class="site-header" id="header">
    <div class="container-fluid px-0">
        <div class="row ">
            <div class="col-lg-2 pe-lg-0">
                <div class="logo-wrapper">
                    <a href="#">
                        <img src={{ frontImage('logo.png') }} class="img-fluid" alt="">
                    </a>
                </div>
            </div>
            <div class="col-lg-10 ps-lg-0">
                <div class="header-top-wrapper d-flex justify-content-between align-items-center">
                    <div class="header-list py-3">
                        <ul class="d-flex list-unstyled gap-2 mb-0">
                            <li>
                                <a href="mailto:mikell3@hotmail.com" class="text-decoration-none">
                                    <i class="fa-regular fa-envelope"></i>
                                    <span class="text-dark">mikell3@hotmail.com</span>
                                </a>
                            </li>
                            {{-- <li>
                                <a href="mailto:mikell3@hotmail.com" class="text-decoration-none">
                                    <i class="fa-solid fa-phone"></i>
                                    <span class="text-dark">828-545-9634</span>
                                </a>
                            </li> --}}
                        </ul>
                    </div>
                    {{-- <div class="header-social-icons-wrapper">
                        <ul class="d-flex list-unstyled mb-0">
                            <li>
                                <a href="#" class="text-dark">
                                    <i class="fa-brands fa-facebook-f"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="text-dark">
                                    <i class="fa-brands fa-linkedin-in"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="text-dark">
                                    <i class="fa-brands fa-x-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="text-dark">
                                    <i class="fa-brands fa-instagram"></i>
                                </a>
                            </li>
                        </ul>
                    </div> --}}
                </div>
                <div class="main-header-wrapper">
                    <div class="header-link-wrapper d-flex align-items-center justify-content-between">
                        <ul class="header-list list-unstyled d-flex gap-5 mb-0 ps-4">
                            <li class="nav-item">
                                <a href="#" class="nav-link">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('about') }}" class="nav-link">about the Book</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">about the author</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">Blogs</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">Contact Us</a>
                            </li>
                        </ul>
                        <div class="header_right_wrapper d-flex align-items-center gap-2">
                            <div class="header-btn">
                                <a class="btn-effect-1 text-decoration-none">
                                    <span>Buy Now</span>
                                    <div class="corner tl"></div>
                                    <div class="corner tr"></div>
                                    <div class="corner bl"></div>
                                    <div class="corner br"></div>
                                </a>
                            </div>
                            <div class="header_hamburger">
                                <button class="icon-badge"
                                    onclick='$(".side-bar").toggleClass("active");$("body").toggleClass("overflow-hidden")'><i
                                        class="fa fa-bars"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <ul class="side-bar list-unstyled d-flex flex-column gap-4 mb-0 pe-lg-5">
        <div class="sidebar_logo_wrapper d-flex align-items-center justify-content-between">
            <div class="sidebar_logo">
                <figure class="mb-0">
                    <img src={{ frontImage('sidebar-logo.png') }} class="img-fluid" alt="">
                </figure>
            </div>
            <div class="sidebar_close">
                <button class="btn"
                    onclick='$(".side-bar").toggleClass("active");$("body").toggleClass("overflow-hidden")'>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </div>
        <div class="gallery_main">
            <div class="gallery_text_wrap">
                <h6 class="gallery_text">Checkout our gallery
                </h6>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="gallery_img mt-4">
                        <a href="{{ frontImage('gallery-img1.jpg') }}" data-fancybox="gallery1">
                            <figure>
                                <img src={{ frontImage('gallery-img1.jpg') }} class="img-fluid" alt="">
                            </figure>
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="gallery_img mt-4">
                        <a href="{{ frontImage('gallery-img2.jpeg') }}" data-fancybox="gallery1">
                            <figure>
                                <img src={{ frontImage('gallery-img2.jpeg') }} class="img-fluid" alt="">
                            </figure>
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="gallery_img mt-4">
                        <a href="{{ frontImage('gallery-img3.jpg') }}" data-fancybox="gallery1">
                            <figure>
                                <img src={{ frontImage('gallery-img3.jpg') }} class="img-fluid" alt="">
                            </figure>
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="gallery_img mt-4">
                        <a href="{{ frontImage('gallery-img4.jpg') }}" data-fancybox="gallery1">
                            <figure>
                                <img src={{ frontImage('gallery-img4.jpg') }} class="img-fluid" alt="">
                            </figure>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </ul>
</header>
