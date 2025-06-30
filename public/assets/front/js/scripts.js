// Loader JS
$(window).on("load", function () {
    console.log("test");
    $(".loader").fadeOut(3000);
});
// Loader JS

$(".increment_quantity").click(function () {
    var counter = parseInt($(this).parent().siblings(".quantity").val());
    counter++;
    $(this).parent().siblings(".quantity").val(counter);
    // $("#theCount").text(counter);
});
$(".decrement_quantity").click(function () {
    var counter = parseInt($(this).parent().siblings(".quantity").val());
    counter--;
    $(this).parent().siblings(".quantity").val(counter);
    // $("#theCount").text(counter);
});
// ********* PROFILE SCRIPT START  *********** \\
// Copy Link To Clip Board

$(".copy_link").click(function () {
    // Get the text field
    var copyText = document.getElementById("myInput");
    // Select the text field
    // copyText.select();
    copyText.setSelectionRange(0, 99999); // For mobile devices
    // Copy the text inside the text field
    navigator.clipboard.writeText(copyText.value);
});

$(".edit_profile_option").click(function () {
    $(".my_profile").addClass("hide");
    $(".edit_profile_start").removeClass("hide");
});
$(".edit_password_option").click(function () {
    $(".my_profile").addClass("hide");
    $(".edit_password_start").removeClass("hide");
});
$(".add_address_btn").click(function () {
    $(".current_addresses").addClass("hide");
    $(".new_address_section").removeClass("hide");
});

$(".see_order_details").click(function () {
    $(".the_orders_table").addClass("hide");
    $(".orders_details_start_here").removeClass("hide");
});

// banner Slider

gsap.registerPlugin(ScrollTrigger);

$(document).ready(function () {
    $(".banner-slider .slick-slide:not(.slick-current)").css({
        opacity: 0,
        y: 0,
    });

    $(".banner-slider").on(
        "beforeChange",
        function (event, slick, currentSlide, nextSlide) {
            const currentSlideEl = $(slick.$slides[currentSlide]);
            gsap.to(currentSlideEl, {
                y: -1200,
                opacity: 0,
                duration: 0.6,
                ease: "power2.inOut",
            });
        }
    );

    $(".banner-slider").on(
        "afterChange",
        function (event, slick, currentSlide) {
            const newSlideEl = $(slick.$slides[currentSlide]);
            gsap.fromTo(
                newSlideEl,
                { y: 1200, opacity: 0 },
                {
                    y: 0,
                    opacity: 1,
                    duration: 0.8,
                    ease: "power2.out",
                    delay: 0.1,
                }
            );
        }
    );

    $(".banner-slider").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: false,
        speed: 500, // smoother than 0
        asNavFor: ".banner-nav",
        draggable: false,
    });

    $(".banner-nav").slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        asNavFor: ".banner-slider",
        dots: false,
        centerMode: false,
        focusOnSelect: true,
        arrows: false,
        infinite: false,
    });
});
// // svg lamb starts here
// var xmlns = "http://www.w3.org/2000/svg",
//     xlinkns = "http://www.w3.org/1999/xlink",
//     select = function (s) {
//         return document.querySelector(s);
//     },
//     selectAll = function (s) {
//         return document.querySelectorAll(s);
//     },
//     contain = select(".container"),
//     mainSVG = select(".mainSVG"),
//     lamp = MorphSVGPlugin.convertToPath("#lampTop");

// TweenMax.set("svg", {
//     visibility: "visible",
// });

// var tln = new TimelineMax();

// for (var i = 0; i < 5; i++) {
//     var t = TweenMax.to(select(".blob" + i), randomBetween(14, 50), {
//         y: 260,
//         repeat: -1,
//         repeatDelay: randomBetween(1, 3),
//         yoyo: true,
//         ease: Linear.easeNone,
//     });

//     tln.add(t, (i + 1) / 0.6);
// }

// tln.seek(100);

// function randomBetween(min, max) {
//     return Math.floor(Math.random() * (max - min + 1) + min);
// }
// // svg lamb ends here
gsap.utils.toArray(".about-heading-container").forEach((el) => {
    gsap.to(el, {
        scrollTrigger: {
            trigger: el,
            start: "top 80%",
            end: "bottom 20%",
            toggleActions: "play reverse play reverse",
        },
        duration: 1,
        ease: "power2.out",
        scaleX: 1,
    });
});

