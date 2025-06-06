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
            window.removeEventListener("scroll", checkScroll);
        }
    }

    window.addEventListener("scroll", checkScroll);
    checkScroll();
});

const container = document.getElementById("tagContainer");
const tags = document.querySelectorAll(".single-tag");

// Define boundaries for dragging and bounce
const BOUNDARY_WIDTH = container.clientWidth;
const BOUNDARY_HEIGHT = 400;

ScrollTrigger.create({
    trigger: container,
    start: "top center",
    once: true,
    onEnter: () => {
        const maxY = BOUNDARY_HEIGHT - 60; // drop height within boundary
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
        velocityY = 0;
    let velocityRotation = 0;
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

        x = Math.max(0, Math.min(maxX, x));
        y = Math.max(0, Math.min(maxY, y));

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
                x = Math.max(0, Math.min(maxX, x));
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

                currentTag.dataset.x = Math.min(maxX, Math.max(0, newX1));
                currentTag.dataset.y = Math.min(maxY, Math.max(0, newY1));
                other.dataset.x = Math.min(maxX, Math.max(0, newX2));
                other.dataset.y = Math.min(maxY, Math.max(0, newY2));

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

console.clear();

// Slides Text ScrollTrigger
gsap.registerPlugin(ScrollTrigger);

const cards = gsap.utils.toArray(".slide_box");
const spacer = 20;
const minScale = 0.8;
const distributor = gsap.utils.distribute({ base: minScale, amount: 0.2 });

const tl = gsap.timeline({
    scrollTrigger: {
        trigger: ".book-section",
        start: "top top",
        end: () => `+=${cards.length * 300}`, // Adjust based on number of cards and spacing
        scrub: true,
        pin: true,
        markers: true,
    },
});

// Text animations first
tl.to(".center_text", { scale: 0.5, y: 300, ease: "power2.out" }, 0)
    .to(".left_text", { x: -700, ease: "power2.out" }, 0)
    .to(".right_text", { x: 700, ease: "power2.out" }, 0);

// Add a label to begin card animations after text
tl.add("cardStart");

cards.forEach((card, index) => {
    const scaleVal = distributor(index, cards[index], cards);
    tl.to(
        card,
        {
            y: -index * spacer,
            scale: scaleVal,
            ease: "power1.out",
        },
        `cardStart+=${index * 0.5}`
    ); // stagger the entry slightly
});

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

gsap.timeline({
    scrollTrigger: {
        trigger: ".contact-section",
        start: "top 60%",
        end: "bottom 90%",
        toggleActions: "play reverse play reverse",
        markers: false,
    },
}).to(".contact_img", {
    height: "100%",
    opacity: 1,
    y: 0,
    duration: 0.8,
    ease: "power2.out",
});

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
