@include('frontend.includes.header')

<div class="position-relative container-fluid main_slider p-0">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            @foreach ($sliders as $index => $slider)
                @php
                    $isActive = $index === 0;
                @endphp
                @if ($isActive)
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to={{ $index }}
                        class="active" aria-current="true" aria-label="Slide {{ $index + 1 }}"></button>
                @else
                    <button type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide-to="{{ $index }}" aria-label="Slide {{ $index + 1 }}"></button>
                @endif
            @endforeach
        </div>

        <div class="carousel-inner">
            @foreach ($sliders as $index => $slider)
                @php
                    $isActive = $index === 0;
                @endphp
                @if ($isActive)
                    <div class="carousel-item active slider_img"
                        style="background-image: linear-gradient(to bottom, rgb(0 0 0 / 30%), rgb(0 0 0 / 30%)), url(storage/app/{{ $slider->image_name }})">
                    </div>
                @else
                    <div class="carousel-item slider_img"
                        style="background-image: linear-gradient(to bottom, rgb(0 0 0 / 30%), rgb(0 0 0 / 30%)), url(storage/app/{{ $slider->image_name }})">
                    </div>
                @endif
            @endforeach
        </div>

    </div>

    <div class="container ">
        <div class="container search_bar">
            <div class="row justify-content-center">

                <div class="col-xxl-10 col-xl-11 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="mb-3">
                        <p class="animate__animated animate__fadeInUp">Welcome to Goodwood Airport Hotel</p>
                        <h1 class="animate__animated animate__fadeInDown">Gateway to Luxury Near the Airport</h1>
                    </div>
                </div>

                <div class="col-xxl-10 col-xl-11 col-lg-12 col-md-12 col-sm-12 col-12 search_bar_col">
                    <div class="d-flex flex-direction-row flex-wrap gap-5 search_row">

                        <div class="flex-fill">
                            <div class="form-floating">
                                <input type="text" class="datepicker_input form-control shadow-none datepicker-input"
                                    id="datepicker1" placeholder="DD/MM/YYYY">
                                <label for="datepicker1">Check In</label>
                                <i class="fa-solid fa-calendar-days"></i>
                            </div>
                        </div>

                        <div class="flex-fill r_line">
                            <div class="form-floating">
                                <input type="text" class="datepicker_input form-control shadow-none datepicker-input"
                                    id="datepicker1" placeholder="DD/MM/YYYY">
                                <label for="datepicker1">Check Out</label>
                                <i class="fa-solid fa-calendar-days"></i>
                            </div>
                        </div>

                        <div class="flex-fill r_line">
                            <div class="form-floating">
                                <select class="form-select shadow-none " id="floatingSelect"
                                    aria-label="Floating label select example">
                                    <option selected="">Select</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                                <label for="floatingSelect">Adult</label>
                            </div>
                        </div>

                        <div class="flex-fill r_line">
                            <div class="form-floating">
                                <select class="form-select shadow-none" id="floatingSelect"
                                    aria-label="Floating label select example">
                                    <option selected="">Select</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                                <label for="floatingSelect">Children</label>
                            </div>
                        </div>

                        <div class="flex-fill d-flex">
                            <button class="header_btn w-100">
                                <span>
                                    CHECK AVAILABILITY
                                </span>
                            </button>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- main slider end -->

<!-- =================================================== -->
<!-- =================================================== -->