gsap.timeline({
    scrollTrigger: {
        trigger: "footer",
        start: "top 30%",
        end: "bottom 60%",
        toggleActions: "play reverse play reverse",
        markers: false,
    },
}).to(".footer-email-link-wrapper", {
    scale: 1,
    x: 0,
    ease: "power2.out",
    duration: 0.5,
});

// gsap.timeline({
//     scrollTrigger: {
//         trigger: "footer",
//         start: "top 30%",
//         end: "bottom 70%",
//         toggleActions: "play reverse play reverse",
//         markers: true,
//     },
// }).to(".footer-email-link-wrapper", {
//     scale: 1,
//     x: 0,
//     ease: "power2.out",
//     duration: 0.5,
// });
// gsap.fromTo(
//     ".footer-email-link-wrapper",
//     {
//         scaleX: 0,
//         transformOrigin: "left center",
//     },
//     {
//         scrollTrigger: {
//             trigger: ".footer-email-link-wrapper",
//             start: "top 80%",
//             end: "bottom 20%",
//             toggleActions: "play reverse play reverse",
//             markers: true,
//         },
//         duration: 1,
//         ease: "power2.out",
//         scaleX: 1,
//     }
// );

// marquee
$(document).ready(function () {
    $(".marquee-slider").slick({
        dots: false,
        arrows: false,
        infinite: true,
        slidesToShow: 5,
        slidesToScroll: 1,
        speed: 9000,
        autoplay: true,
        autoplaySpeed: 0,
        cssEase: "linear",
        draggable: false,
        focusOnSelect: false,
        pauseOnFocus: true,
        pauseOnHover: true,
        initialSlide: 1,
        responsive: [
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 2,
                },
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                },
            },
        ],
    });
});

// marquee
gsap.to(".diaspora-content-wrapper", {
    // clipPath: "inset(0 100% 0 0)",
    scale: 0.1,
    translateX: -100,
    translateY: -300,
    ease: "power1.out",
    scrollTrigger: {
        trigger: ".diaspora-section",
        start: "top top",
        end: "+=500",
        scrub: 0.6,
    },
});

document.addEventListener("DOMContentLoaded", function () {
    const ul = document.querySelector(".diaspora_ul");

    function isElementInViewport(el) {
        const rect = el.getBoundingClientRect();
        return (
            rect.top <=
                (window.innerHeight || document.documentElement.clientHeight) &&
            rect.bottom >= 0
        );
    }

    function checkScroll() {
        if (isElementInViewport(ul)) {
            ul.classList.add("show");
        } else {
            ul.classList.remove("show");
        }
    }

    window.addEventListener("scroll", checkScroll);
    checkScroll(); // initial check
});

const container = document.getElementById("tagContainer");

