@extends('layouts.app')
@section('content')
    <link rel="stylesheet" href="{{ frontCss('about-author.css') }}">
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
                                {{-- <div class="list-heading-wrapper">
                                    <a href="#">
                                        Lorem Ipsum
                                    </a>
                                </div> --}}
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="list-card-wrapper text-center">
                                <div class="list-icon-wrapper">
                                    <img src="{{ frontImage('cf-4-icon-2.svg') }}" class="img-fluid" alt="">
                                </div>
                                {{-- <div class="list-heading-wrapper">
                                    <a href="#">
                                        Lorem Ipsum
                                    </a>
                                </div> --}}
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="list-card-wrapper text-center">
                                <div class="list-icon-wrapper">
                                    <img src="{{ frontImage('cf-4-icon-3.svg') }}" class="img-fluid" alt="">
                                </div>
                                {{-- <div class="list-heading-wrapper">
                                    <a href="#">
                                        Lorem Ipsum
                                    </a>
                                </div> --}}
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="list-card-wrapper text-center">
                                <div class="list-icon-wrapper">
                                    <img src="{{ frontImage('cf-4-icon-4.svg') }}" class="img-fluid" alt="">
                                </div>
                                {{-- <div class="list-heading-wrapper">
                                    <a href="#">
                                        Lorem Ipsum
                                    </a>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2"></div>
            </div>
        </div>
    </section>
    {{-- list sec ends here --}}
    {{-- about author starts here --}}
    <section class="about-author">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <div class="about-author-text-wrapper">
                        <h5>
                            <span class="about-icon">
                                <img src="{{ frontImage('star-shape.webp') }}" class="img-fluid" alt="">
                            </span>
                            <span class="txt">About the Author</span>
                        </h5>
                        <h2 class="mb-3">
                            Mikell M. Miltion & L.A. Doyle
                        </h2>
                        <div class="author-para-wrapper">
                            <p class="mb-0">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                                voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                                cupidatat
                                non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </p>
                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut
                                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                                voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                                cupidatat
                                non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </p>
                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut
                                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                                voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                                cupidatat
                                non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </p>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="author-img-wrapper">
                        <figure>
                            <img src="{{ frontImage('author-img.webp') }}" class="img-fluid" alt="">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- about author ends here --}}
    {{-- card starts here --}}
    <section class="stats-sec">
        <div class="container">
            <div class="row py-3">
                <div class="col-lg-3">
                    <div class="stats-card-wrapper">
                        <div class="stats-heading-wrapper">
                            <h4>Projects Completed</h4>
                            <h2>15 <sub>K+</sub></h2>
                        </div>
                        <div class="stats-para-wrapper">
                            <p>Showcasing innovative architecture through completed landmark projects.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="stats-card-wrapper">
                        <div class="stats-heading-wrapper">
                            <h4>Years of Experience</h4>
                            <h2>23 <sub>+</sub></h2>
                        </div>
                        <div class="stats-para-wrapper">
                            <p>Over a decade of expertise crafting innovative architectural solutions.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="stats-card-wrapper">
                        <div class="stats-heading-wrapper">
                            <h4>Client Satisfaction Rate</h4>
                            <h2>98 <sub>%</sub></h2>
                        </div>
                        <div class="stats-para-wrapper">
                            <p>98% client satisfaction rate achieved through exceptional architectural services.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="stats-card-wrapper">
                        <div class="stats-heading-wrapper">
                            <h4>Award Winning</h4>
                            <h2>21 <sub>+</sub></h2>
                        </div>
                        <div class="stats-para-wrapper">
                            <p>Transforming visions into award-winning architectural designs timeless elegance.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- card ends here --}}
    {{-- assembly-section Starts Here  --}}
    <section class="assembly-section section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="assembly_content">
                        <div class="ml14 reveal mb-4">
                            <h2 class="level-2 heading-font text-white mb-0 target-heading">
                                <span class="letters">ABOUT US
                                </span>
                            </h2>
                            <h5 class="text-dark">After Nearly Two Millennia, the Iconic Assembly of ‘Messianic
                                Israelites
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
                        <p class="text-dark">We at The DBT Franchise Ministry believe the Holy Bible when it says we
                            have
                            access to two lives on Earth. Everything you’ve done has come to this. Which life will you
                            choose? G-LIFE consists of covert spiritual operatives who’ve been trained to know that, for
                            us,
                            our lives are not defined by one action, but rather through the lens of Christ Champion
                            transformation.
                        </p>
                        <p class="text-dark">It’s the 21st century and, by now, every nation has had their chance to
                            establish peace and equity in the world. But they haven’t. Governments can send flying ships
                            into space, build hypersonic missiles and invent the internet, but can’t live in harmony
                            with
                            each other and the environment?
                        </p>
                        <p class="text-dark">We call “Bull-Junk”. Listen, churches don’t even tell its members the
                            whole
                            truth and nothing but the truth. According to the Israelite’s sacred texts, your being born
                            was
                            never a quirk of fate, but rather one of divine providence.
                        </p>
                        <p class="text-dark">Did you see the paradigm shift in 2020? The invisible power behind the
                            oligarchy has altered the perception of reality for everyone outside of G-LIFE. Inside the
                            animal kingdom, the world is changing, truth is vanishing and the wars have gone into
                            overdrive.
                        </p>
                        <p class="text-dark">But you are here and so are we. The long-awaited, best-of-the-best of our
                            family tree. Oh yes, the animal kings are counting on different ethnicities and both genders
                            to
                            remain divided and distrustful of each other.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="assembly-img-wrapper">
                        <figure class="mb-0">
                            <img src="{{ frontImage('assembly-img.jpeg') }}" alt="" class="img-fluid assembly_img">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- assembly-section Ends Here  --}}
@endsection
