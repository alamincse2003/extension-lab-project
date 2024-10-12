<!-- =========================
    footer section start
     ========================= -->

<footer class="footer">
    <div>
        <div class="footer-title">
            <h3>Extension Lab On Soical Media</h3>
        </div>
        <div class="social-media">
            <div class="social-media-item">
                <a href="#" target="_blank">
                    <i class="fab fa-linkedin"></i>
                </a>
            </div>
            <div class="social-media-item">
                <a href="#" target="_blank">
                    <i class="fab fa-youtube"></i>
                </a>
            </div>

            <div class="social-media-item">
                <a href="#" target="_blank">
                    <i class="fab fa-instagram"></i>
                </a>
            </div>
            <div class="social-media-item">
                <a href="#" target="_blank">
                    <i class="fab fa-facebook"></i>
                </a>
            </div>
            <div class="social-media-item">
                <a href="#" target="_blank">
                    <i class="fab fa-tiktok"></i>
                </a>
            </div>
            <div class="social-media-item">
                <a href="#" target="_blank">
                    <i class="fab fa-weixin"></i>
                </a>

            </div>
        </div>
    </div>
</footer>
<!-- =========================
    footer section end
     ========================= -->
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Slick Carousel JS -->
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<script>
    $(document).ready(function() {
        // Initialize Slick Carousel
        $(".slider").slick({
            slidesToShow: 4, // Show 4 slides at a time
            slidesToScroll: 1, // Scroll 1 slide at a time
            infinite: true, // Loop the slides
            autoplay: true, // Enable autoplay
            autoplaySpeed: 2000, // Set autoplay speed to 2 seconds
            dots: true, // Enable navigation dots
            arrows: true, // Show navigation arrows
            prevArrow: '<button type="button" class="slick-prev"><i class="fas fa-arrow-left"></i></button>',
            nextArrow: '<button type="button" class="slick-next"><i class="fas fa-arrow-right"></i></button>',
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                    },
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2,
                    },
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                    },
                },
            ],
        });
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>
<!-- js -->
<script src="{{ asset('frontend') }}/assets/js/script.js"></script>
</body>

</html>