<!-- about us start -->
<div class="container-fluid half_bg">
    <div class="container sec_padding">
        <div class="row justify-content-center">
            <div class="col-xxl-11 col-xl-11 col-lg-11 col-md-12 col-sm-12 col-12">
                <p data-aos="fade-up" class="sub_heading">
                    Welcome to Goodwood Airport Hotel
                </p>
                <h2 data-aos="fade-down">
                    {{ $welcomeContent->heading }}
                </h2>

                <div class="des_div">
                    <div class="read-more mb-3" style="--line-clamp: 3">
                        <input id="read-more-checkbox" type="checkbox" class="read-more__checkbox" aria-hidden="true">
                        <div class="read-more__text mb-2">{!! $welcomeContent->description !!}

                        </div>
                        <input id="read-more-checkbox" type="checkbox" class="read-more__checkbox shadow-none"
                            aria-hidden="true">
                        <label for="read-more-checkbox" class="read-more__label" data-read-more="Read more"
                            data-read-less="See less" aria-hidden="true"></label>
                    </div>




                    <a href="{{ route('about-us') }}">
                        <button class="arrow_btn">

                            <span class="circle">
                                <span class="icon arrow">
                                    <svg version="1.1" id="fi_664866" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                        viewBox="0 0 512.009 512.009" style="enable-background:new 0 0 512.009 512.009;"
                                        xml:space="preserve">
                                        <g>
                                            <g>
                                                <path
                                                    d="M508.625,247.801L508.625,247.801L392.262,131.437c-4.18-4.881-11.526-5.45-16.407-1.269
                                        c-4.881,4.18-5.45,11.526-1.269,16.407c0.39,0.455,0.814,0.88,1.269,1.269l96.465,96.582H11.636C5.21,244.426,0,249.636,0,256.063
                                        s5.21,11.636,11.636,11.636H472.32l-96.465,96.465c-4.881,4.18-5.45,11.526-1.269,16.407s11.526,5.45,16.407,1.269
                                        c0.455-0.39,0.88-0.814,1.269-1.269l116.364-116.364C513.137,259.67,513.137,252.34,508.625,247.801z">
                                                </path>
                                            </g>
                                        </g>
                                    </svg>
                                </span>
                            </span>

                            <span class="arrow_btn_text">
                                <p>ABout us</p>
                            </span>

                        </button>
                    </a>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- about us end -->

<div class="clearfix"></div>

<!-- =================================================== -->

<!-- rooms start -->

<div class="container-fluid blue_bg_half sec_padding pb-0">
    <div class="container">
        <div class="row">
            <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12">
                <p class="sub_heading" data-aos="fade-up">
                    Welcome to Goodwood Airport Hotel
                </p>
                <h2 class="text-light" data-aos="fade-down">
                    {{ $roomContent->heading }}
                </h2>
                <div class="des_div">
                    <p class="text-light">

                        {{ strip_tags($roomContent->description) }}
                    </p>

                    <a href="stay.html">
                        <button class="arrow_btn light">

                            <span class="circle">
                                <span class="icon arrow">
                                    <svg version="1.1" id="fi_664866" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                        viewBox="0 0 512.009 512.009"
                                        style="enable-background:new 0 0 512.009 512.009;" xml:space="preserve">
                                        <g>
                                            <g>
                                                <path
                                                    d="M508.625,247.801L508.625,247.801L392.262,131.437c-4.18-4.881-11.526-5.45-16.407-1.269
                            c-4.881,4.18-5.45,11.526-1.269,16.407c0.39,0.455,0.814,0.88,1.269,1.269l96.465,96.582H11.636C5.21,244.426,0,249.636,0,256.063
                            s5.21,11.636,11.636,11.636H472.32l-96.465,96.465c-4.881,4.18-5.45,11.526-1.269,16.407s11.526,5.45,16.407,1.269
                            c0.455-0.39,0.88-0.814,1.269-1.269l116.364-116.364C513.137,259.67,513.137,252.34,508.625,247.801z">
                                                </path>
                                            </g>
                                        </g>
                                    </svg>
                                </span>
                            </span>

                            <span class="arrow_btn_text">
                                <p>View all</p>
                            </span>

                        </button>
                    </a>

                </div>
            </div>
            <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12">
                <div class="room-slider">
                    <div class="room-slider__wrp swiper-wrapper">
                        @foreach ($roomTypes as $room)
                            <div class="room-slider__item swiper-slide w-100"
                                style="background-image: url('{{ asset('storage/app/' . $room->home_image) }}'); background-size: cover;">
                                <div class="room-slider__img">
                                    <h4 class="fw-bold">{{ $room->home_title }}</h4>
                                    <p>{{ $room->home_content1 }}</p>

                                    <div class="row">
                                        @foreach ($room->roomAmenities as $amenityData)
                                            @if ($amenityData->feature)
                                                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                                                    <div class="icon_div d-flex mb-2 gap-2">
                                                        <img src="{{ asset('storage/app/' . $amenityData->feature->icon) }}"
                                                            alt="">
                                                        <p class="mb-0">{{ $amenityData->feature->amenties_name }}
                                                        </p>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach

                                    </div>

                                    <div class="d-flex justify-content-end pe-5">
                                        <a href="{{ url('room_detail/' . $room->id) }}">
                                            <button class="arrow_btn">
                                                <span class="circle">
                                                    <span class="icon arrow">
                                                        <svg viewBox="0 0 512.009 512.009">
                                                            <path
                                                                d="M508.625,247.801L392.262,131.437c-4.18-4.881-11.526-5.45-16.407-1.269s-5.45,11.526-1.269,16.407l96.465,96.582H11.636C5.21,244.426,0,249.636,0,256.063s5.21,11.636,11.636,11.636H472.32l-96.465,96.465c-4.881,4.18-5.45,11.526-1.269,16.407s11.526,5.45,16.407,1.269l116.364-116.364C513.137,259.67,513.137,252.34,508.625,247.801z" />
                                                        </svg>
                                                    </span>
                                                </span>
                                                <span class="arrow_btn_text">
                                                    <p>Room details</p>
                                                </span>
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <!-- Add Swiper navigation -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- rooms end -->