if (container) {
    const tags = document.querySelectorAll(".single-tag");

    // Define boundaries
    const BOUNDARY_WIDTH = container.clientWidth;
    const BOUNDARY_HEIGHT = 400;

    ScrollTrigger.create({
        trigger: container,
        start: "top center",
        once: true,
        onEnter: () => {
            const maxY = BOUNDARY_HEIGHT - 60;
            tags.forEach((tag) => {
                const x = parseFloat(tag.dataset.x);
                tag.dataset.rotation = 0;

                gsap.to(tag, {
                    duration: 1,
                    opacity: 1,
                    y: maxY,
                    ease: "bounce.out",
                    onUpdate() {
                        const y = gsap.getProperty(tag, "y");
                        tag.dataset.x = x;
                        tag.dataset.y = y;
                        tag.style.transform = `translate(${x}px, ${y}px) rotate(${tag.dataset.rotation}deg)`;
                    },
                    onComplete: () => {
                        enableDrag(tag);
                    },
                });
            });
        },
    });

    function enableDrag(tag) {
        let isDragging = false;
        let lastX = 0,
            lastY = 0;
        let velocityX = 0,
            velocityY = 0,
            velocityRotation = 0;
        let animationFrame = null;

        const gravity = 1.2;
        const bounceFactor = -0.6;
        const friction = 0.96;

        tag.addEventListener("pointerdown", (e) => {
            isDragging = true;
            lastX = e.clientX;
            lastY = e.clientY;
            tag.setPointerCapture(e.pointerId);
            cancelAnimationFrame(animationFrame);
        });

        tag.addEventListener("pointermove", (e) => {
            if (!isDragging) return;

            const dx = e.clientX - lastX;
            const dy = e.clientY - lastY;
            lastX = e.clientX;
            lastY = e.clientY;

            let x = parseFloat(tag.dataset.x) + dx;
            let y = parseFloat(tag.dataset.y) + dy;

            const maxX = BOUNDARY_WIDTH - tag.offsetWidth;
            const maxY = BOUNDARY_HEIGHT - tag.offsetHeight;

            x = Math.min(maxX, Math.max(0, x));
            y = Math.min(maxY, Math.max(0, y));

            tag.dataset.x = x;
            tag.dataset.y = y;

            velocityX = dx;
            velocityY = dy;
            velocityRotation = dx * 0.3;
            tag.dataset.rotation = parseFloat(tag.dataset.rotation) || 0;

            tag.style.transform = `translate(${x}px, ${y}px) rotate(${tag.dataset.rotation}deg)`;

            resolveCollision(tag);
        });

        tag.addEventListener("pointerup", () => {
            isDragging = false;
            animateFall();
        });

        function animateFall() {
            function fall() {
                velocityY += gravity;
                velocityX *= friction;
                velocityRotation *= friction;

                let x = parseFloat(tag.dataset.x) + velocityX;
                let y = parseFloat(tag.dataset.y) + velocityY;
                let rotation =
                    (parseFloat(tag.dataset.rotation) || 0) + velocityRotation;

                const maxX = BOUNDARY_WIDTH - tag.offsetWidth;
                const maxY = BOUNDARY_HEIGHT - tag.offsetHeight;

                if (x <= 0 || x >= maxX) {
                    x = Math.min(maxX, Math.max(0, x));
                    velocityX *= bounceFactor;
                    velocityRotation *= -1;
                }

                if (y >= maxY) {
                    y = maxY;
                    velocityY *= bounceFactor;

                    if (
                        Math.abs(velocityY) < 1 &&
                        Math.abs(velocityX) < 0.5 &&
                        Math.abs(velocityRotation) < 0.5
                    ) {
                        cancelAnimationFrame(animationFrame);
                        return;
                    }
                }

                if (Math.abs(x) < 1) x = 0;
                if (Math.abs(x - maxX) < 1) x = maxX;
                if (Math.abs(y - maxY) < 1) y = maxY;

                tag.dataset.x = x;
                tag.dataset.y = y;
                tag.dataset.rotation = rotation;

                tag.style.transform = `translate(${x}px, ${y}px) rotate(${rotation}deg)`;

                resolveCollision(tag);
                animationFrame = requestAnimationFrame(fall);
            }

            animationFrame = requestAnimationFrame(fall);
        }

        function resolveCollision(currentTag) {
            const maxX = BOUNDARY_WIDTH - currentTag.offsetWidth;
            const maxY = BOUNDARY_HEIGHT - currentTag.offsetHeight;

            tags.forEach((other) => {
                if (other === currentTag) return;

                const x1 = parseFloat(currentTag.dataset.x);
                const y1 = parseFloat(currentTag.dataset.y);
                const x2 = parseFloat(other.dataset.x);
                const y2 = parseFloat(other.dataset.y);

                const dx = x2 - x1;
                const dy = y2 - y1;
                const distance = Math.hypot(dx, dy);
                const minDist =
                    (currentTag.offsetWidth + other.offsetWidth) / 2 - 4;

                if (distance < minDist && distance > 0) {
                    const angle = Math.atan2(dy, dx);
                    const pushX = (Math.cos(angle) * (minDist - distance)) / 2;
                    const pushY = (Math.sin(angle) * (minDist - distance)) / 2;

                    let newX1 = x1 - pushX;
                    let newY1 = y1 - pushY;
                    let newX2 = x2 + pushX;
                    let newY2 = y2 + pushY;

                    newX1 = Math.min(maxX, Math.max(0, newX1));
                    newY1 = Math.min(maxY, Math.max(0, newY1));
                    newX2 = Math.min(maxX, Math.max(0, newX2));
                    newY2 = Math.min(maxY, Math.max(0, newY2));

                    currentTag.dataset.x = newX1;
                    currentTag.dataset.y = newY1;
                    other.dataset.x = newX2;
                    other.dataset.y = newY2;

                    updateTransform(currentTag);
                    updateTransform(other);
                }
            });
        }

        function updateTransform(target) {
            const x = parseFloat(target.dataset.x);
            const y = parseFloat(target.dataset.y);
            const rotation = parseFloat(target.dataset.rotation) || 0;
            target.style.transform = `translate(${x}px, ${y}px) rotate(${rotation}deg)`;
        }
    }
}

