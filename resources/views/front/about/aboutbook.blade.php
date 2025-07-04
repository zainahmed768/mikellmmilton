@php
    $pagename = 'About the Book';
    $breadcrumbs = [['label' => 'Home', 'url' => url('/')], ['label' => 'About the Book', 'url' => route('about')]];
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

    {{-- list sec starts here --}}
    <section class="list-sec">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-12"></div>
                <div class="col-lg-6 col-md-12">
                    <div class="row">
                        <div class="col-lg-3 col-3">
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
                        <div class="col-lg-3 col-3">
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
                        <div class="col-lg-3 col-3">
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
                        <div class="col-lg-3 col-3">
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
                <div class="col-lg-2 col-md-12"></div>
            </div>
        </div>
    </section>
    {{-- list sec ends here --}}
    {{-- About starts here --}}
    <section class="about-sec">
        <div class="container">
            <div class="row pb-4">
                <div class="col-lg-12">
                    <div class="about-heading-container">
                        <div class="about-heading-wrapper d-flex justify-content-between">
                            <h5>Aleph-Tav “Strength of the Covenant”
                            </h5>
                            <div class="icon-wrapper">
                                <i aria-hidden="true" class="fas fa-pen-nib"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 order-2 order-lg-1">
                    <div class="about-content-wrapper">
                        <div class="text-container">
                            <h2 class="reveal-text target-heading" data-text="The DBT Franchise Ministry Presents...">
                            </h2>
                        </div>
                        <div class="about-paragraph-wrapper">
                            {{-- <p class="bold">In The Beginning… You Know The Ending.</p> --}}
                            <p>The Prophecy of Sovereignty For the Royal House of Judah (Modern Day
                                African-Americans)<br />
                                <br /> During his ministry in 627 B.C., Jeremiah, the Hebrew-Israelite prophet from the
                                royal tribe of Judah, warned three of the twelve tribes of a present and future danger.
                                In
                                the ancient world, 70 nation-states, some eventually achieving empire status, were
                                governed
                                by the Elohim, one supreme god or a pantheon of gods. History is chock-full of demigod
                                legends: Titans battling Olympians and their mortal servants, magicians, pharaohs,
                                kings,
                                and Caesars, all waging wars and making pacts in order to secure wealth, power and fame.
                                But
                                there is one ancient tale that 70 united nations around the world agreed to keep
                                secret&hellip; For if the global community ever learned the truth about the Omnipotent,
                                Omniscient Elohim whose Omnibenevolence was powerful enough to set that masses free,
                                then of
                                course, the world would call on HIS MIGHTY and MAJESTIC name&hellip; YAHAWAH!<br />
                                <br />
                                <strong>A Prophecy for the 21st century&rsquo;s European and Asian descendants of
                                    Japheth
                                    the Brave.</strong><br /> <br /> "O Most Holy YAHAWAH, my strength, and my fortress,
                                and
                                my refuge in the day of affliction, the Gentiles shall come unto thee from the ends of
                                the
                                earth, and shall say, Surely our fathers have inherited lies, vanity, and things wherein
                                there is no profit."&nbsp;<br /> <strong>- Jeremiah 16:19</strong><br /> <br /> 2025
                                Bible
                                Prophecy Clock Announcement&ndash; It is now 15 minutes to midnight
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
                        <div class="about-content-last-img mt-5 wa-clip-left-right">
                            <img src="{{ frontImage('a4-illus-1.webp') }}" class="img-fluid clip-img" alt="">
                        </div>
                    </div>
                    <div class="row pt-4">
                        <div class="col-md-4 col-lg-4">
                            <div class="about-card-wrapper">
                                <div class="about-icon-wrapper">
                                    <span>
                                        {{-- <i class="fa-solid fa-industry"></i> --}}
                                        <figure class="mb-0">
                                            <img src="{{ frontImage('book-icon.png') }}" alt="" class="img-fluid">
                                        </figure>
                                    </span>

                                </div>
                                <div class="about-icon-heading-wrapper">
                                    <a href="#">
                                        QUARAN HADITH HEADLINES
                                    </a>
                                    <p>HOLY MOLY MOHAMMED... The Judah Lions have awakened!</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4">
                            <div class="about-card-wrapper">
                                <div class="about-icon-wrapper">
                                    <span>
                                        {{-- <i class="fa-solid fa-robot"></i> --}}
                                        <figure class="mb-0">
                                            <img src="{{ frontImage('book-icon.png') }}" alt="" class="img-fluid">
                                        </figure>
                                    </span>
                                </div>
                                <div class="about-icon-heading-wrapper">
                                    <a href="#">
                                        THE BOOK OF MORMON
                                    </a>
                                    <p>Oh, Jesus, Mary and Joseph Smith! They are going to expose our lies!</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4">
                            <div class="about-card-wrapper">
                                <div class="about-icon-wrapper">
                                    <span>
                                        {{-- <i class="fa-solid fa-robot"></i> --}}
                                        <figure class="mb-0">
                                            <img src="{{ frontImage('book-icon.png') }}" alt="" class="img-fluid">
                                        </figure>
                                    </span>
                                </div>
                                <div class="about-icon-heading-wrapper">
                                    <a href="#">
                                        ZOROASTRIANISM ZOOM
                                    </a>
                                    <p>Good Mazda almighty! There go our plans for a New World Order.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2">
                    <div class="about-img-wrapper">
                        <img src="{{ frontImage('about-img.png') }}" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- About ends here --}}

    {{-- dbt-section Starts Here  --}}
    <section class="dbt-section">
        <div class="container">
            <div class="row pb-4">
                <div class="col-lg-12">
                    <div class="about-heading-container">
                        <div class="about-heading-wrapper d-flex justify-content-between">
                            <h5 class="text-white">DBT
                            </h5>
                            <div class="icon-wrapper">
                                <i class="fa-solid fa-book-open text-white"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="dbt_wrapper">
                <div class="ml14 reveal mb-4">
                    <h2 class="level-2 heading-font text-white mb-0 target-heading">
                        <span class="letters"> The DOPE Breakthrough
                        </span>
                    </h2>
                </div>
                <p class="text-white">Can you believe the nerve of these men, women, corporations, and governments?
                    First
                    they go against ALL
                    SCIENCE and tell the West that they evolved from orangutans. Then they have the nerve to set up a
                    copy-cat religion of the original Messianic Israelite’s Gospel News. And finally, despite never
                    being
                    the aggressor, somehow, today descendants of Japheth believe just the opposite of their courageous
                    European ancestors who waged a fierce, three centuries war against Jupiter and his Roman pantheon of
                    devil gods, and goddesses. The Israelites were never your enemies. The Apostle Paul told you that!
                </p>
                <div class="btn_group btn_white position-relative w-fit mt-5">
                    <span class="btn_border"></span>
                    <span class="btn_border"></span>
                    <span class="btn_border"></span>
                    <span class="btn_border"></span>
                    <a href="#" class="btn">
                        <span class="inner_border"></span>
                        <span class="inner_border"></span>
                        <span class="inner_border"></span>
                        <span class="inner_border"></span>
                        <span class="btn_text">view all chapters</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    {{-- dbt-section Starts Here  --}}
    {{-- prophecy-section Starts Here  --}}
    <section class="prophecy-section section">
        <div class="container">
            <div class="row pb-4">
                <div class="col-lg-12">
                    <div class="about-heading-container">
                        <div class="about-heading-wrapper d-flex justify-content-between">
                            <h5 class="text-dark">The DOPE Breakthrough
                            </h5>
                            <div class="icon-wrapper">
                                <i class="fa-solid fa-people-arrows"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-5 order-2 order-lg-1">
                    <div class="adventure_content">
                        <div class="ml14 reveal mb-5 mb-md-3">
                            <h2 class="level-2 heading-font sec_heading target-heading">
                                <span class="letters"> A Prophecy for the 21st
                                    century’s Boomers,
                                    GEN X, Millennials,
                                    GEN Z and GEN
                                    ALPHA.
                                </span>
                            </h2>
                        </div>
                        <p class="sub_para mb-5">After this I looked, and there before me was a great multitude that no
                            one
                            could count, from every nation, tribe, people and language,&nbsp;standing before the
                            throne&nbsp;and before the Lamb. They were wearing white robes&nbsp;and were holding palm
                            branches in their hands.&nbsp;<strong>- Revelation 7:9</strong><br /> So let us answer the
                            first
                            question. Yes, there are traitors in our midst; from every nation and they have pulled off
                            one
                            of the greatest deceptions of all-time. You were lied to. Millions of &ldquo;Blacks&rdquo;,
                            specifically those living in Canada and the U.S., are in reality not Africans, but rather
                            the
                            descendants of royals and nobles trafficked in the Transatlantic Slave Trade. Why? Blood
                            curses
                            were cast on the Judean-loyalists of Israel&rsquo;s rightful king, Christ Yashiah! Israelite
                            politicians, clergy and sorcerers betrayed their own!
                        </p>
                        <div class="btn_group position-relative w-fit mt-5">
                            <span class="btn_border"></span>
                            <span class="btn_border"></span>
                            <span class="btn_border"></span>
                            <span class="btn_border"></span>
                            <a href="#" class="btn">
                                <span class="inner_border"></span>
                                <span class="inner_border"></span>
                                <span class="inner_border"></span>
                                <span class="inner_border"></span>
                                <span class="btn_text">view more</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 ms-auto order-1 order-lg-2">
                    <div class="prophecy-img-wrapper mt-lg-0 mt-4 mb-3 mb-lg-0">
                        <figure class="mb-0">
                            <img src="{{ frontImage('prophecy-img.jpeg') }}" alt=""
                                class="img-fluid prophecy_img">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- prophecy-section Ends Here  --}}
    <!-- Video Start Here -->
    <section class="about-video">
        <div class="container-fluid px-0">
            <div class="video-player">
                <figure class="position-relative mb-0">
                    <img src="{{ frontImage('video-bg.jpg') }}" alt="video-bg" class="img-fluid">
                    <div
                        class="custom-controls position-absolute top-0 bottom-0 d-flex align-items-center justify-content-center w-100">
                        <a href="#" class="video_btn d-flex align-items-center justify-content-center">
                            <i class="fa-solid fa-play"></i>
                        </a>
                    </div>
                </figure>
            </div>
        </div>
    </section>
    <!-- Video End Here -->
    {{-- diaspora-section Starts Here  --}}
    <section class="diaspora-section">
        <div class="container-fluid px-0 overflow-x-hidden">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="diaspora-content-wrapper">
                        <div class="row pb-4">
                            <div class="col-lg-12">
                                <div class="about-heading-container">
                                    <div class="about-heading-wrapper d-flex justify-content-between">
                                        <h5 class="text-white">More About Us
                                        </h5>
                                        <div class="icon-wrapper">
                                            <i class="fa-solid fa-user-astronaut text-white"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="row pb-4">
                                <div class="col-lg-12">
                                    <div class="about-heading-wrapper d-flex justify-content-between">
                                        <h5 class="text-white">More About Us
                                        </h5>
                                        <div class="icon-wrapper">
                                            <i class="fa-solid fa-user-astronaut text-white"></i>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                        <div class="ml14 reveal mb-4">
                            <h2 class="level-2 heading-font text-white mb-0 target-heading">
                                <span class="letters">A Prophecy for the 21st
                                    century Israelites in the
                                    diaspora.</span>
                            </h2>
                        </div>
                        <p class="text-white">I consider that our present sufferings are not worth comparing with the
                            glory
                            that will be
                            revealed in us. 19 For the creation waits in eager expectation for the children of YAHAWAH
                            to be
                            revealed. 20 For the creation was subjected to frustration, not by its own choice, but by
                            the
                            will of the one who subjected it, in hope 21 that[a] the creation itself will be liberated
                            from
                            its bondage to decay and brought into the freedom and glory of the children of YAHAWAH. -
                            Romans
                            8:18-21
                        </p>
                        <p class="text-white">
                            We are here. 144,000-plus! And if you are reading this, you are either an Israelite, a
                            Revelation 7:9er brother/sister-in-arms, a hater, or an NPC, a Nemesis Powered Competitor
                            who
                            works for the small remnant of fallen angels, Annunaki, Nephilim and Esau tribesmen destined
                            to
                            lose… very, very, soon.
                        </p>
                        <p class="text-white">
                            We know our origin story, so we don’t hate you. We barely raise our voice, much less permit
                            you
                            to live rent free in our minds. But don’t get it twisted, we are here to defeat you. But
                            first
                            we must awaken the captive souls who are stuck in your dark spells and illusions of
                            grandeur.
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
                <ul class="diaspora_ul list-unstyled d-flex align-items-center justify-content-center">
                    <li class="diaspora_li text-center">
                        <div class="diaspora_icon">
                            <figure class="mb-0">
                                <img src="{{ frontImage('blueprint.png') }}" alt="" class="img-fluid">
                            </figure>
                        </div>
                        <div class="diaspora_content pt-4">
                            <h4 class="text-white">
                                <a href="#" class="text-white text-decoration-none">Psalm 64:1</a>
                            </h4>
                            <p class="text-white">Hear my voice, Abba Yahawah, in my meditation;
                                Preserve my life from fear of the enemy.
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
                                <a href="#" class="text-white text-decoration-none">Joel 2:12</a>
                            </h4>
                            <p class="text-white">Now therefore," says Lord Yashiah,
                                "Turn to me with all your heart, With fasting, with weeping, and with mourning.
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
                                <a href="#" class="text-white text-decoration-none">James 1:21</a>
                            </h4>
                            <p class="text-white">Therefore, lay aside all filthiness and overflow of wickedness,
                                and receive with meekness the implanted word, which is able to save your souls.
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
                                <a href="#" class="text-white text-decoration-none">Revelation 2:26</a>
                            </h4>
                            <p class="text-white">And Christ-King Yashiah said, <br> And he or she who overcomes, and
                                keeps
                                MY works until the end,
                                to them I will give power over the nations.
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    {{-- diaspora-section Ends Here  --}}
    {{-- assembly-section Starts Here  --}}
    <section class="assembly-section section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 order-2 order-lg-1">
                    <div class="assembly_content mt-3 mt-lg-0">
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
                <div class="col-lg-6 order-1 order-lg-2">
                    <div class="sticky-top" style="top: 10px;">
                        <div class="assembly-img-wrapper">
                            <figure class="mb-0">
                                <img src="{{ frontImage('assembly-img.jpeg') }}" alt=""
                                    class="img-fluid assembly_img">
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- assembly-section Ends Here  --}}
    {{-- adventure-section Starts Here  --}}
    <section class="adventure-section section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="adventure_content">
                        <div class="ml14 reveal mb-lg-5 mb-3">
                            <h2 class="level-2 heading-font yellow_heading">
                                <span class="letters"> The D.O.P.E. Breakthrough
                                </span>
                            </h2>
                            <h5 class="text-dark sub_heading target-heading">Mikell M. Milton and L.A. Doyle
                            </h5>
                        </div>
                        <p class="sub_para mb-5">The D.O.P.E. Breakthrough is a supernatural action adventure that
                            takes
                            place
                            in the Kingdom of Amen-Amensa. But the fact is, the divine axiom “As above, so below”
                            suggests
                            that there is a mirroring connection between the heavenly Kingdom of Amen-Amensa and planet
                            Earth’s 21st century Global Community.
                        </p>
                        <p class="sub_para mb-5">Was the 2020 global lockdown just a random moment in time? Or was it a
                            supernatural event, a souped-up breakthrough from “Above” that goes beyond politics,
                            religion,
                            and the world wide web of entertainment?
                        </p>
                        <p class="sub_para mb-5">With this debut novel, The DBT Franchise Ministry offers hidden pieces
                            of
                            humanity’s origin story and together, with YOU, the interactive reader, we will witness how
                            sleepwalkers implode the real-world system as the New Earth reality BREAKS THROUGH!
                        </p>
                        <p class="sub_para">It Was Written.
                        </p>
                    </div>
                </div>
                <div class="col-lg-7 ms-auto">
                    <div class="adventure-img-wrapper w-fit mx-auto">
                        <figure class="mb-0">
                            <img src="{{ frontImage('book-img.png') }}" alt="" class="img-fluid adventure-img">
                        </figure>
                    </div>
                    <div class="adventure_card_wrapper">
                        <div class="row">
                            <div class="col-md-6 col-lg-4">
                                <div class="adventure_card p-4 my-2 my-lg-0">
                                    <div class="adv_card_img">
                                        <figure class="mb-0">
                                            <img src="{{ frontImage('blueprint.png') }}" alt=""
                                                class="img-fluid">
                                        </figure>
                                    </div>
                                    <div class="adv_card_content pt-4">
                                        <p class="sub_para mb-4">Behold, how good and how pleasant it is for brethren
                                            to
                                            dwell together in unity!
                                        </p>
                                        <p class="sub_para">- Psalm 133:1</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="adventure_card p-4 my-2 my-lg-0">
                                    <div class="adv_card_img">
                                        <figure class="mb-0">
                                            <img src="{{ frontImage('open-book.png') }}" alt=""
                                                class="img-fluid">
                                        </figure>
                                    </div>
                                    <div class="adv_card_content pt-4">
                                        <p class="sub_para mb-4">And when the day of Pentecost was fully come, the
                                            Messianic Israelites were all with one accord in one place.
                                        </p>
                                        <p class="sub_para">-Acts 2:1
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="adventure_card p-4 my-2 my-lg-0">
                                    <div class="adv_card_img">
                                        <figure class="mb-0">
                                            <img src="{{ frontImage('property-insurance.png') }}" alt=""
                                                class="img-fluid">
                                        </figure>
                                    </div>
                                    <div class="adv_card_content pt-4">
                                        <p class="sub_para mb-4">After this I looked, and there before me was a great
                                            multitude that no one could count, from every nation, tribe, people and
                                            language, standing before the throne and before the Lamb. They were wearing
                                            white robes and were holding palm branches in their hands.
                                        </p>
                                        <p class="sub_para">-Revelation 7:9
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- adventure-section Ends Here  --}}
    {{-- wealth-section Starts Here  --}}
    <section class="wealth-section section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="box" id="mybox">
                        <img class="wealth-img fill img-fluid radius-10" src="{{ frontImage('wealth-img.jpeg') }}"
                            alt="">
                        <div class="uncover">
                            <div class="uncover_slice"></div>
                            <div class="uncover_slice"></div>
                            <div class="uncover_slice"></div>
                        </div>
                    </div>
                    {{-- <div class="wealth-img-wrapper">
                        <figure class="mb-0">
                            <img src="{{ frontImage('wealth-img.jpeg') }}" alt="" class="img-fluid radius-10">
                        </figure>
                    </div> --}}
                </div>
                <div class="col-lg-6 ps-lg-5">
                    <div class="adventure_content">
                        <div class="ml14 reveal mb-3 mt-lg-0 mt-4">
                            <h2 class="level-2 heading-font yellow_heading target-heading">
                                <span class="letters">
                                    The DBT Ministry Sovereign Wealth
                                    Fund
                                </span>
                            </h2>
                        </div>
                        <p class="sub_para mb-0">This outreach ministry, a division of the Office of the Crown Prince
                            of
                            Yehuda
                            Israel, will first focus on aiding the millions of Royal House of Judah descendants
                            scattered
                            worldwide during the transatlantic slave trade, the remaining eleven tribes and our
                            international assembly of young Christ-king Yashiah loyalists.
                        </p>
                        <p class="sub_para mb-0">While Judah-Israelite organizations focus on the legal and inherent
                            rights
                            of
                            Judeans born in North America to govern themselves and control their own affairs within the
                            U.S., we at The DBT Franchise Ministries are focusing on raising and distributing capital to
                            support Israelite households and communities dedicated to our Israelite Covenant duties.
                        </p>
                        <p class="sub_para mb-4">As our partner messianic ministries continue their talks with the
                            International
                            Court of Justice, the U.S. D.O.J., and allies within the African Union, we aim to solve
                            today’s
                            economic challenges by earmarking 80% of the revenue generated from our creative works for
                            angel
                            investment, educational infrastructure and to address food security and agricultural
                            development
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
@endsection