<div class="clearfix"></div>

<!-- =================================================== -->

<!-- Features sec start -->

<div class="container-fluid img_bg feat_sec" data-speed="0.9"
    style="background-image: url(storage/app/{{ $featureContent->image }}); position: relative; z-index: -1;">
</div>

<div class="container">
    <div class="row justify-content-end">
        <div class="col-xxl-6 col-xl-6 col-lg-8 col-md-12 col-sm-12 col-12">
            <div class="img_bg p-5 feat_text"
                style="border-radius: 10px; background-image: url(public/frontend/images/feat_bg.jpg);">
                <p class="sub_heading" data-aos="fade-up">
                    Features
                </p>
                <h2 class="text-light" data-aos="fade-down">
                    {{ $featureContent->heading }}
                </h2>
                <div class="des_div">
                    <div class="read-more mb-3" style="--line-clamp: 3">
                        <input id="read-more-feature" type="checkbox" class="read-more__checkbox text-light"
                            aria-hidden="true">
                        <div class="read-more__text mb-2 text-light">
                            {!! $featureContent->description !!}

                        </div>
                        <input id="read-more-feature" type="checkbox" class="read-more__checkbox shadow-none"
                            aria-hidden="true">
                        <label for="read-more-feature" class="read-more__label text-light" data-read-more="Read more"
                            data-read-less="See less" aria-hidden="true"></label>
                    </div>


                    <div class="row px-3">
                        @foreach ($homeFeatures as $homeFeature)
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                <div class="icon_div d-flex align-items-center gap-2 mb-3">
                                    <img src="{{ asset('storage/app/' . $homeFeature->image_name) }}"
                                        alt="home feature icon">
                                    <h4 class="mb-0 text-light">{{ $homeFeature->heading }}</h4>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Features sec end -->

<div class="clearfix"></div>

<!-- =================================================== -->

<!-- dining start -->

