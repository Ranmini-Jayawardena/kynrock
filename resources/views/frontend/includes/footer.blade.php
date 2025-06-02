<!-- footer start -->

<div class="container-fluid footer py-4">
    <div class="container">
        <div class="row">
            <div class="col-4 pe-4 footer_col">
                <a href="{{ url('/') }}">
                    <div class="footer_logo">
                        <img src="{{ asset('public/frontend/images/logo.png') }}" alt="" class="w-100">
                    </div>
                </a>

                <p>Goodwood Airport Hotel offers the perfect blend of comfort and convenience, located just minutes from
                    Bandaranaike International Airport and within easy reach of the vibrant heart of Sri Lanka, Colombo.
                </p>

            </div>

            <!-- ============ -->

            <div class="col-4 p-5 d-flex align-items-center justify-content-center row footer_col">
                <h4 class="text-light fw-bold mb-3">NAVIGATION</h4>

                <div class="row">
                    <div class="col-6">
                        <a href="{{ route('home') }}" class="footer_link">
                            Home
                        </a>

                        <a href="{{ route('stay') }}" class="footer_link">
                            Stay
                        </a>

                        <a href="dining.html" class="footer_link">
                            Dining
                        </a>

                        <a href="{{ route('wedding') }}" class="footer_link">
                            Weddings
                        </a>
                    </div>

                    <div class="col-6">
                        <a href="{{ route('gallery') }}" class="footer_link">
                            Gallery
                        </a>

                        <a href="{{ route('about-us') }}" class="footer_link">
                            About Us
                        </a>

                        <a href="{{ route('contact-us') }}" class="footer_link">
                            Contact Us
                        </a>

                        <a href="" class="footer_link">
                            Book Now
                        </a>
                    </div>
                </div>
            </div>

            <!-- ============ -->

            <div class="col-4 ps-5 d-flex align-items-center justify-content-center row">
                <div>
                    <h4 class="text-light">HOT LINE</h4>
                    <h3 class="d-flex mb-3">

                        @if (!empty($contactDetails->hotline))
                            <a href="tel: {{ $contactDetails->hotline }}"
                                class="footer_cont">{{ $contactDetails->hotline }}</a>
                        @endif
                        @if (!empty($contactDetails->hotline) && !empty($contactDetails->contact_no))
                            <span>&nbsp;/&nbsp;</span>
                        @endif
                        @if (!empty($contactDetails->contact_no))
                            <a href="tel:{{ $contactDetails->contact_no }}"  class="footer_cont">{{ $contactDetails->contact_no }}</a>
                        @endif

                    </h3>

                    @if (!empty($contactDetails->address))
                    <a href="{{ $contactDetails->map }}" target="_blank" class="footer_link mb-1">
                        {{ $contactDetails->address }}
                    </a>
                    @endif  

                    @if (!empty($contactDetails->email))
                    <a href="mailto:{{ $contactDetails->email }}" class="footer_link">
                        {{ $contactDetails->email }}
                    </a>
                    @endif 

                    <div class="d-flex gap-3 mb-3">
                        @if ($contactDetails->facebook_url != '' && $contactDetails->facebook_url != '#')
                        <a href="{{ $contactDetails->facebook_url }}" target="_blank">
                            <p class="mb-0 footer_cont"><i class="fab fa-facebook-f"></i></p>
                        </a>
                        @endif

                        @if ($contactDetails->twitter_url != '' && $contactDetails->twitter_url != '#')
                        <a href="{{ $contactDetails->twitter_url }}" target="_blank">
                            <p class="mb-0 footer_cont"><i class="fa-brands fa-x-twitter"></i></p>
                        </a>
                        @endif

                        @if ($contactDetails->youtube_url != '' && $contactDetails->youtube_url != '#')
                        <a href="{{ $contactDetails->youtube_url }}" target="_blank">
                            <p class="mb-0 footer_cont"><i class="fa-brands fa-youtube"></i></p>
                        </a>
                        @endif

                        @if ($contactDetails->instagram_url != '' && $contactDetails->instagram_url != '#')
                        <a href="{{ $contactDetails->instagram_url }}" target="_blank">
                            <p class="mb-0 footer_cont"><i class="fa-brands fa-instagram"></i></p>
                        </a>
                        @endif
                    </div>

                    <a href="{{ route('terms-and-conditions') }}" class="footer_link mb-0" style="font-size: 12px;">
                        Terms & condition
                    </a>

                    <a href="{{ route('privacy-policy') }}" class="footer_link" style="font-size: 12px;">
                        Privacy policy
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container py-2">
    <div class="row">
        <div class="col-6">
            <p class="mb-0" style="font-size: 12px;"><i>Copyright © {{ date('Y') }} GOODWOOD. All rights reserved.</i></p>
        </div>

        <div class="col-6 text-end">
            <p class="mb-0" style="font-size: 12px;">Design & Developed by<a href="https://www.tekgeeks.net/"
                                target="_blank">TekGeeks</a></p>
        </div>
       
    </div>
