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

    {{-- diaspora-section Starts Here  --}}
    <section class="diaspora-section">
        <div class="container-fluid px-0">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="diaspora-content-wrapper">
                        <div class="row pb-4">
                            <div class="col-lg-12">
                                <div class="about-heading-wrapper d-flex justify-content-between">
                                    <h5 class="text-white">More About Us
                                    </h5>
                                    <div class="icon-wrapper">
                                        <i aria-hidden="true" class="fas fa-pen-nib"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ml14 mb-4">
                            <h2 class="level-2 heading-font text-white mb-0">
                                <span class="letters">A Prophecy for the 21st
                                    century Israelites in the
                                    diaspora.</span>
                            </h2>
                        </div>
                        <p class="text-white">I consider that our present sufferings are not worth comparing with the glory
                            that will be
                            revealed in us. 19 For the creation waits in eager expectation for the children of YAHAWAH to be
                            revealed. 20 For the creation was subjected to frustration, not by its own choice, but by the
                            will of the one who subjected it, in hope 21 that[a] the creation itself will be liberated from
                            its bondage to decay and brought into the freedom and glory of the children of YAHAWAH. - Romans
                            8:18-21
                        </p>
                        <p class="text-white">
                            We are here. 144,000-plus! And if you are reading this, you are either an Israelite, a
                            Revelation 7:9er brother/sister-in-arms, a hater, or an NPC, a Nemesis Powered Competitor who
                            works for the small remnant of fallen angels, Annunaki, Nephilim and Esau tribesmen destined to
                            lose… very, very, soon.
                        </p>
                        <p class="text-white">
                            We know our origin story, so we don’t hate you. We barely raise our voice, much less permit you
                            to live rent free in our minds. But don’t get it twisted, we are here to defeat you. But first
                            we must awaken the captive souls who are stuck in your dark spells and illusions of grandeur.
                            Our Mission? Well, of course every military operation has a name. CODE NAME: The DOPE
                            Breakthrough.</p>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="diaspora-video-wrapper">
                        <div id="customControls" class="custom-controls d-flex justify-content-center align-items-center">
                            <a href="#" class="video_btn d-flex align-items-center justify-content-center">
                                <i class="fa-solid fa-play"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="diaspoa_box_main">
                <ul class="diaspora_ul list-unstyled d-flex align-items-center">
                    <li class="diaspora_li text-center">
                        <div class="diaspora_icon">
                            <figure class="mb-0">
                                <img src="{{ frontImage('blueprint.png') }}" alt="" class="img-fluid">
                            </figure>
                        </div>
                        <div class="diaspora_content pt-4">
                            <h4 class="text-white">
                                <a href="#" class="text-white text-decoration-none">Lorem Ipsum Dolor</a>
                            </h4>
                            <p class="text-white">Lorem ipsum is a dummy which will be replaced. Lorem ipsum is a dummy
                                which will be replaced.
                            </p>
                        </div>
                    </li>
                    <li class="diaspora_li text-center">
                        <div class="diaspora_icon">
                            <figure class="mb-0">
                                <img src="{{ frontImage('open-book.png') }}" alt="" class="img-fluid">
                            </figure>
                        </div>
                        <div class="diaspora_content pt-4">
                            <h4 class="text-white">
                                <a href="#" class="text-white text-decoration-none">Lorem Ipsum Dolor</a>
                            </h4>
                            <p class="text-white">Lorem ipsum is a dummy which will be replaced. Lorem ipsum is a dummy
                                which will be replaced.
                            </p>
                        </div>
                    </li>
                    <li class="diaspora_li text-center">
                        <div class="diaspora_icon">
                            <figure class="mb-0">
                                <img src="{{ frontImage('property-insurance.png') }}" alt="" class="img-fluid">
                            </figure>
                        </div>
                        <div class="diaspora_content pt-4">
                            <h4 class="text-white">
                                <a href="#" class="text-white text-decoration-none">Lorem Ipsum Dolor</a>
                            </h4>
                            <p class="text-white">Lorem ipsum is a dummy which will be replaced. Lorem ipsum is a dummy
                                which will be replaced.
                            </p>
                        </div>
                    </li>
                    <li class="diaspora_li text-center">
                        <div class="diaspora_icon">
                            <figure class="mb-0">
                                <img src="{{ frontImage('goodwill.png') }}" alt="" class="img-fluid">
                            </figure>
                        </div>
                        <div class="diaspora_content pt-4">
                            <h4 class="text-white">
                                <a href="#" class="text-white text-decoration-none">Lorem Ipsum Dolor</a>
                            </h4>
                            <p class="text-white">Lorem ipsum is a dummy which will be replaced. Lorem ipsum is a dummy
                                which will be replaced.
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    {{-- diaspora-section Ends Here  --}}

    {{-- assembly-section Starts Here  --}}
    <section class="assembly-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="assembly_content">
                        <div class="ml14 mb-4">
                            <h2 class="level-2 heading-font text-dark mb-0">
                                <span class="letters">ABOUT US
                                </span>
                            </h2>
                            <h5 class="text-dark">After Nearly Two Millennia, the Iconic Assembly of ‘Messianic Israelites
                                and Christian
                                Gentiles’
                            </h5>
                        </div>
                        <p class="text-dark">What makes a team great? Is it the franchise, the coaching staff, the
                            players? Truth be told, it’s all of the above. But what made the 1st century Messianic
                            Israelites, (led by the Apostles James and Peter) and the Christian Gentiles (coached by the
                            Apostle Paul) an ICONIC DYNASTY? Their game-changing partnership that breathed life into the
                            family of mankind and transformed Christ-King Yashiah’s G-LIFE movement into a spiritual
                            phenomenon and unmatched global force for good!
                        </p>
                        <p class="text-dark">We at The DBT Franchise Ministry believe the Holy Bible when it says we have
                            access to two lives on Earth. Everything you’ve done has come to this. Which life will you
                            choose? G-LIFE consists of covert spiritual operatives who’ve been trained to know that, for us,
                            our lives are not defined by one action, but rather through the lens of Christ Champion
                            transformation.
                        </p>
                        <p class="text-dark">It’s the 21st century and, by now, every nation has had their chance to
                            establish peace and equity in the world. But they haven’t. Governments can send flying ships
                            into space, build hypersonic missiles and invent the internet, but can’t live in harmony with
                            each other and the environment?
                        </p>
                        <p class="text-dark">We call “Bull-Junk”. Listen, churches don’t even tell its members the whole
                            truth and nothing but the truth. According to the Israelite’s sacred texts, your being born was
                            never a quirk of fate, but rather one of divine providence.
                        </p>
                        <p class="text-dark">Did you see the paradigm shift in 2020? The invisible power behind the
                            oligarchy has altered the perception of reality for everyone outside of G-LIFE. Inside the
                            animal kingdom, the world is changing, truth is vanishing and the wars have gone into overdrive.
                        </p>
                        <p class="text-dark">But you are here and so are we. The long-awaited, best-of-the-best of our
                            family tree. Oh yes, the animal kings are counting on different ethnicities and both genders to
                            remain divided and distrustful of each other.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="assembly-img-wrapper">
                        <figure class="mb-0">
                            <img src="{{ frontImage('assembly-img.jpeg') }}" alt="" class="img-fluid">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- assembly-section Ends Here  --}}

    {{-- adventure-section Starts Here  --}}
    <section class="adventure-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="adventure_content">
                        <div class="ml14 mb-5">
                            <h2 class="level-2 heading-font">
                                <span class="letters"> The D.O.P.E. Breakthrough
                                </span>
                            </h2>
                            <h5 class="text-dark sub_heading">Mikell M. Milton and L.A. Doyle
                            </h5>
                        </div>
                        <p class="sub_para mb-5">The D.O.P.E. Breakthrough is a supernatural action adventure that takes
                            place
                            in the Kingdom of Amen-Amensa. But the fact is, the divine axiom “As above, so below” suggests
                            that there is a mirroring connection between the heavenly Kingdom of Amen-Amensa and planet
                            Earth’s 21st century Global Community.
                        </p>
                        <p class="sub_para mb-5">Was the 2020 global lockdown just a random moment in time? Or was it a
                            supernatural event, a souped-up breakthrough from “Above” that goes beyond politics, religion,
                            and the world wide web of entertainment?
                        </p>
                        <p class="sub_para mb-5">With this debut novel, The DBT Franchise Ministry offers hidden pieces of
                            humanity’s origin story and together, with YOU, the interactive reader, we will witness how
                            sleepwalkers implode the real-world system as the New Earth reality BREAKS THROUGH!
                        </p>
                        <p class="sub_para">It Was Written.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 ms-auto">
                    <div class="adventure-img-wrapper">
                        <figure class="mb-0">
                            <img src="{{ frontImage('book-img.png') }}" alt="" class="img-fluid">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- adventure-section Ends Here  --}}

    {{-- wealth-section Starts Here  --}}
    <section class="wealth-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="adventure-img-wrapper">
                        <figure class="mb-0">
                            <img src="{{ frontImage('wealth-img.jpeg') }}" alt="" class="img-fluid radius-10">
                        </figure>
                    </div>
                </div>
                <div class="col-lg-6 ps-lg-5">
                    <div class="adventure_content">
                        <div class="ml14 mb-3">
                            <h2 class="level-2 heading-font yellow_heading">
                                <span class="letters">
                                    The DBT Ministry Sovereign Wealth
                                    Fund
                                </span>
                            </h2>
                        </div>
                        <p class="sub_para mb-0">This outreach ministry, a division of the Office of the Crown Prince of
                            Yehuda
                            Israel, will first focus on aiding the millions of Royal House of Judah descendants scattered
                            worldwide during the transatlantic slave trade, the remaining eleven tribes and our
                            international assembly of young Christ-king Yashiah loyalists.
                        </p>
                        <p class="sub_para mb-0">While Judah-Israelite organizations focus on the legal and inherent rights
                            of
                            Judeans born in North America to govern themselves and control their own affairs within the
                            U.S., we at The DBT Franchise Ministries are focusing on raising and distributing capital to
                            support Israelite households and communities dedicated to our Israelite Covenant duties.
                        </p>
                        <p class="sub_para mb-4">As our partner messianic ministries continue their talks with the
                            International
                            Court of Justice, the U.S. D.O.J., and allies within the African Union, we aim to solve today’s
                            economic challenges by earmarking 80% of the revenue generated from our creative works for angel
                            investment, educational infrastructure and to address food security and agricultural development
                            projects.
                        </p>
                        <p class="sub_para"><strong>-Genesis 12:3</strong>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- wealth-section Ends Here  --}}

    {{-- donation-section Starts Here  --}}
    <section class="donation-section">
        <div class="container-fluid">
            <div class="donation_wrapper text-center">
                <div class="ml14">
                    <h4 class="level-2 heading-font donation_heading">
                        <span class="letters">
                            80% of all revenue from The DBT will be dedicated to a sovereign wealth fund supporting
                            African-American youth and contributors to the Jeremiah 31 Project.
                        </span>
                    </h4>
                </div>
                <h2 class="number_heading yellow_color"> 0$</h2>
                <h5 class="donation_sub">Donation Covered</h5>
            </div>
        </div>
    </section>
    {{-- donation-section Ends Here  --}}

    {{-- blog-section Starts Here  --}}
    <section class="blog-section">
        <div class="container">
            <div class="row pb-4">
                <div class="col-lg-12">
                    <div class="about-heading-wrapper d-flex justify-content-between">
                        <h5>blog & news
                        </h5>
                        <div class="icon-wrapper">
                            <i class="fa-brands fa-blogger-b"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="blog-top-content d-flex align-items-center justify-content-between">
                <div class="blog-heading">
                    <div class="ml14 mb-5">
                        <h2 class="level-2 heading-font">
                            <span class="letters"> Take a Look at Our Latest
                                blogs & Articles.
                            </span>
                        </h2>
                    </div>
                </div>
                <div class="blog-btn">
                    <a href="#" class="btn">View All Blogs</a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="blog_wrapper">
                        <div class="blog_img position-relative">
                            <figure class="mb-0">
                                <img src="{{ frontImage('blog-img.png') }}" alt="" class="img-fluid">
                            </figure>
                            <div class="blog-arrow-wrap position-absolute">
                                <a href="#" class="text-decoration-none blog_anchor"><i
                                        class="fa-solid fa-arrow-up fa-rotate-by"
                                        style="--fa-rotate-angle: 50deg;"></i></a>
                            </div>
                        </div>
                        <div class="blog_content pt-4">
                            <h5 class="blog_sub position-relative ps-5 mb-3">WP_Developer </h5>
                            <a href="#" class="blog_heading">Blog Title here</a>
                            <div class="blog_date_wrapper d-flex align-items-center gap-2">
                                <span class="categories position-relative">
                                    <a href="#" class="cat-link">Mikell M. Milton</a>
                                </span>
                                <span class="date">May 26, 2025</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="blog_wrapper">
                        <div class="blog_img position-relative">
                            <figure class="mb-0">
                                <img src="{{ frontImage('blog-img.png') }}" alt="" class="img-fluid">
                            </figure>
                            <div class="blog-arrow-wrap position-absolute">
                                <a href="#" class="text-decoration-none blog_anchor"><i
                                        class="fa-solid fa-arrow-up fa-rotate-by"
                                        style="--fa-rotate-angle: 50deg;"></i></a>
                            </div>
                        </div>
                        <div class="blog_content pt-4">
                            <h5 class="blog_sub position-relative ps-5 mb-3">WP_Developer </h5>
                            <a href="#" class="blog_heading">Blog Title here</a>
                            <div class="blog_date_wrapper d-flex align-items-center gap-2">
                                <span class="categories position-relative">
                                    <a href="#" class="cat-link">Mikell M. Milton</a>
                                </span>
                                <span class="date">May 26, 2025</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="blog_wrapper">
                        <div class="blog_img position-relative">
                            <figure class="mb-0">
                                <img src="{{ frontImage('blog-img.png') }}" alt="" class="img-fluid">
                            </figure>
                            <div class="blog-arrow-wrap position-absolute">
                                <a href="#" class="text-decoration-none blog_anchor"><i
                                        class="fa-solid fa-arrow-up fa-rotate-by"
                                        style="--fa-rotate-angle: 50deg;"></i></a>
                            </div>
                        </div>
                        <div class="blog_content pt-4">
                            <h5 class="blog_sub position-relative ps-5 mb-3">WP_Developer </h5>
                            <a href="#" class="blog_heading">Blog Title here</a>
                            <div class="blog_date_wrapper d-flex align-items-center gap-2">
                                <span class="categories position-relative">
                                    <a href="#" class="cat-link">Mikell M. Milton</a>
                                </span>
                                <span class="date">May 26, 2025</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- blog-section Ends Here  --}}

    {{-- contact-section Starts Here  --}}
    <section class="contact-section">
        <div class="container-fluid px-0">
            <div class="contact_bg">
                <figure class="mb-0">
                    <img src="{{ frontImage('contact-bg.jpeg') }}" alt="" class="img-fluid w-100">
                </figure>
            </div>
        </div>
        <div class="contact_main">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-5">
                        <div class="contact_form">
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
                    </div>
                    <div class="col-lg-3">
                        <div class="contact_img">
                            <figure class="mb-0">
                                <img src="{{ frontImage('contact-img.jpeg') }}" alt="" class="img-fluid w-100">
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- contact-section Ends Here  --}}
@endsection