// console.clear();

// Slides Text ScrollTrigger
gsap.registerPlugin(ScrollTrigger);

gsap.registerPlugin(ScrollTrigger);

const cards = document.querySelectorAll(".stacking-cards__item");
const list = document.querySelector(".stacking-cards__list");

// TEXT timeline
gsap.timeline({
    scrollTrigger: {
        trigger: ".book-section",
        start: "top center",
        end: "bottom center", // full scroll for text
        scrub: 1,
    },
})
    .to(".center_text", { scale: 0.5, y: -100 }, 0)
    .to(".left_text", { x: -700 }, 0)
    .to(".right_text", { x: 700 }, 0);

// CARDS timeline (independent, early and smooth)
gsap.timeline({
    scrollTrigger: {
        trigger: ".book-section",
        start: "top center",
        end: "top+=50%", // this is the magic -- very early complete
        scrub: 2,
    },
})
    .to(
        cards,
        {
            width: "100%",
            maxWidth: "none",
            transform: "translateY(300px)",
            ease: "power2.out",
        },
        0
    )
    .to(
        list,
        {
            marginTop: "-200px",
            top: "10vh",
            position: "sticky",
        },
        0
    );

// gsap.from(".stacked-card", { y: -100 });

// const scaleMax = gsap.utils.mapRange(
//     1,
//     document.querySelectorAll(".card").length - 1,
//     0.8,
//     1
// );
// const time = 1;

// gsap.set(".card", {
//     y: (index) => 1 * index, // set offset
//     transformStyle: "preserve-3d", // For the perspecitve effect
//     // transformPerspective: 1000, // For the perspecitve effect
//     transformOrigin: "center top",
// });

// //--------------------------------//
// // The animation
// //--------------------------------//
// const tl_test = gsap.timeline({
//     scrollTrigger: {
//         trigger: ".stacked-card",
//         start: "top 10%",
//         end: `${window.innerHeight * 5} top`,
//         scrub: true,
//         pin: true,
//         // pinSpacing: false,
//         markers: true,
//     },
// });

// // Animte cards up from off screen one by one.
// tl_test.from(".stacked-card .card", {
//     y: () => window.innerHeight,
//     scale: 0.5,
//     duration: time / 1,
//     stagger: time,
// });

// //
// tl_test.to(
//     ".stacked-card .card:not(:last-child)",
//     {
//         rotationX: -20,
//         scale: (index) => scaleMax(index), // dynamlicly get scale based on the index of the current card
//         stagger: {
//             each: time,
//         },
//     },
//     time // Start tween when the first cards has done animating
// );

// gsap.registerPlugin(ScrollTrigger);

// const tl = gsap.timeline({
//     scrollTrigger: {
//         trigger: ".book-section",
//         start: "top center",
//         end: "bottom center",
//         scrub: 1,
//         markers: true,
//     },
//     defaults: { duration: 1, ease: "power2.out" },
// });

// tl.to(".center_text", { scale: 0.5, y: -100 })
//     .to(".left_text", { x: -700 }, 0)
//     .to(".right_text", { x: 700 }, 0);

// gsap.registerPlugin(ScrollTrigger);

// // MAIN timeline
// const tlMain = gsap.timeline({
//     scrollTrigger: {
//         trigger: ".book-section",
//         start: "top top",
//         end: "+=1000", // Adjust based on your needs
//         scrub: true,
//         pin: true,
//         markers: true,
//     },
// });

// // 1. Animate heading texts
// tlMain
//     .to(".center_text", { scale: 0.5, y: -100, duration: 1 })
//     .to(".left_text", { x: -700, duration: 1 }, "<")
//     .to(".right_text", { x: 700, duration: 1 }, "<");

// // 2. Stacked card animation (starts after previous animation)
// const cards = gsap.utils.toArray(".stacked-card .card");

// // Set initial states
// cards.forEach((card, i) => {
//     gsap.set(card, {
//         y: i * 30,
//         opacity: i === 0 ? 1 : 0,
//         zIndex: cards.length - i,
//     });
// });

// // Add stacked animation in timeline
// cards.forEach((card, i) => {
//     if (i === 0) return; // skip first card
//     tlMain
//         .to(cards[i - 1], { y: -100, opacity: 0, duration: 0.5 }, "+=0.5")
//         .to(card, { opacity: 1, y: 0, duration: 0.5 }, "<");
// });

