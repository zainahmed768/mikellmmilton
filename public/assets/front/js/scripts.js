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

gsap.registerPlugin(ScrollTrigger);

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

gsap.registerPlugin(ScrollTrigger);

const container = document.getElementById("tagContainer");
const tags = document.querySelectorAll(".single-tag");

// Drop all tags with bounce when scrolling into view
ScrollTrigger.create({
    trigger: container,
    start: "top center",
    once: true,
    onEnter: () => {
        const maxY = container.clientHeight - 60;
        tags.forEach((tag) => {
            const x = parseFloat(tag.dataset.x);
            tag.dataset.rotation = 0; // initialize rotation

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

    function updateTransform(target = tag) {
        const x = parseFloat(target.dataset.x);
        const y = parseFloat(target.dataset.y);
        const rotation = parseFloat(target.dataset.rotation) || 0;
        target.style.transform = `translate(${x}px, ${y}px) rotate(${rotation}deg)`;
    }

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

        const maxX = container.clientWidth - tag.offsetWidth;
        const maxY = container.clientHeight - tag.offsetHeight;

        x = Math.max(0, Math.min(maxX, x));
        y = Math.max(0, Math.min(maxY, y));

        tag.dataset.x = x;
        tag.dataset.y = y;

        // Reduced rotation speed to 0.3 for smoother, less intense rotation
        velocityRotation = dx * 0.3;

        tag.dataset.rotation = parseFloat(tag.dataset.rotation) || 0;

        tag.style.transform = `translate(${x}px, ${y}px) rotate(${tag.dataset.rotation}deg)`;

        velocityX = dx;
        velocityY = dy;

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

            const maxX = container.clientWidth - tag.offsetWidth;
            const maxY = container.clientHeight - tag.offsetHeight;

            // Clamp X position and bounce horizontally
            if (x <= 0 || x >= maxX) {
                x = Math.max(0, Math.min(maxX, x));
                velocityX *= bounceFactor;
                velocityRotation *= -1; // reverse rotation on bounce
            }

            // Clamp Y position and bounce vertically
            if (y >= maxY) {
                y = maxY;
                velocityY *= bounceFactor;

                // Stop animation if velocity is very small
                if (
                    Math.abs(velocityY) < 1 &&
                    Math.abs(velocityX) < 0.5 &&
                    Math.abs(velocityRotation) < 0.5
                ) {
                    velocityY = 0;
                    velocityX = 0;
                    velocityRotation = 0;
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
        const maxX = container.clientWidth - currentTag.offsetWidth;
        const maxY = container.clientHeight - currentTag.offsetHeight;

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

                currentTag.dataset.x = parseFloat(currentTag.dataset.x) - pushX;
                currentTag.dataset.y = parseFloat(currentTag.dataset.y) - pushY;

                other.dataset.x = parseFloat(other.dataset.x) + pushX;
                other.dataset.y = parseFloat(other.dataset.y) + pushY;

                // Clamp positions to container boundaries
                currentTag.dataset.x = Math.min(
                    maxX,
                    Math.max(0, currentTag.dataset.x)
                );
                currentTag.dataset.y = Math.min(
                    maxY,
                    Math.max(0, currentTag.dataset.y)
                );
                other.dataset.x = Math.min(maxX, Math.max(0, other.dataset.x));
                other.dataset.y = Math.min(maxY, Math.max(0, other.dataset.y));

                updateTransform(currentTag);
                updateTransform(other);
            }
        });
    }
}

console.clear();

gsap.registerPlugin(ScrollTrigger);

const cardsWrappers = gsap.utils.toArray(".card-wrapper");
const cards = gsap.utils.toArray(".card");

cardsWrappers.forEach((wrapper, i) => {
    const card = cards[i];
    let scale = 1,
        rotation = 0;
    if (i !== cards.length - 1) {
        scale = 0.9 + 0.025 * i;
        rotation = -10;
    }
    gsap.to(card, {
        scale: scale,
        rotationX: rotation,
        transformOrigin: "top center",
        ease: "none",
        scrollTrigger: {
            trigger: wrapper,
            start: "top " + (60 + 10 * i),
            end: "bottom 550",
            endTrigger: ".wrapper",
            scrub: true,
            pin: wrapper,
            pinSpacing: false,
            // markers: {
            //     indent: 100 * i,
            //     startColor: "#0ae448",
            //     endColor: "#fec5fb",
            //     fontSize: "14px",
            // },
            id: i + 1,
        },
    });
});

// Slides Text ScrollTrigger
gsap.registerPlugin(ScrollTrigger);

gsap.timeline({
    scrollTrigger: {
        trigger: ".book-section",
        start: "top 5%",
        end: "bottom 90%", // Only a small scroll range triggers full animation
        scrub: 0.7,
        markers: true,
    },
})
    .to(".center_text", { scale: 0.5, y: 300, ease: "power2.out" }, 0)
    .to(".left_text", { x: -700, ease: "power2.out" }, 0)
    .to(".right_text", { x: 700, ease: "power2.out" }, 0);