<div class="container-fluid dining_sec">
    <div class="row align-items-center">
        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
            <div class="swiper mySwiper custom dining_slider">
                <div class="swiper-wrapper">
                    @if (!empty($diningContent->image1))
                        <div class="swiper-slide img_bg"
                            style="background-image: url({{ asset('storage/app/' . $diningContent->image1) }});">
                        </div>
                    @endif
                    @if (!empty($diningContent->image2))
                        <div class="swiper-slide img_bg"
                            style="background-image: url({{ asset('storage/app/' . $diningContent->image2) }});">
                        </div>
                    @endif
                    @if (!empty($diningContent->image3))
                        <div class="swiper-slide img_bg"
                            style="background-image: url({{ asset('storage/app/' . $diningContent->image3) }});">
                        </div>
                    @endif
                    @if (!empty($diningContent->image4))
                        <div class="swiper-slide img_bg"
                            style="background-image: url({{ asset('storage/app/' . $diningContent->image4) }});">
                        </div>
                    @endif
                    @if (!empty($diningContent->image5))
                        <div class="swiper-slide img_bg"
                            style="background-image: url({{ asset('storage/app/' . $diningContent->image5) }});">
                        </div>
                    @endif
                </div>
                <div class="swiper-pagination pagination"></div>

            </div>
        </div>

        <div class="col-xxl-5 col-xl-5 col-lg-8 col-md-12 col-sm-12 col-12">
            <p class="sub_heading" data-aos="fade-up">
                Dining at Goodwood Airport Hotel
            </p>
            <h2 data-aos="fade-down">
                {{ $diningContent->heading }}
            </h2>
            <div class="des_div">
                <p>
                    {!! $diningContent->description !!}
                </p>

                <button class="arrow_btn">

                    <span class="circle">
                        <span class="icon arrow">
                            <svg version="1.1" id="fi_664866" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                viewBox="0 0 512.009 512.009" style="enable-background:new 0 0 512.009 512.009;"
                                xml:space="preserve">
                                <g>
                                    <path
                                        d="M508.625,247.801L508.625,247.801L392.262,131.437c-4.18-4.881-11.526-5.45-16.407-1.269
                        c-4.881,4.18-5.45,11.526-1.269,16.407c0.39,0.455,0.814,0.88,1.269,1.269l96.465,96.582H11.636C5.21,244.426,0,249.636,0,256.063
                        s5.21,11.636,11.636,11.636H472.32l-96.465,96.465c-4.881,4.18-5.45,11.526-1.269,16.407s11.526,5.45,16.407,1.269
                        c0.455-0.39,0.88-0.814,1.269-1.269l116.364-116.364C513.137,259.67,513.137,252.34,508.625,247.801z">
                                    </path>
                                </g>
                            </svg>
                        </span>
                    </span>

                    <span class="arrow_btn_text">
                        <p>explore more</p>
                    </span>

                </button>
            </div>
        </div>

        <div class="col-xxl-3 col-xl-3 d-none d-xl-block position-relative" data-speed="0.95">
            <div class="dining_img img_bg"
                style="background-image: url({{ asset('storage/app/' . $diningContent->image6) }});"></div>
            <img src="{{ asset('public/frontend/images/circle.png') }}" alt="" class="dining_circle">
        </div>
    </div>
</div>


<!-- dining end -->

<div class="clearfix"></div>

<!-- =================================================== -->