// tlMain.to(".blog-section", { y: -500, duration: 1 });

// gsap.registerPlugin(ScrollTrigger);

// const cards = gsap.utils.toArray(".slide_box");
// const spacer = 20;
// const minScale = 0.8;
// const distributor = gsap.utils.distribute({ base: minScale, amount: 0.2 });

// const tl = gsap.timeline({
//     scrollTrigger: {
//         trigger: ".book-section",
//         start: "top top",
//         end: () => `+=${cards.length * 300}`, // Adjust based on number of cards and spacing
//         scrub: true,
//         pin: true,
//         markers: true,
//     },
// });

// // Text animations first
// tl.to(".center_text", { scale: 0.5, y: 300, ease: "power2.out" }, 0)
//     .to(".left_text", { x: -700, ease: "power2.out" }, 0)
//     .to(".right_text", { x: 700, ease: "power2.out" }, 0);

// Add a label to begin card animations after text
// tl.add("cardStart");

// cards.forEach((card, index) => {
//     const scaleVal = distributor(index, cards[index], cards);
//     tl.to(
//         card,
//         {
//             y: -index * spacer,
//             scale: scaleVal,
//             ease: "power1.out",
//         },
//         `cardStart+=${index * 0.5}`
//     ); // stagger the entry slightly
// });

// const tl = gsap.timeline({
//     scrollTrigger: {
//         trigger: ".book-section",
//         start: "top top",
//         end: () => `+=${cards.length * 300}`, // Adjust based on number of cards and spacing
//         scrub: true,
//         // pin: true,
//         markers: true,
//     },
// });

// const tl = gsap.timeline({
//     scrollTrigger: {
//         trigger: ".book-section", // 👈 the section you want to watch
//         start: "top center", // when top of section hits center of viewport
//         end: "bottom center", // optional: when animation ends
//         scrub: 1, // smooth scroll animation
//         markers: true,            // uncomment to debug visually
//     },
//     defaults: { duration: 1, ease: "power2.out" },
// });

// tl.to(".center_text", { scale: 0.5, y: -100 }) // moved upward (not down)
//     .to(".left_text", { x: -700 }, 0)
//     .to(".right_text", { x: 700 }, 0);

// gsap.from(".stacked-card", { y: -800 });

// const scaleMax = gsap.utils.mapRange(
//     1,
//     document.querySelectorAll(".card").length - 1,
//     0.8,
//     1
// );
// const time = 1;

// gsap.set(".card", {
//     y: (index) => 30 * index, // set offset
//     transformStyle: "preserve-3d", // For the perspecitve effect
//     // transformPerspective: 1000, // For the perspecitve effect
//     transformOrigin: "center top",
// });

// //--------------------------------//
// // The animation
// //--------------------------------//
// const tl_test = gsap.timeline({
//     scrollTrigger: {
//         trigger: ".stacked-card",
//         start: "top 0%",
//         end: `${window.innerHeight * 5} top`,
//         scrub: true,
//         pin: true,
//         // pinSpacing: false,
//         markers: false,
//     },
// });

// // Animte cards up from off screen one by one.
// tl_test.from(".stacked-card .card", {
//     y: () => window.innerHeight,
//     scale: 0.5,
//     duration: time / 1,
//     stagger: time,
// });

// //
// tl_test.to(
//     ".book-section .card:not(:last-child)",
//     {
//         rotationX: -20,
//         scale: (index) => scaleMax(index), // dynamlicly get scale based on the index of the current card
//         stagger: {
//             each: time,
//         },
//     },
//     time // Start tween when the first cards has done animating
// );

// END The animation --------------//

// cardsWrappers.forEach((wrapper, i) => {
//     // const card = cards[i];
//     // let scale = 1,
//     //     rotation = 0;
//     // if (i !== cards.length - 1) {
//     //     scale = 0.9 + 0.025 * i;
//     //     rotation = -10;
//     // }
//     // gsap.to(card, {
//     //     scale: scale,
//     //     rotationX: rotation,
//     //     transformOrigin: "top center",
//     //     ease: "none",
//     //     scrollTrigger: {
//     //         trigger: wrapper,
//     //         start: "top " + (60 + 10 * i),
//     //         end: "bottom 550",
//     //         endTrigger: ".wrapper",
//     //         scrub: true,
//     //         pin: wrapper,
//     //         pinSpacing: false,
//     //         markers: {
//     //             indent: 100 * i,
//     //             startColor: "#0ae448",
//     //             endColor: "#fec5fb",
//     //             fontSize: "14px",
//     //         },
//     //         id: i + 1,
//     //     },
//     // });
// });

