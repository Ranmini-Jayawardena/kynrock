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
                     {{$aboutUsContent->title1}}
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
                 <h2>{{$aboutUsContent->title2}}</h2>
                 {!! $aboutUsContent->content2 !!}

                 <div class="row">
                     <div class="col-12 mb-3">
                         <div class="d-flex gap-3 icon_div">
                             <div class="img_div">
                                 <img src="{{('storage/app/' .$aboutUsContent->feature_icon1)}}" alt="feature icon">
                             </div>
                             <div>
                                 <h5 class="mb-1">{{$aboutUsContent->feature_name1}}</h5>
                                 <p>{{$aboutUsContent->feature_description1}}</p>
                             </div>

                         </div>
                     </div>

                     <!-- ============== -->

                     <div class="col-12 mb-3">
                         <div class="d-flex gap-3 icon_div">
                             <div class="img_div">
                                 <img src="{{('storage/app/' .$aboutUsContent->feature_icon2)}}" alt="feature icon">
                             </div>
                             <div>
                                 <h5 class="mb-1">{{$aboutUsContent->feature_name2}}</h5>
                                 <p>{{$aboutUsContent->feature_description2}}
                                 </p>
                             </div>

                         </div>
                     </div>

                     <!-- ============== -->

                     <div class="col-12 mb-3">
                         <div class="d-flex gap-3 icon_div">
                             <div class="img_div">
                                 <img src="{{('storage/app/' .$aboutUsContent->feature_icon3)}}" alt="feature icon">
                             </div>
                             <div>
                                 <h5 class="mb-1">{{$aboutUsContent->feature_name3}}</h5>
                                 <p>{{$aboutUsContent->feature_description3}}</p>
                             </div>

                         </div>
                     </div>

                     <!-- ============== -->

                     <div class="col-12 mb-3">
                         <div class="d-flex gap-3 icon_div">
                             <div class="img_div">
                                 <img src="{{('storage/app/' .$aboutUsContent->feature_icon4)}}" alt="feature icon">
                             </div>
                             <div>
                                 <h5 class="mb-1">{{$aboutUsContent->feature_name4}}</h5>
                                 <p>{{$aboutUsContent->feature_description4}}</p>
                             </div>

                         </div>
                     </div>

                     <!-- ============== -->

                     <div class="col-12 mb-3">
                         <div class="d-flex gap-3 icon_div">
                             <div class="img_div">
                                 <img src="{{('storage/app/' .$aboutUsContent->feature_icon5)}}" alt="feature icon">
                             </div>
                             <div>
                                 <h5 class="mb-1">{{$aboutUsContent->feature_name5}}</h5>
                                 <p>{{$aboutUsContent->feature_description5}}</p>
                             </div>

                         </div>
                     </div>

                     <!-- ============== -->

                 </div>
             </div>
         </div>

         <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12 position-absolute end-0">
             <img src="images/about_img.jpg" alt="" class="w-100 rounded-3 wedding_img">
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
                     <div class="swiper-slide img_bg" style="background-image: url(images/food1.jpg);"></div>
                     <div class="swiper-slide img_bg" style="background-image: url(images/food1.jpg);"></div>
                     <div class="swiper-slide img_bg" style="background-image: url(images/food1.jpg);"></div>
                     <div class="swiper-slide img_bg" style="background-image: url(images/food1.jpg);"></div>
                 </div>
                 <div class="swiper-pagination pagination"></div>

             </div>
         </div>

         <div class="col-xxl-5 col-xl-5 col-lg-8 col-md-12 col-sm-12 col-12">
             <h2 data-aos="fade-up">
                 A CULINARY JOURNEY LIKE NO OTHER
             </h2>
             <div class="des_div">
                 <p>
                     Dining at Goodwood Airport Hotel is an experience in itself, with a variety of culinary delights
                     catering to diverse tastes. The authentic Indian restaurant serves rich and flavorful Indian
                     dishes, prepared with a perfect blend of spices and traditional cooking techniques. The à la carte
                     restaurant offers an exquisite selection of Sri Lankan, Asian, and international cuisine, ensuring
                     that every guest finds something to satisfy their palate. For those looking to enjoy a more relaxed
                     setting, the poolside bar and the charming beer garden provide the perfect ambiance to unwind with
                     a refreshing drink while soaking in the serene surroundings.
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
             <div class="dining_img img_bg" style="background-image: url(images/food2.jpg);"></div>
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
                         Host Grand Events, Weddings & Celebrations
                     </h2>
                     <div class="des_div">
                         <h5 class="fw-bold text-light mb-2">CHOOSING THE RIGHT VENUE IS KEY TO SETTING THE PERFECT
                             TONE FOR YOUR BIG DAY, AND AT GOODWOOD AIRPORT HOTEL, WE OFFER A VARIETY OF STUNNING
                             OPTIONS THAT CATER TO YOUR UNIQUE STYLE.</h5>
                         <p class="text-light">
                             Goodwood Airport Hotel is not only a haven for travelers but also an exceptional venue for
                             hosting unforgettable events. The elegant banquet hall provides the perfect setting for
                             weddings, engagements, anniversaries, and private parties, with customizable décor and
                             professional event planning services ensuring that every occasion is truly special. For
                             couples looking to celebrate their wedding in a breathtaking outdoor setting, the hotel’s
                             beautifully landscaped gardens create a romantic backdrop for an unforgettable ceremony.
                             Whether planning an intimate gathering or a grand reception, the hotel’s dedicated team
                             ensures that every detail is flawlessly executed.
                             <br><br>
                             In addition to weddings and social events, Goodwood Airport Hotel is also an ideal location
                             for corporate conferences and business meetings. Equipped with modern facilities and
                             offering a professional and sophisticated environment, the conference hall is perfect for
                             business gatherings, training sessions, and corporate functions. With personalized catering
                             options and seamless service, every event held at the hotel is guaranteed to be a success.
                         </p>

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
                     <button type="button" data-bs-target="#carouselExampleCaptions5" data-bs-slide-to="0"
                         class="active" aria-current="true" aria-label="Slide 1"></button>
                     <button type="button" data-bs-target="#carouselExampleCaptions5" data-bs-slide-to="1"
                         aria-label="Slide 2"></button>
                     <button type="button" data-bs-target="#carouselExampleCaptions5" data-bs-slide-to="2"
                         aria-label="Slide 3"></button>
                     <button type="button" data-bs-target="#carouselExampleCaptions5" data-bs-slide-to="3"
                         aria-label="Slide 4"></button>
                     <button type="button" data-bs-target="#carouselExampleCaptions5" data-bs-slide-to="4"
                         aria-label="Slide 5"></button>
                     <button type="button" data-bs-target="#carouselExampleCaptions5" data-bs-slide-to="5"
                         aria-label="Slide 6"></button>
                 </div>
                 <div class="carousel-inner">
                     <div class="carousel-item img_bg active" style="background-image: url(images/pool_venue.jpg);">
                         <div class="carousel-caption">
                             <div class="d-flex gap-3">
                                 <div class="img_div">
                                     <img src="images/icons/pool_venue.png" alt="">
                                 </div>
                                 <div>
                                     <h3 class="mb-1">Poolside Venue</h3>
                                     <p>Stunning outdoor setting for up to <b>300 guests.</b></p>
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

                     <div class="carousel-item img_bg" style="background-image: url(images/banquet.jpg);">
                         <div class="carousel-caption">
                             <div class="d-flex gap-3">
                                 <div class="img_div">
                                     <img src="images/icons/venue_banquet.png" alt="">
                                 </div>
                                 <div>
                                     <h3 class="mb-1">BANQUET HALL</h3>
                                     <p>Elegant indoor space for <b>60 guests</b> with an outdoor lounge for <b>25 more
                                             guests.</b></p>
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

                     <div class="carousel-item img_bg" style="background-image: url(images/u_shape.jpg);">
                         <div class="carousel-caption">
                             <div class="d-flex gap-3">
                                 <div class="img_div">
                                     <img src="images/chaicharm.png" alt="">
                                 </div>
                                 <div>
                                     <h3 class="mb-1">U-Shape Seating</h3>
                                     <p>Perfect for interactive gatherings, accommodating <b>40 guests.</b></p>
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

                     <div class="carousel-item img_bg" style="background-image: url(images/class_style.jpg);">
                         <div class="carousel-caption">
                             <div class="d-flex gap-3">
                                 <div class="img_div">
                                     <img src="images/icons/venue_classroom.png" alt="">
                                 </div>
                                 <div>
                                     <h3 class="mb-1">Classroom Style</h3>
                                     <p>Structured layout for <b>100 guests</b>, ideal for formal settings.</p>
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

                     <div class="carousel-item img_bg" style="background-image: url(images/theatre_style.jpg);">
                         <div class="carousel-caption">
                             <div class="d-flex gap-3">
                                 <div class="img_div">
                                     <img src="images/chaicharm.png" alt="">
                                 </div>
                                 <div>
                                     <h3 class="mb-1">Theatre Style</h3>
                                     <p>Grand arrangement for <b>150 guests</b>, perfect for large receptions.</p>
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

                     <div class="carousel-item img_bg" style="background-image: url(images/chai_charm.jpg);">
                         <div class="carousel-caption">
                             <div class="d-flex gap-3">
                                 <div class="img_div">
                                     <img src="images/icons/venue_meeting.png" alt="">
                                 </div>
                                 <div>
                                     <h3 class="mb-1">Mini Meeting Room</h3>
                                     <p>Exclusive <b>private space</b> for <b>25 guests</b>, ideal for pre-wedding
                                         events.</p>
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
             style="background-image: url(images/gateway_about.jpg); border-radius: 10px;">
         </div>

         <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12 py-5 ps-4">
             <h2 data-aos="fade-up">
                 THE GATEWAY TO SRI LANKA
             </h2>
             <div class="des_div">
                 <div class="read-more mb-3" style="--line-clamp: 8">
                     <input id="read-more-venue" type="checkbox" class="read-more__checkbox" aria-hidden="true">
                     <p class="read-more__text mb-2">Conveniently located near Bandaranaike International Airport,
                         Goodwood Airport Hotel is the perfect choice for travelers who value accessibility and comfort.
                         While it serves as a seamless transit point, the hotel’s location also allows guests to explore
                         some of Sri Lanka’s most popular attractions. Negombo Beach, just fifteen minutes away, offers
                         golden sands, stunning sunsets, and a vibrant seafood scene,making it a great spot for
                         relaxation and recreation. The historic Negombo Dutch Fort stands as a reminder of the
                         country’s colonial past, while the scenic Hamilton Canal provides an opportunity for boat rides
                         and kayaking through picturesque waterways. The renowned Angurukaramulla Temple, with its
                         beautifully painted murals and impressive Buddhist statues, is another must-visit site for
                         those interested in Sri Lanka’s rich cultural heritage.
                         <br><br>
                         With Colombo just a thirty-minute drive away, guests have the option to explore the bustling
                         capital city before returning to the comfort of the hotel. The ideal location ensures that
                         travelers can experience the best of Sri Lanka while staying close to the airport for a
                         hassle-free journey.
                     </p>
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

 <div class="container-fluid img_bg about_bottom_banner" style="background-image: url(images/about_com.jpg);">
 </div>

 <div class="container">
     <div class="row justify-content-end">
         <div class="col-xxl-6 col-xl-6 col-lg-8 col-md-12 col-sm-12 col-12">
             <div class="img_bg p-5 mb-5 about_bottom_text"
                 style="background-image: url(public/frontend/images/feat_bg.jpg);">
                 <h2 class="text-light" data-aos="fade-up">
                     Your Comfort, Our Priority
                 </h2>
                 <div class="des_div  ps-0">
                     <p class="mb-4 text-light">
                         At Goodwood Airport Hotel, every detail is carefully curated to enhance the guest experience.
                         With a strong commitment to hospitality, the hotel provides
                         round-the-clock airport transfers, ensuring that guests arrive and depart with ease. Express
                         check-in and check-out services make the process smooth and efficient, catering to the needs of
                         busy travelers. Luggage storage is available for those with late flights or early arrivals,
                         allowing them to explore the area without the burden of carrying bags.
                         <br>
                         <br>
                         The hotel’s serene swimming pool and lush green gardens offer the perfect retreat for
                         relaxation, providing a peaceful escape from the hustle and bustle of travel. The friendly and
                         professional staff are always ready to assist, ensuring that every guest enjoys a comfortable
                         and memorable stay. Whether visiting for a short layover, planning a dream wedding, or
                         organizing a business event, Goodwood Airport Hotel offers an experience that is both
                         convenient and exceptional.
                         <br>
                         <br>
                         Book your stay today and discover the perfect blend of elegance, comfort, and accessibility
                         just minutes from Bandaranaike International Airport.
                     </p>

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