<!-- wedding start -->
<div class="container">
    <div class="row">
        <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12 img_bg"
            style="background-image: url({{ asset('storage/app/' . $venueContent->image) }}); border-radius: 10px;">
        </div>

        <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12 py-5 ps-4">
            <p class="sub_heading" data-aos="fade-up">
                Venues
            </p>
            <h2 data-aos="fade-down">
                {{ $venueContent->heading }}
            </h2>
            <div class="des_div">
                <div class="read-more mb-3" style="--line-clamp: 8">
                    <input id="read-more-venue" type="checkbox" class="read-more__checkbox" aria-hidden="true">
                    <div class="read-more__text mb-2">
                        {!! $venueContent->description !!}

                    </div>
                    <input id="read-more-venue" type="checkbox" class="read-more__checkbox shadow-none"
                        aria-hidden="true">
                    <label for="read-more-venue" class="read-more__label" data-read-more="Read more"
                        data-read-less="See less" aria-hidden="true"></label>
                </div>

                <a href="wedding.html">
                    <button class="arrow_btn">

                        <span class="circle">
                            <span class="icon arrow">
                                <svg version="1.1" id="fi_664866" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                    viewBox="0 0 512.009 512.009" style="enable-background:new 0 0 512.009 512.009;"
                                    xml:space="preserve">
                                    <g>
                                        <g>
                                            <path
                                                d="M508.625,247.801L508.625,247.801L392.262,131.437c-4.18-4.881-11.526-5.45-16.407-1.269
                            c-4.881,4.18-5.45,11.526-1.269,16.407c0.39,0.455,0.814,0.88,1.269,1.269l96.465,96.582H11.636C5.21,244.426,0,249.636,0,256.063
                            s5.21,11.636,11.636,11.636H472.32l-96.465,96.465c-4.881,4.18-5.45,11.526-1.269,16.407s11.526,5.45,16.407,1.269
                            c0.455-0.39,0.88-0.814,1.269-1.269l116.364-116.364C513.137,259.67,513.137,252.34,508.625,247.801z">
                                            </path>
                                        </g>
                                    </g>
                                </svg>
                            </span>
                        </span>

                        <span class="arrow_btn_text">
                            <p>explore more</p>
                        </span>

                    </button>
                </a>

            </div>

        </div>
    </div>
</div>
<!-- wedding end -->

<div class="clearfix"></div>

<!-- =================================================== -->

<!-- location start -->

<div class="container-fluid location_bg sec_padding">
    <div class="container">

        <div class="row">
            <p class="sub_heading" data-aos="fade-up">
                Location
            </p>
            <h2 data-aos="fade-down">
                {{ $locationContent->heading }}
            </h2>
            <div class="des_div">
                <p>
                    {!! $locationContent->description !!}
                </p>

                <a href="location.html">
                    <button class="arrow_btn">

                        <span class="circle">
                            <span class="icon arrow">
                                <svg version="1.1" id="fi_664866" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                    viewBox="0 0 512.009 512.009" style="enable-background:new 0 0 512.009 512.009;"
                                    xml:space="preserve">
                                    <g>
                                        <path
                                            d="M508.625,247.801L508.625,247.801L392.262,131.437c-4.18-4.881-11.526-5.45-16.407-1.269
                          c-4.881,4.18-5.45,11.526-1.269,16.407c0.39,0.455,0.814,0.88,1.269,1.269l96.465,96.582H11.636C5.21,244.426,0,249.636,0,256.063
                          s5.21,11.636,11.636,11.636H472.32l-96.465,96.465c-4.881,4.18-5.45,11.526-1.269,16.407s11.526,5.45,16.407,1.269
                          c0.455-0.39,0.88-0.814,1.269-1.269l116.364-116.364C513.137,259.67,513.137,252.34,508.625,247.801z">
                                        </path>
                                    </g>
                                </svg>
                            </span>
                        </span>

                        <span class="arrow_btn_text">
                            <p>explore more</p>
                        </span>

                    </button>
                </a>

            </div>
        </div>

        <!-- slider -->
        <div class="row mt-5">
            <div class="owl-carousel owl-theme expe_owl">
                @foreach ($locationList as $location)
                    <div class="item expe_card"
                        style="background-image: url({{ asset('storage/app/' . $location->home_image) }});">
                        <div class="expe_box">
                            <h4 class="fw-bold">{{ $location->location_name }}</h4>
                            <p class="mt-2">
                                {{ \Illuminate\Support\Str::words(strip_tags($location->description), 25, '...') }}</p>



                            <button class="arrow_btn">

                                <span class="circle">
                                    <span class="icon arrow">
                                        <svg version="1.1" id="fi_664866" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                            viewBox="0 0 512.009 512.009"
                                            style="enable-background:new 0 0 512.009 512.009;" xml:space="preserve">
                                            <g>
                                                <path
                                                    d="M508.625,247.801L508.625,247.801L392.262,131.437c-4.18-4.881-11.526-5.45-16.407-1.269
                              c-4.881,4.18-5.45,11.526-1.269,16.407c0.39,0.455,0.814,0.88,1.269,1.269l96.465,96.582H11.636C5.21,244.426,0,249.636,0,256.063
                              s5.21,11.636,11.636,11.636H472.32l-96.465,96.465c-4.881,4.18-5.45,11.526-1.269,16.407s11.526,5.45,16.407,1.269
                              c0.455-0.39,0.88-0.814,1.269-1.269l116.364-116.364C513.137,259.67,513.137,252.34,508.625,247.801z">
                                                </path>
                                            </g>
                                        </svg>
                                    </span>
                                </span>

                                <span class="arrow_btn_text">
                                    <p>explore more</p>
                                </span>

                            </button>

                        </div>
                    </div>
                @endforeach

            </div>
        </div>
        <!-- slider -->

    </div>