// adventure animation starts here
gsap.timeline({
    scrollTrigger: {
        trigger: ".adventure-section",
        start: "top 60%",
        end: "bottom 90%",
        toggleActions: "play reverse play reverse",
        markers: false,
    },
}).to(".adventure-img", {
    scale: 1,
    x: 0,
    ease: "power2.out",
    duration: 0.5,
});

const adventureCards = document.querySelectorAll(".adventure_card");
console.log(adventureCards, "adventureCards");

gsap.from(adventureCards, {
    scrollTrigger: {
        trigger: ".adventure-section",
        start: "top 70%",
        toggleActions: "play none none none",
        markers: false,
    },
    opacity: 0,
    y: 50,
    duration: 0.8,
    stagger: 0.2,
    ease: "power2.out",
});
// Ministry starts here
const tl = gsap.timeline({
    scrollTrigger: {
        trigger: ".wealth-section",
        start: "top 30%",
        toggleActions: "play none none none",
        markers: false, // enable to debug
        once: true,
    },
    repeat: -1, // infinite loop
    repeatDelay: 2,
});

tl.addLabel("start");

tl.to(
    ".uncover_slice",
    {
        height: 0,
        ease: "power4.inOut",
        stagger: { amount: 0.33 },
        duration: 1,
    },
    "start"
);

tl.to(
    ".wealth-img",
    {
        scale: 1.3,
        ease: "power4.inOut",
        duration: 1.2,
    },
    "start"
);
// Ministrye end here
// prophecy image Animation

gsap.timeline({
    scrollTrigger: {
        trigger: ".prophecy-section",
        start: "top 60%",
        end: "bottom 90%",
        toggleActions: "play reverse play reverse",
        markers: false,
    },
}).to(".prophecy_img", {
    scale: 1,
    x: 0,
    ease: "power2.out",
    duration: 0.8,
});
// prophecy image Animation

gsap.timeline({
    scrollTrigger: {
        trigger: ".assembly-section",
        start: "top 60%",
        end: "bottom 90%",
        toggleActions: "play reverse play reverse",
        markers: false,
    },
}).to(".assembly_img", {
    scale: 1,
    x: 0,
    ease: "power2.out",
    duration: 0.5,
});

// gsap.timeline({
//     scrollTrigger: {
//         trigger: ".contact-section",
//         start: "top 60%",
//         end: "bottom 90%",
//         toggleActions: "play reverse play reverse",
//         markers: false,
//     },
// }).to(".contact_img", {
//     height: "100%",
//     opacity: 1,
//     y: 0,
//     duration: 0.8,
//     ease: "power2.out",
// });

document.querySelectorAll(".reveal").forEach((el) => {
    gsap.fromTo(
        el,
        { x: 60, opacity: 0.2, scale: 0.85 },
        {
            x: 0,
            opacity: 1,
            scale: 1,
            duration: 1.5,
            ease: "power2.out",
            scrollTrigger: {
                trigger: el,
                start: "top 80%",
                toggleActions: "play none none reset",
            },
        }
    );
});

const heading = document.getElementById("footer-heading");
const letters = heading.textContent.split("");
heading.innerHTML = letters
    .map((letter) =>
        letter === " "
            ? `<span class="space">&nbsp;</span>`
            : `<span class="char">${letter}</span>`
    )
    .join("");

// Animate each character
gsap.from(".char", {
    y: 50,
    opacity: 0,
    stagger: 0.05,
    ease: "power3.out",
    duration: 0.6,
    scrollTrigger: {
        trigger: "#footer-heading",
        start: "top 80%", // when top of heading is at 80% of viewport
        toggleActions: "play none none none",
    },
});

// STEP 1: Split each .reveal-text into span.reveal-char
document.querySelectorAll(".reveal-text").forEach((revealText) => {
    const fullText = revealText.dataset.text;
    revealText.innerHTML = ""; // Clear existing text

    fullText.split("").forEach((char) => {
        const span = document.createElement("span");
        span.className = "reveal-char";
        span.textContent = char === " " ? "\u00A0" : char;
        revealText.appendChild(span);
    });

    // STEP 2: Animate each .reveal-char inside this .reveal-text
    gsap.fromTo(
        revealText.querySelectorAll(".reveal-char"),
        { y: "100%", opacity: 0 },
        {
            y: "0%",
            opacity: 1,
            duration: 0.6,
            ease: "power2.out",
            stagger: 0.05,
            scrollTrigger: {
                trigger: revealText,
                start: "top 80%",
                toggleActions: "play none none reset",
            },
        }
    );
});

