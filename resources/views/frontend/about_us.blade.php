 @include('frontend.includes.header')

 <div class="position-relative container-fluid inner_slider p-0">
     <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
         <div class="carousel-inner">
             <div class="carousel-item active inner_main_img"
                 style="background-image: linear-gradient(to bottom, rgb(0 0 0 / 30%), rgb(0 0 0 / 30%)), url({{ asset('storage/app/' . $topBanner->banner_image) }})">
                 <h1 class="text-center bottom-0 position-absolute w-100 text-light">
                     {{ strtoupper($topBanner->heading) }}
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
         <div class="row">
             <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12">
                 <p class="sub_heading">
                     Goodwood Airport Hotel
                 </p>
                 <h2 data-aos="fade-up">
                     {{ $aboutUsContent->title1 }}
                 </h2>

                 <div class="des_div">
                     <div class="mb-5">
                         {!! $aboutUsContent->content1 !!}</div>
                 </div>
             </div>
         </div>
     </div>
 </div>

 <div class="container mt-n5 mb-5">
     <div class="row position-relative">

         <div class="offset-1 col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12" style="z-index: 1;">
             <div class="img_bg p-5 rounded-3 mt-3" style="background-image: url(public/frontend/images/light_bg.jpg);"
                 data-speed="0.9">
                 <h2>{{ $aboutUsContent->title2 }}</h2>
                 {!! $aboutUsContent->content2 !!}

                 <div class="row">
                     <div class="col-12 mb-3">
                         <div class="d-flex gap-3 icon_div">
                             <div class="img_div">
                                 <img src="{{ 'storage/app/' . $aboutUsContent->feature_icon1 }}" alt="feature icon">
                             </div>
                             <div>
                                 <h5 class="mb-1">{{ $aboutUsContent->feature_name1 }}</h5>
                                 <p>{{ $aboutUsContent->feature_description1 }}</p>
                             </div>

                         </div>
                     </div>

                     <!-- ============== -->

                     <div class="col-12 mb-3">
                         <div class="d-flex gap-3 icon_div">
                             <div class="img_div">
                                 <img src="{{ 'storage/app/' . $aboutUsContent->feature_icon2 }}" alt="feature icon">
                             </div>
                             <div>
                                 <h5 class="mb-1">{{ $aboutUsContent->feature_name2 }}</h5>
                                 <p>{{ $aboutUsContent->feature_description2 }}
                                 </p>
                             </div>

                         </div>
                     </div>

                     <!-- ============== -->

                     <div class="col-12 mb-3">
                         <div class="d-flex gap-3 icon_div">
                             <div class="img_div">
                                 <img src="{{ 'storage/app/' . $aboutUsContent->feature_icon3 }}" alt="feature icon">
                             </div>
                             <div>
                                 <h5 class="mb-1">{{ $aboutUsContent->feature_name3 }}</h5>
                                 <p>{{ $aboutUsContent->feature_description3 }}</p>
                             </div>

                         </div>
                     </div>

                     <!-- ============== -->

                     <div class="col-12 mb-3">
                         <div class="d-flex gap-3 icon_div">
                             <div class="img_div">
                                 <img src="{{ 'storage/app/' . $aboutUsContent->feature_icon4 }}" alt="feature icon">
                             </div>
                             <div>
                                 <h5 class="mb-1">{{ $aboutUsContent->feature_name4 }}</h5>
                                 <p>{{ $aboutUsContent->feature_description4 }}</p>
                             </div>

                         </div>
                     </div>

                     <!-- ============== -->

                     <div class="col-12 mb-3">
                         <div class="d-flex gap-3 icon_div">
                             <div class="img_div">
                                 <img src="{{ 'storage/app/' . $aboutUsContent->feature_icon5 }}" alt="feature icon">
                             </div>
                             <div>
                                 <h5 class="mb-1">{{ $aboutUsContent->feature_name5 }}</h5>
                                 <p>{{ $aboutUsContent->feature_description5 }}</p>
                             </div>

                         </div>
                     </div>

                     <!-- ============== -->

                 </div>
             </div>
         </div>

         <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12 position-absolute end-0">
             <img src="{{ asset('storage/app/' . $aboutUsContent->image1) }}" alt=""
                 class="w-100 rounded-3 wedding_img">
         </div>

     </div>
 </div>
 <!-- description end -->

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
             <h2 data-aos="fade-up">
                 {{ $diningContent->title }}
             </h2>
             <div class="des_div">
                 {!! $diningContent->description !!}

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
                 style="background-image: url({{ 'storage/app/' . $diningContent->image6 }});"></div>
             <img src="public/frontend/images/circle.png" alt="" class="dining_circle">
         </div>
     </div>
 </div>

 <!-- dining end -->

 <div class="clearfix"></div>

 <!-- =================================================== -->

 <!-- wedding section start -->
 <div class="container-fluide" style="margin-bottom: 80px; margin-top: 80px;">
     <div class="row">
         <div class="img_bg p-5 col-6"
             style="background-image: url(public/frontend/images/feat_bg.jpg); height: fit-content;">
             <div class="row justify-content-end py-4">
                 <div class="col-10">
                     <h2 class="text-light" data-aos="fade-up">
                         {{ $weddingContent->title1 }}
                     </h2>
                     <div class="des_div">
                         <h5 class="fw-bold text-light mb-2">{{ $weddingContent->title2 }}</h5>
                         <div class="text-light">
                             {!! $weddingContent->description !!}
                         </div>

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
                     </div>
                 </div>
             </div>
         </div>
         <div class="col-6 p-0">
             <div id="carouselExampleCaptions5" class="carousel slide venue_slider" data-bs-ride="carousel">
                 <div class="carousel-indicators">
                     @foreach ($weddingVenues as $index => $weddingVenue)
                         @php
                             $isActive = $index === 0;
                         @endphp
                         @if ($isActive)
                             <button type="button" data-bs-target="#carouselExampleCaptions5"
                                 data-bs-slide-to="{{ $index }}" class="active" aria-current="true"
                                 aria-label="Slide {{ $index + 1 }}"></button>
                         @else
                             <button type="button" data-bs-target="#carouselExampleCaptions5"
                                 data-bs-slide-to="{{ $index }}"
                                 aria-label="Slide {{ $index + 1 }}"></button>
                         @endif
                     @endforeach

                 </div>
                 <div class="carousel-inner">
                     @foreach ($weddingVenues as $index => $weddingVenue)
                         @php
                             $isActive = $index === 0;
                         @endphp
                         @if ($isActive)
                             <div class="carousel-item img_bg active"
                                 style="background-image: url({{ asset(
                                     'storage/app/' .
                                         optional(
                                             $weddingVenue->subCategory?->images->where('order', 1)->first() ??
                                                 $weddingVenue->subCategory?->images->first(),
                                         )->image_name,
                                 ) }})">
                                 <div class="carousel-caption">
                                     <div class="d-flex gap-3">
                                         <div class="img_div">
                                             <img src="{{ asset('storage/app/' . $weddingVenue->icon) }}"
                                                 alt="icon">
                                         </div>
                                         <div>
                                             <h3 class="mb-1">{{ $weddingVenue->subCategory->sub_category_name }}
                                             </h3>
                                             {!! $weddingVenue->description !!}
                                             <button class="arrow_btn">

                                                 <span class="circle">
                                                     <span class="icon arrow">
                                                         <svg version="1.1" id="fi_664866"
                                                             xmlns="http://www.w3.org/2000/svg"
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
                                                     <p>View images</p>
                                                 </span>

                                             </button>
                                         </div>

                                     </div>

                                 </div>
                             </div>
                         @else
                             <div class="carousel-item img_bg"
                                 style="background-image: url({{ asset(
                                     'storage/app/' .
                                         optional(
                                             $weddingVenue->subCategory?->images->where('order', 1)->first() ??
                                                 $weddingVenue->subCategory?->images->first(),
                                         )->image_name,
                                 ) }})">
                                 <div class="carousel-caption">
                                     <div class="d-flex gap-3">
                                         <div class="img_div">
                                             <img src="{{ asset('storage/app/' . $weddingVenue->icon) }}"
                                                 alt="">
                                         </div>
                                         <div>
                                             <h3 class="mb-1">{{ $weddingVenue->subCategory->sub_category_name }}
                                             </h3>
                                             {!! $weddingVenue->description !!}
                                             <button class="arrow_btn">

                                                 <span class="circle">
                                                     <span class="icon arrow">
                                                         <svg version="1.1" id="fi_664866"
                                                             xmlns="http://www.w3.org/2000/svg"
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

                                 </div>
                             </div>
                         @endif
                     @endforeach



                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- wedding section end -->

 <div class="clearfix"></div>

 <!-- =================================================== -->

 <!-- The Gateway to Sri Lanka start -->
 <div class="container">
     <div class="row">
         <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12 img_bg"
             style="background-image: url({{ asset('storage/app/' . $belowContent->location_image) }}); border-radius: 10px;">
         </div>

         <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12 py-5 ps-4">
             <h2 data-aos="fade-up">
                 {{ $belowContent->location_title }}
             </h2>
             <div class="des_div">
                 <div class="read-more mb-3" style="--line-clamp: 8">
                     <input id="read-more-venue" type="checkbox" class="read-more__checkbox" aria-hidden="true">
                     <div class="read-more__text mb-2">{!! $belowContent->location_description !!}
                     </div>
                     <input id="read-more-venue" type="checkbox" class="read-more__checkbox shadow-none"
                         aria-hidden="true">
                     <label for="read-more-venue" class="read-more__label" data-read-more="Read more"
                         data-read-less="See less" aria-hidden="true"></label>
                 </div>

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

             </div>

         </div>
     </div>
 </div>
 <!-- wThe Gateway to Sri Lanka end -->

 <div class="clearfix"></div>

 <!-- =================================================== -->

 <!-- Your Comfort, Our Priority start -->

 <div class="container-fluid img_bg about_bottom_banner"
     style="background-image: url({{ asset('storage/app/' . $belowContent->booknow_image) }});">
 </div>

 <div class="container">
     <div class="row justify-content-end">
         <div class="col-xxl-6 col-xl-6 col-lg-8 col-md-12 col-sm-12 col-12">
             <div class="img_bg p-5 mb-5 about_bottom_text"
                 style="background-image: url(public/frontend/images/feat_bg.jpg);">
                 <h2 class="text-light" data-aos="fade-up">
                     {{ $belowContent->booknow_title }}
                 </h2>
                 @php
                     use Illuminate\Support\Str;

                     $description = Str::of($belowContent->booknow_description)->replace('<p', '<p class="text-light"');
                 @endphp
                 <div class="des_div ps-0">
                     {!! $description !!}
                 </div>

                 <button class="arrow_btn yellow_btn button">

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
                         <p>BOOK now</p>
                     </span>

                 </button>

             </div>
         </div>
     </div>
 </div>
 </div>

 <!-- Your Comfort, Our Priority end -->

 @include('frontend.includes.footer')

 <!-- ================================================== -->
 <!-- ================================================== -->
 <!-- ================================================== -->