</div>

<!-- location end -->

<div class="clearfix"></div>

<!-- =================================================== -->

<!-- Testimonials start -->

<div class="container sec_padding">
    <div class="row justify-content-end">
        <div class="col-xxl-11 col-xl-11 col-lg-12 col-md-12 col-sm-12 col-12 pe-4 sec_padding testi_col">
            <div class="row justify-content-center">
                <div class="col-10">
                    <p class="sub_heading" data-aos="fade-up">
                        Testimonials
                    </p>
                    <h2 class="text-light" data-aos="fade-down">
                        What our customers says
                    </h2>

                    <!-- testi slider -->
                    <div id="carouselExampleCaptions1" class="carousel slide" data-bs-ride="carousel"
                        data-speed="0.95" style="position: relative; z-index: 1;">
                        <div class="carousel-indicators" style="left: 0;">
                            @foreach ($testimonials as $index => $testimonial)
                                @php
                                    $isActive = $index === 0;
                                @endphp
                                @if ($isActive)
                                    <button type="button" data-bs-target="#carouselExampleCaptions1"
                                        data-bs-slide-to="{{ $index }}" class="active" aria-current="true"
                                        aria-label="Slide {{ $index + 1 }}"></button>
                                @else
                                    <button type="button" data-bs-target="#carouselExampleCaptions1"
                                        data-bs-slide-to="{{ $index }}"
                                        aria-label="Slide {{ $index + 1 }}"></button>
                                @endif
                            @endforeach
                        </div>

                        <div class="carousel-inner">
                            @foreach ($testimonials as $index => $testimonial)
                                @php
                                    $isActive = $index === 0;
                                @endphp
                                @if ($isActive)
                                    <div class="carousel-item active testi_slide">
                                        <div class="testi_caption">
                                            <img src="public/frontend/images/testi_icon.png" alt="">
                                            <p>{!! $testimonial->testimonial !!}</p>

                                            <div class="d-flex justify-content-end mt-3">
                                                <h4>{{ $testimonial->name }}</h4>
                                            </div>
                                        </div>
                                    </div>
                                @else
                                    <div class="carousel-item testi_slide">
                                        <div class="testi_caption">
                                            <img src="public/frontend/images/testi_icon.png" alt="">
                                            <p>{!! $testimonial->testimonial !!}</p>

                                            <div class="d-flex justify-content-end mt-3">
                                                <h4>{{ $testimonial->name }}</h4>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                    <!-- testi slider -->

                </div>
            </div>

            <img src="public/frontend/images/circle.png" alt="" class="testi_circle">
        </div>
    </div>
</div>

<!-- Testimonials end -->

<!-- ================================================== -->
<!-- ================================================== -->
<!-- ================================================== -->






</body>

</html>

@include('frontend.includes.footer')