const timelineContact = gsap.timeline({
    scrollTrigger: {
        trigger: ".contact_img",
        start: "top 80%",
        toggleActions: "play none none none",
    },
    repeat: -1,
    yoyo: true,
});

timelineContact
    .fromTo(
        ".contact_img img",
        { yPercent: -100, opacity: 0 },
        { yPercent: 0, opacity: 1, duration: 1.6, ease: "power3.out" }
    )
    .to(
        ".contact_img",
        { clipPath: "inset(0% 0% 0% 0%)", duration: 1, ease: "power3.out" },
        ">0.1"
    )
    .to(
        ".contact_img",
        { clipPath: "inset(20% 0% 20% 0%)", duration: 1, ease: "power3.inOut" },
        ">1"
    );

let imageTl = gsap.timeline({
    scrollTrigger: {
        trigger: ".wa-clip-left-right",
        start: "top 85%",
        end: "top 35%",
        scrub: 1.2,
        // markers: true,
    },
});

imageTl
    .to(".clip-img", {
        opacity: 1,
        x: 0,
        ease: "power1.out",
        duration: 0.4,
    })
    .to(".clip-img", {
        clipPath: "inset(40% 0% 40% 0%)",
        duration: 0.5,
        ease: "power1.out",
    })
    .to(".clip-img", {
        clipPath: "inset(0% 0% 40% 0%)",
        duration: 0.5,
        ease: "power1.out",
    })
    .to(".clip-img", {
        clipPath: "inset(0% 0% 0% 0%)",
        duration: 0.5,
        ease: "power1.out",
    });

// const container = document.querySelector(".tags-wrapper");
// const tags = document.querySelectorAll(".single-tag");

// const BOUNDARY_WIDTH = container.clientWidth;
// const BOUNDARY_HEIGHT = 400; // height of .tags-wrapper

// ScrollTrigger.create({
//     trigger: container,
//     start: "top center",
//     once: true,
//     onEnter: () => {
//         const maxY = BOUNDARY_HEIGHT - 80;
//         tags.forEach((tag) => {
//             const x = parseFloat(tag.dataset.x) || 0;
//             const startY = parseFloat(tag.dataset.y) || -200;

//             gsap.set(tag, { x, y: startY, opacity: 1 });

//             gsap.to(tag, {
//                 duration: 1,
//                 y: maxY,
//                 ease: "bounce.out",
//                 onUpdate: () => {
//                     const y = gsap.getProperty(tag, "y");
//                     tag.dataset.x = x;
//                     tag.dataset.y = y;
//                     tag.style.transform = `translate(${x}px, ${y}px)`;
//                 },
//                 onComplete: () => {
//                     enableDrag(tag);
//                 }
//             });
//         });
//     }
// });

// function enableDrag(tag) {
//     let isDragging = false;
//     let lastX = 0, lastY = 0;
//     let velocityX = 0, velocityY = 0;
//     let animationFrame = null;

//     const gravity = 1.2;
//     const bounceFactor = -0.6;
//     const friction = 0.96;

//     tag.addEventListener("pointerdown", (e) => {
//         isDragging = true;
//         lastX = e.clientX;
//         lastY = e.clientY;
//         tag.setPointerCapture(e.pointerId);
//         cancelAnimationFrame(animationFrame);
//     });

//     tag.addEventListener("pointermove", (e) => {
//         if (!isDragging) return;

//         const dx = e.clientX - lastX;
//         const dy = e.clientY - lastY;
//         lastX = e.clientX;
//         lastY = e.clientY;

//         let x = parseFloat(tag.dataset.x) + dx;
//         let y = parseFloat(tag.dataset.y) + dy;

//         const maxX = BOUNDARY_WIDTH - tag.offsetWidth;
//         const maxY = BOUNDARY_HEIGHT - tag.offsetHeight;

//         x = Math.max(0, Math.min(maxX, x));
//         y = Math.max(0, Math.min(maxY, y));

//         tag.dataset.x = x;
//         tag.dataset.y = y;

//         velocityX = dx;
//         velocityY = dy;

//         tag.style.transform = `translate(${x}px, ${y}px)`;
//     });

//     tag.addEventListener("pointerup", () => {
//         isDragging = false;
//         animateFall();
//     });

