@include('frontend.includes.header')

<div class="position-relative container-fluid inner_slider room_detail_banner  p-0 inner_main_img d-flex align-items-end"
    style="background-image: linear-gradient(to bottom, rgb(0 0 0 / 30%), rgb(0 0 0 / 30%)), url({{ asset('storage/app/' . $topBanner->banner_image) }});">
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-xxl-10 col-xl-11 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="mb-3">
                    <h1 class="text-center text-light">{{ strtoupper($roomDetails->room_name) }}</h1>
                </div>
            </div>

            <div class="col-xxl-10 col-xl-11 col-lg-12 col-md-12 col-sm-12 col-12 search_bar_col mb-3">
                <div class="d-flex flex-direction-row flex-wrap justify-content-center gap-5 search_row">

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

                    <div class="flex-fill">
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

<!-- main slider end -->

<!-- =================================================== -->
<!-- =================================================== -->

<div class="container-fluid position-relative sec_padding">

    <!-- detail start -->
    <div class="container mb-5">
        <div class="row justify-content-center">
            <div class="col-xxl-10 col-xl-10 col-lg-10 col-md-12 col-sm-12 col-12">
                <div class="gallery">
                    <div class="swiper-container gallery-slider">
                        <div class="swiper-wrapper">
                            @foreach ($roomDetails->images as $image)
                                <div class="swiper-slide img_bg"
                                    style="background-image: url({{ asset('storage/app/' . $image->image_name) }});">
                                </div>
                            @endforeach
                        </div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>

                    <div class="swiper-container gallery-thumbs">
                        <div class="swiper-wrapper">
                            @foreach ($roomDetails->images as $image)
                                <div class="swiper-slide img_bg"
                                    style="background-image: url({{ asset('storage/app/' . $image->image_name) }});">
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- detail end -->

    <div class="clearfix"></div>

    <!-- =================================================== -->

    <div class="container mb-5">
        <div class="row justify-content-center">
            <div class="col-10">

                <div class="row">
                    @foreach ($roomDetails->roomFeatures as $featureData)
                        @if ($featureData->feature)
                            <div class="col-3 mb-1">
                                <div class="d-flex gap-3 icon_div align-items-center">
                                    <div class="img_div">
                                        <img src="{{ asset('storage/app/' . $featureData->feature->icon) }}"
                                            alt="icon">
                                    </div>
                                    <div>
                                        <h5 class="mb-0">{{ $featureData->feature->feature_name }}</h5>
                                    </div>

                                </div>

                            </div>
                        @endif
                    @endforeach
                </div>

                <hr>

                <div class="room_detail mb-5">
                    <h4 class="mb-3">{{ $roomDetails->title }}</h4>

                    <p>{!! $roomDetails->description_en !!}
                    </p>
                </div>

                <div class="bg-light p-4 rounded-3">
                    <h4><b>ROOM AMENITIES</b></h4>

                    <div class="row">
                        @foreach ($roomDetails->roomAmenities as $amenityData)
                            @if ($amenityData->feature)
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                                    <div class="icon_div d-flex mb-2 gap-2">
                                        <img src="{{ asset('storage/app/' . $amenityData->feature->icon) }}"
                                            alt="">
                                        <p class="mb-0">{{ $amenityData->feature->amenties_name }}</p>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>

                    <h5 class="fw-bold fst-italic mt-4">{{$roomDetails->home_content2}}</h5>

                </div>

            </div>
        </div>
    </div>

    <div class="clearfix"></div>

    <!-- =================================================== -->

    <div class="col-3 position-absolute bottom-0 end-0" style="z-index: -1;">
        <img src="public/frontend/images/half_bg_img.png" alt="" class="w-100">
    </div>
</div>



<!-- =================================================== -->

<!-- contact form start -->

<div class="container-fluid img_bg feat_sec mt-0" data-speed="0.9"
    style="background-image: url({{asset('storage/app/' .$bottomBanner->banner_image)}}); position: relative; z-index: -1;">
</div>

<div class="container">
    <div class="row justify-content-end">
        <div class="col-xxl-6 col-xl-6 col-lg-8 col-md-12 col-sm-12 col-12">
            <div class="img_bg p-5 feat_text"
                style="border-radius: 10px; background-image: url(../public/frontend/images/feat_bg.jpg);">
                <h2 class="text-light" data-aos="fade-up">
                    Get in touch with us
                </h2>
                <div class="des_div  ps-0">
                    <p class="mb-2 text-light">
                        Contact us today to schedule a venue tour, discuss your wedding package, or start planning your
                        special
                        day.
                    </p>

                   @if ($message = Session::get('error'))
                         <div class="alert alert-danger">
                             <p>{{ $message }}</p>
                         </div>
                     @endif
                     @if ($message = Session::get('success'))
                         <div class="alert alert-success">
                             <p>{{ $message }}</p>
                         </div>
                     @endif
                     <form id="inquiry_form" name="inquiry_form" action="{{ route('new-enquiry') }}"
                         enctype="multipart/form-data" method="post" class="smart-form inquiry_form">
                         @csrf
                         <div class="row">
                             <div class="col-6">
                                 <div class="form-floating contact_form mb-3">
                                     <input type="text" class="form-control" id="full_name" name="full_name" required
                                         placeholder="Name">
                                     <label for="full_name">Name</label>
                                 </div>
                             </div>

                             <div class="col-6">
                                 <div class="form-floating contact_form mb-3">
                                     <input type="text" class="form-control" id="tel" name="tel"
                                         placeholder="Mobile Number" required pattern="\d{10}"
                                         oninvalid="this.setCustomValidity('Mobile number must be exactly 10 digits.')"
                                         oninput="this.setCustomValidity('')">
                                     <label for="tel">Mobile Number</label>
                                 </div>
                             </div>

                             <div class="col-6">
                                 <div class="form-floating contact_form mb-3">
                                     <input type="email" class="form-control" id="email" name="email"
                                         placeholder="Email Address" required>
                                     <label for="email">Email Address</label>
                                 </div>
                             </div>

                             <div class="col-6">
                                 <div class="form-floating contact_form mb-3">
                                     <input type="text" class="form-control" id="subject" name="subject"
                                         required placeholder="Subject">
                                     <label for="subject">Subject</label>
                                 </div>
                             </div>

                             <div class="col-12">
                                 <div class="form-floating contact_form mb-3">
                                     <textarea class="form-control" placeholder="Message" name="message" id="message" rows="5" required
                                         spellcheck="false"></textarea>
                                     <label for="message">Message</label>
                                 </div>
                             </div>

                             <div class="col-12 mt-3">
                                 <button class="arrow_btn yellow_btn button" type="submit">

                                     <span class="circle">
                                         <span class="icon arrow">
                                             <svg version="1.1" id="fi_664866" xmlns="http://www.w3.org/2000/svg"
                                                 xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                 viewBox="0 0 512.009 512.009"
                                                 style="enable-background:new 0 0 512.009 512.009;"
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
                     </form>

                </div>
            </div>
        </div>
    </div>
</div>
@include('frontend.includes.footer')
<!-- contact form end -->