</div>

<!-- footer end -->

</div>


<!-- ================================= -->
<!-- ================================= -->
<!-- ================================= -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="{{ asset('public/frontend/js/jquery-3.7.1.min.js') }}"></script>
<script src="{{ asset('public/frontend/js/popper.min.js') }}"></script>
<script src="{{ asset('public/frontend/js/bootstrap.min.js') }}"></script>

<script src="{{ asset('public/frontend/js/scroll_top.js') }}"></script>

<!-- owl carousel -->
<script src="{{ asset('public/frontend/owl/owl.carousel.min.js') }}"></script>
<script src="{{ asset('public/frontend/owl/owl_js.js') }}"></script>
<!-- owl carousel -->

<script>
    $('.expe_owl').owlCarousel({
        loop: true,
        margin: 10,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                nav: true
            },
            600: {
                items: 2,
                nav: true
            },
            1000: {
                items: 3,
                nav: true,
                loop: true
            },
            1399: {
                items: 4,
                nav: true,
                loop: true
            }
        }
    })
</script>
<!-- owl carousel -->

<!-- Swiper JS -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/js/swiper.min.js'></script>

<!-- loading effect -->
<script src="{{ asset('public/frontend/js/aos.js') }}"></script>

<!-- date picker -->
<script src='https://cdn.jsdelivr.net/npm/vanillajs-datepicker@1.1.4/dist/js/datepicker-full.min.js'></script>
<script src="{{ asset('public/frontend/date_picker/date_picker.js') }}"></script>
<!-- date picker -->

<script>
    AOS.init({
        easing: 'ease-out-back',
        duration: 1000
    });
</script>
<!-- loading effect -->

<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper('.room-slider', {
        spaceBetween: 30,
        effect: 'fade',
        loop: true,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
</script>

<script>
    var swiper = new Swiper(".dining_slider", {
        pagination: {
            el: ".pagination",
            // dynamicBullets: true,
            clickable: true,
        },
        clickable: true,
        loop: true,
        autoplay: {
            delay: 3500,
        },

    });
</script>
<!-- room detail slider -->

<script>
    var slider = new Swiper('.gallery-slider', {
        slidesPerView: 1,
        centeredSlides: true,
        loop: true,
        loopedSlides: 6,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });

    var thumbs = new Swiper('.gallery-thumbs', {
        slidesPerView: 'auto',
        spaceBetween: 10,
        loop: true,
        slideToClickedSlide: true,
        slidesPerView: 5,
    });

    slider.controller.control = thumbs;
    thumbs.controller.control = slider;
</script>

<!-- room detail slider -->
<script>
    var swiper = new Swiper(".mySwiper", {
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
</script>

<!-- gallery -->
<script src="{{ asset('public/frontend/gallery/fancybox.min.js') }}"></script>
<!-- gallery -->

</body>

</html>
