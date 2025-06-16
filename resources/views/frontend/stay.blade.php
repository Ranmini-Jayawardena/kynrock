@include('frontend.includes.header')

<div class="position-relative container-fluid inner_slider p-0">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active inner_main_img"
                style="background-image: linear-gradient(to bottom, rgb(0 0 0 / 30%), rgb(0 0 0 / 30%)), url({{ 'storage/app/' . $topBanner->banner_image }});">
                <h1 class="text-center bottom-0 position-absolute w-100 text-light">{{ strtoupper($topBanner->heading) }}
                </h1>
            </div>
        </div>
    </div>
</div>

<!-- main slider end -->

<!-- =================================================== -->
<!-- =================================================== -->

<!-- description start -->
<div class="container-fluid half_bg">
    <div class="container sec_padding">
        <div class="row justify-content-center">
            <div class="col-xxl-10 col-xl-10 col-lg-10 col-md-12 col-sm-12 col-12">
                <p class="sub_heading">
                    Stay at Goodwood Airport Hotel
                </p>
                <h2 data-aos="fade-up">
                    {{ $contents->heading_en }}
                </h2>

                <div class="des_div">
                    <div class="read-more mb-3" style="--line-clamp: 3">
                        <p class="read-more__text mb-2">
                            {!! $contents->description_en !!}
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- description end -->

<div class="clearfix"></div>

<!-- =================================================== -->

<!-- rooms start -->



<div class="container mt-n3">
    <div class="row">
        @foreach ($roomTypes as $room)
            @if (!empty($room->images) && count($room->images) > 0)
                <div class="col-xxl-8 col-xl-9 col-lg-10 col-md-12 col-sm-12 col-12 mb-5">
                    <div id="carouselExampleControls{{ $room->id }}" class="carousel slide detail_slide"
                        data-bs-ride="carousel">
                        <div class="carousel-inner">
                            @foreach ($room->images as $key => $image)
                                @if ($key == 0)
                                    <div class="carousel-item active"
                                        style="background-image: url({{ asset('storage/app/' . $image->image_name) }});">
                                    </div>
                                @else
                                    <div class="carousel-item"
                                        style="background-image: url({{ asset('storage/app/' . $image->image_name) }});">
                                    </div>
                                @endif
                            @endforeach
                        </div>

                        @if (count($room->images) > 1)
                            <button class="carousel-control-prev" type="button"
                                data-bs-target="#carouselExampleControls{{ $room->id }}" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button"
                                data-bs-target="#carouselExampleControls{{ $room->id }}" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        @endif

                        <div class="carousel-caption">
                            <div class="room-slider__img">
                                <h4><b>{{ strtoupper($room->home_title) }}</b></h4>
                                <p>{{ $room->home_content1 }}</p>

                                <div class="row">
                                    @foreach ($room->roomAmenities->take(6) as $amenityData)
                                        @if ($amenityData->feature)
                                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                                                <div class="icon_div d-flex mb-2 gap-2">
                                                    <img src="{{ asset('storage/app/' . $amenityData->feature->icon) }}"
                                                        alt="">
                                                    <p class="mb-0">{{ $amenityData->feature->amenties_name }}</p>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>

                                <h5 class="fw-bold fst-italic mt-4">{{ $room->home_content2 }}</h5>

                                <div class="d-flex justify-content-end pe-5">
                                    <a href="{{ url('room-details/' . $room->meta_title) }}">
                                        <button class="arrow_btn">
                                            <span class="circle">
                                                <span class="icon arrow">
                                                    <svg version="1.1" id="fi_664866"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                        viewBox="0 0 512.009 512.009"
                                                        style="enable-background:new 0 0 512.009 512.009;"
                                                        xml:space="preserve">
                                                        <path
                                                            d="M508.625,247.801L508.625,247.801L392.262,131.437c-4.18-4.881-11.526-5.45-16.407-1.269 c-4.881,4.18-5.45,11.526-1.269,16.407c0.39,0.455,0.814,0.88,1.269,1.269l96.465,96.582H11.636C5.21,244.426,0,249.636,0,256.063 s5.21,11.636,11.636,11.636H472.32l-96.465,96.465c-4.881,4.18-5.45,11.526-1.269,16.407s11.526,5.45,16.407,1.269 c0.455-0.39,0.88-0.814,1.269-1.269l116.364-116.364C513.137,259.67,513.137,252.34,508.625,247.801z">
                                                        </path>
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
                    </div>
                </div>
            @endif
        @endforeach
    </div>
</div>

<!-- rooms end -->

<div class="clearfix"></div>

<!-- =================================================== -->

<!-- Features section start -->

<div class="container-fluid gray_left_bg position-relative" style="margin-top: 100px;">
    <div class="row align-items-center position-relative" style="z-index: 4;">

        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12" data-speed="1.2">
            <div class="swiper custom mt-n3 pb-5">
                <div class="swiper-wrapper">
                    <div class="swiper-slide img_bg"
                        style="background-image: url({{ asset('storage/app/' . $contents->image) }});"></div>
                </div>

            </div>
        </div>

        <div class="col-xxl-7 col-xl-7 col-lg-8 col-md-12 col-sm-12 col-12">
            <h2 data-aos="fade-up">
                {{ $contents->heading2 }}
            </h2>
            <div class="des_div">
                @if (!empty($contents->description2))
                    {!! $contents->description2 !!}
                @endif

                <div class="row mt-4">
                    <div class="col-10">
                        {!! $contents->description3 !!}
                    </div>
                </div>

            </div>
        </div>

    </div>

    <div class="col-3 position-absolute bottom-0 end-0">
        <img src="public/frontend/images/half_bg_img.png" alt="" class="w-100">
    </div>
</div>

<!-- Features section end -->

<div class="clearfix"></div>
@include('frontend.includes.footer')
<!-- ================================================== -->
<!-- ================================================== -->
<!-- ================================================== -->
