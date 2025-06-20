<!-- GSAP and plugins (only latest version) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/Draggable.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.2/dist/InertiaPlugin.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>

<!-- jQuery and Bootstrap -->
<script src="{!! frontJs('jquery.min.js') !!}"></script>

<script src="{!! frontJs('jquery.exzoom.js') !!}"></script>
<script src="{!! frontJs('bootstrap.min.js') !!}"></script>

<!-- Luxy.js for smooth scroll -->
<script src="{!! frontJs('luxy.min.js') !!}"></script>
<!-- Slick slider -->
<script src="{!! frontSlick('slick.min.js') !!}"></script>

<!-- Your custom scripts -->
<script src="{!! frontJs('scripts.js') !!}"></script>
<script>
    const checkbox = document.getElementById('addNoteCheck');
    const noteBox = document.getElementById('noteBox');

    checkbox.addEventListener('change', function() {
        noteBox.classList.toggle('d-none', !this.checked);
    });
    $(function() {

        $("#exzoom").exzoom({

            // thumbnail nav options
            "navWidth": 60,
            "navHeight": 60,
            "navItemNum": 5,
            "navItemMargin": 7,
            "navBorder": 1,

            // autoplay
            "autoPlay": true,

            // autoplay interval in milliseconds
            "autoPlayTimeout": 2000

        });

    });
</script>
<!-- Initialize luxy -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        if (typeof luxy !== "undefined") {
            luxy.init({
                wrapper: '#luxy',
                wrapperSpeed: 0.08
            });
        } else {
            console.error("Luxy.js not loaded");
        }
    });
</script>

<!-- Fancybox -->
<script src='https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js'></script>
