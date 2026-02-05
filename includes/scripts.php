<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
    integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"
    integrity="sha512-Eak/29OTpb36LLo2r47IpVzPBLXnAMPAVypbSZiZ4Qkf8p/7S/XRG5xp7OKWPPYfJT6metI+IORkR5G8F900+g=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.2.0/jquery.magnific-popup.min.js"></script>
<script src="https://unpkg.com/imagesloaded@5/imagesloaded.pkgd.min.js"></script>

<script>
    var swiper = new Swiper(".heroSwiper", {
        autoplay: {
            delay: 5000,
        },
        loop: true,
        pagination: {
            el: ".swiper-pagination",
            dynamicBullets: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
</script>
<script>
    var a = 0;
    $(window).scroll(function () {
        var oTop = $('.stats').offset().top - window.innerHeight;
        if (a == 0 && $(window).scrollTop() > oTop) {
            $('.statValue').each(function () {
                var $this = $(this),
                    countTo = $this.attr('data-count');
                $({
                    countNum: $this.text()
                }).animate({
                    countNum: countTo
                }, {
                    duration: 5000,
                    easing: 'swing',
                    step: function () {
                        $this.text(Math.floor(this.countNum));
                    },
                    complete: function () {
                        $this.text(this.countNum);
                    }
                });
            });
            a = 1;
        }
    });
</script>
<script>
    // === Testimonial Thumbs ===
    const testimonialThumbs = new Swiper(".testimonialThumbs", {
        spaceBetween: 20,
        slidesPerView: 'auto',
        freeMode: true,
        watchSlidesProgress: true,
    });

    // === Testimonial Main ===
    document.addEventListener("DOMContentLoaded", function () {

        let testimonialSwiper;

        /* ===== Stop All Videos ===== */
        function stopAllVideos() {

            document.querySelectorAll(".testimonialVideo").forEach(video => {
                video.pause();
                video.currentTime = 0;
            });

        }


        /* ===== Swiper Init ===== */
        testimonialSwiper = new Swiper(".testimonialGallery", {

            spaceBetween: 20,

            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },

            on: {
                slideChangeTransitionStart() {
                    stopAllVideos();
                }
            }

        });


        /* ⭐ Stop Video When Buttons Click */
        document.querySelector(".swiper-button-next")
            .addEventListener("click", stopAllVideos);

        document.querySelector(".swiper-button-prev")
            .addEventListener("click", stopAllVideos);


        /* ⭐ Only One Video Plays */
        document.querySelectorAll(".testimonialVideo").forEach(video => {

            video.addEventListener("play", () => {

                document.querySelectorAll(".testimonialVideo").forEach(v => {
                    if (v !== video) {
                        v.pause();
                        v.currentTime = 0;
                    }
                });

            });

        });

    });



    // === Project Thumbs ===
    const projectThumbs = new Swiper(".projectThumbs", {
        spaceBetween: 20,
        slidesPerView: 2,
        freeMode: true,
        watchSlidesProgress: true,
        breakpoints: {
            0: { slidesPerView: 2 },
            576: { slidesPerView: 3 },
            768: { slidesPerView: 4 },
            992: { slidesPerView: 6 }
        }
    });

    // === Project Main ===
    new Swiper(".projectGallery", {
        loop: true,
        spaceBetween: 20,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        thumbs: { swiper: projectThumbs },
    });

</script>
<script>
    var a = 0;
    $(window).scroll(function () {
        var oTop = $('.counter').offset().top - window.innerHeight;
        if (a == 0 && $(window).scrollTop() > oTop) {
            $('.counterValue').each(function () {
                var $this = $(this),
                    countTo = $this.attr('data-count');
                $({
                    countNum: $this.text()
                }).animate({
                    countNum: countTo
                }, {
                    duration: 5000,
                    easing: 'swing',
                    step: function () {
                        $this.text(Math.floor(this.countNum));
                    },
                    complete: function () {
                        $this.text(this.countNum);
                    }
                });
            });
            a = 1;
        }
    });
</script>
<script>
    var swiper = new Swiper(".collaborationSwiper", {
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        loop: true,
        slidesPerView: 6,
        spaceBetween: 30,
        breakpoints: {
            0: { slidesPerView: 2 },
            576: { slidesPerView: 3 },
            768: { slidesPerView: 5 },
            992: { slidesPerView: 6 }
        }
    });
</script>
<script>
    /* Popup Gallery (keeps Magnific Popup jQuery plugin usage) */
    (function () {
        if (window.jQuery && $.fn && $.fn.magnificPopup) {
            $(function () {
                $('.popupGallery').magnificPopup({
                    delegate: 'a',
                    type: 'image',
                    gallery: {
                        enabled: true,
                        navigateByImgClick: true,
                        preload: [0, 1]
                    },
                    keyboard: {
                        enabled: true,
                        left: true,
                        right: true,
                        escKey: true
                    },
                    mainClass: 'mfp-fade',
                    removalDelay: 300
                });
            });
        }
    })();
</script>
<script>
    function resizeGridItem(item) {
        grid = document.getElementsByClassName("gridGallery")[0];
        rowHeight = parseInt(window.getComputedStyle(grid).getPropertyValue('grid-auto-rows'));
        rowGap = parseInt(window.getComputedStyle(grid).getPropertyValue('grid-row-gap'));
        rowSpan = Math.ceil((item.querySelector('figure').getBoundingClientRect().height + rowGap) / (rowHeight +
            rowGap));
        item.style.gridRowEnd = "span " + rowSpan;
    }

    function resizeAllGridItems() {
        allItems = document.getElementsByClassName("item");
        for (x = 0; x < allItems.length; x++) {
            resizeGridItem(allItems[x]);
        }
    }

    function resizeInstance(instance) {
        item = instance.elements[0];
        resizeGridItem(item);
    }

    window.onload = resizeAllGridItems();
    window.addEventListener("resize", resizeAllGridItems);

    allItems = document.getElementsByClassName("item");
    for (x = 0; x < allItems.length; x++) {
        imagesLoaded(allItems[x], resizeInstance);
    }
</script>
<script>
    (function () {
        var elements = document.querySelectorAll('img[data-src]');
        var index = 0;
        var lazyLoad = function () {
            if (index >= elements.length) return;
            var item = elements[index];
            if ((this.scrollY + this.innerHeight) > item.offsetTop) {
                var src = item.getAttribute("data-src");
                item.src = src;
                item.addEventListener('load', function () {
                    item.removeAttribute('data-src');
                });
                index++;
                lazyLoad();
            }
        };
        var init = function () {
            window.addEventListener('scroll', lazyLoad);
            lazyLoad();
        };
        return init();
    })();
</script>
<script>
    document.addEventListener("DOMContentLoaded", function () {

        const aboutVideo = document.getElementById('aboutVideo');
        const youtubeIframe = document.getElementById('youtube-video');

        // Store original video URL
        const defaultSrc = youtubeIframe.getAttribute('src');

        // When modal closes → stop video
        aboutVideo.addEventListener('hidden.bs.modal', function () {
            youtubeIframe.setAttribute('src', '');      // stop the video immediately
            youtubeIframe.setAttribute('src', defaultSrc); // reload for next open
        });

    });
</script>
<script>
    document.querySelectorAll('#customSelect .dropdown-item').forEach(item => {
        item.addEventListener('click', function () {
            const dropdown = this.closest('.dropdown');
            const button = dropdown.querySelector('.dropdown-toggle');
            const searchInput = dropdown.querySelector('input[type="text"]');
            const items = dropdown.querySelectorAll('.dropdown-item');

            // set selected value
            button.textContent = this.textContent;

            // ✅ clear search input
            searchInput.value = '';

            // ✅ reset all options visibility
            items.forEach(i => i.style.display = '');

            // close dropdown
            bootstrap.Dropdown.getInstance(button).hide();
        });
    });

    function filterOptions(input) {
        const filter = input.value.toLowerCase();
        const items = input.closest('.dropdown-menu')
            .querySelectorAll('.dropdown-item');

        items.forEach(item => {
            item.style.display = item.textContent.toLowerCase().includes(filter)
                ? ''
                : 'none';
        });
    }
</script>
<script>
    var currentYear = new Date().getFullYear();
    document.getElementById("year").textContent = currentYear;
</script>