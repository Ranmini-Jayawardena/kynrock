@include('frontend.includes.header')

<div class="position-relative container-fluid inner_slider p-0 mb-5">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active inner_main_img"
                style="background-image: linear-gradient(to bottom, rgb(0 0 0 / 30%), rgb(0 0 0 / 30%)), url({{ asset('storage/app/' . $topBanner->banner_image) }})">
                <h1 class="text-center bottom-0 position-absolute w-100 text-light">{{ strtoupper($topBanner->heading) }}</h1>
            </div>
        </div>
    </div>
</div>

<!-- main slider end -->

<!-- =================================================== -->
<!-- =================================================== -->

<!-- List start -->

<!-- description start -->
<div class="container mt-5">

    <div class="row">

        <div class="col-10 mt-2">

            <h2 data-aos="fade-up">
                Experience the Best of Goodwood Airport Hotel
            </h2>

            <div class="des_div">
                <p class="mb-5">
                    At Goodwood Airport Hotel, your stay is more than just comfort;it's an opportunity to explore,
                    discover, and immerse yourself in the rich history and stunning landscapes of Negombo. Whether
                    you're seeking adventure, relaxation, or cultural exploration, the surrounding attractions offer
                    unforgettable experiences just minutes away.
                </p>
            </div>
        </div>

    </div>
</div>
<!-- description end -->



<div class="container">
    <div class="row">
        @foreach ($experiences as $experience)
            <div class="col-8 mb-5">
                <div id="carouselExampleControls{{ $experience->id }}"
                    class="carousel slide detail_slide location_slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        @foreach ($experience->images as $index => $image)
                            @php
                                $isActive = $index === 0;
                            @endphp
                            @if ($isActive)
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

                    <div class="carousel-caption location_text">
                        <div class="room-slider__img">
                            <h2>{{ $experience->experience_name }}</h2>

                            <div class="read-more long_read_more" style="--line-clamp: 5" data-id="{{ $experience->id }}">
                                <input id="read-more-checkbox{{ $experience->id }}" type="checkbox"
                                    class="read-more__checkbox" aria-hidden="true">
                                <p>What You Can Do Here</p>
                                <div class="read-more__text mb-2">
                                    {!! $experience->description !!}
                                </div>
                               
                                <label for="read-more-checkbox{{ $experience->id }}" class="read-more__label" data-read-more="Read more"
                                    data-read-less="See less" aria-hidden="true"></label>

                                <p><i>{{ $experience->description2 }}</i></p>

                            </div>

                        </div>
                    </div>
                    @if(count($experience->images) > 1)
                    <button class="carousel-control-prev" type="button"
                        data-bs-target="#carouselExampleControls{{ $experience->id }}" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button"
                        data-bs-target="#carouselExampleControls{{ $experience->id }}" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                    @endif
                </div>
            </div>
        @endforeach
    </div>
</div>

<!-- List end -->

<div class="container-fluid gray_left_bg position-relative" style="margin-top: 100px;">
    <div class="row align-items-center position-relative mb-5" style="z-index: 4;">

        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 dining_slider pb-5" data-speed="1.2">
            <div class="swiper custom">
                <div class="swiper-wrapper">
                    <div class="swiper-slide img_bg" style="background-image: url({{asset('storage/app/' .$experienceContent->image)}});"></div>
                </div>

            </div>
        </div>

        <div class="col-xxl-7 col-xl-7 col-lg-8 col-md-12 col-sm-12 col-12">
            <h2 data-aos="fade-up">
                {{$experienceContent->heading}}
            </h2>
            <div class="des_div">
                

                <div class="row mt-4">
                    <div class="col-10">
                        {!! $experienceContent->description !!}
                    </div>
                </div>

            </div>
        </div>

    </div>

    <div class="col-3 position-absolute bottom-0 end-0">
        <img src="public/frontend/images/half_bg_img.png" alt="half_bg_img" class="w-100">
    </div>
</div>

<div class="clearfix"></div>
@include('frontend.includes.footer')

<script>
    document.addEventListener("DOMContentLoaded", function () {
        document.querySelectorAll(".read-more").forEach(function (readMoreBlock) {
            const text = readMoreBlock.querySelector(".read-more__text");
            const label = readMoreBlock.querySelector(".read-more__label");

            if (text.scrollHeight <= text.clientHeight) {
                label.style.display = "none"; // Hide 'Read more' if not overflowing
            }
        });
    });
</script>


<!-- ================================================== -->
<!-- ================================================== -->
<!-- ================================================== -->