//     function animateFall() {
//         function fall() {
//             velocityY += gravity;
//             velocityX *= friction;

//             let x = parseFloat(tag.dataset.x) + velocityX;
//             let y = parseFloat(tag.dataset.y) + velocityY;

//             const maxX = BOUNDARY_WIDTH - tag.offsetWidth;
//             const maxY = BOUNDARY_HEIGHT - tag.offsetHeight;

//             if (x <= 0 || x >= maxX) {
//                 x = Math.max(0, Math.min(maxX, x));
//                 velocityX *= bounceFactor;
//             }

//             if (y >= maxY) {
//                 y = maxY;
//                 velocityY *= bounceFactor;

//                 if (Math.abs(velocityY) < 1 && Math.abs(velocityX) < 0.5) {
//                     cancelAnimationFrame(animationFrame);
//                     return;
//                 }
//             }

//             tag.dataset.x = x;
//             tag.dataset.y = y;

//             tag.style.transform = `translate(${x}px, ${y}px)`;

//             animationFrame = requestAnimationFrame(fall);
//         }

//         animationFrame = requestAnimationFrame(fall);
//     }
// }

gsap.set(".ball", { xPercent: -50, yPercent: -50 });
let targets = gsap.utils.toArray(".ball");
window.addEventListener("mousemove", (e) => {
    const { clientX, clientY } = e;
    gsap.to(targets, {
        duration: 0.3,
        x: e.clientX,
        y: e.clientY,
        ease: "none",
        overwrite: "auto",
        stagger: 0.035,
    });
});
$(".target-heading").on("mouseenter", function () {
    gsap.to(targets, {
        scale: 20,
    });
});
$(".target-heading").on("mouseleave", function () {
    gsap.to(targets, {
        scale: 1,
    });
});

window.addEventListener("scroll", function () {
    const myDiv = document.getElementById("topScroll");

    if (window.scrollY >= 100) {
        myDiv.classList.add("scrolled");
    } else {
        myDiv.classList.remove("scrolled");
    }
});

// document.addEventListener("DOMContentLoaded", function () {
//     luxy.init({
//         wrapper: "#luxy",
//         wrapperSpeed: 0.08,
//         targetSpeed: 0.02,
//         smooth: true,
//         native: false,
//     });
// });

$(".toggler-btn").click(function () {
    $(this).next(".cart_input_wrap").toggleClass("d-none");

    // Toggle arrow icon
    let icon = $(this).find("i.fa-solid");
    icon.toggleClass("fa-angle-down fa-angle-up");
});

// Donation starts here
const images = document.querySelectorAll(".cursor-picture");
let lastX = 0;
let lastY = 0;
let index = 0;
const minDistance = 180;
const activeImages = new Set();
let mouseX = 0,
    mouseY = 0;
let needsUpdate = false;
let animationReady = false;

gsap.timeline({
    onComplete: () => {
        animationReady = true;
    },
})
    .to(".title", {
        backgroundPosition: "0",
        duration: 1.2,
        delay: 0.3,
        ease: "power2.out",
    })
    .to(
        ".title",
        {
            scale: 1,
            duration: 1,
            ease: "power2.inOut",
        },
        "-=0.3"
    );

document
    .querySelector(".donation_wrapper")
    .addEventListener("mousemove", (e) => {
        if (!animationReady) return;

        mouseX = e.clientX;
        mouseY = e.clientY;
        needsUpdate = true;
    });

gsap.ticker.add(() => {
    if (!needsUpdate || !animationReady) return;
    needsUpdate = false;

    if (Math.hypot(mouseX - lastX, mouseY - lastY) < minDistance) return;

    lastX = mouseX;
    lastY = mouseY;

    if (index >= images.length) index = 0;
    const img = images[index];

    if (activeImages.has(img)) return;
    index++;
    activeImages.add(img);

    gsap.set(img, {
        left: mouseX - img.width / 2 + "px",
        top: mouseY - img.height / 2 + "px",
        scale: 0.8,
        opacity: 0,
        position: "absolute",
    });

    gsap.timeline()
        .to(img, { opacity: 1, scale: 1, duration: 0.3, ease: "power2.out" })
        .to(img, { opacity: 1, duration: 0.1 })
        .to(img, { opacity: 0, scale: 0.8, duration: 0.3, ease: "power2.in" })
        .call(() => {
            activeImages.delete(img);
        });
});

// Donation ends here
