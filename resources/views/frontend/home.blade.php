@include('frontend.includes.header')

    <div class="position-relative container-fluid main_slider p-0">
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>

        <div class="carousel-inner">
          
          <div class="carousel-item active slider_img" style="background-image: linear-gradient(to bottom, rgb(0 0 0 / 30%), rgb(0 0 0 / 30%)), url(images/slider1.jpg)">
          </div>
  
          <!-- ============================== -->
  
          <div class="carousel-item slider_img" style="background-image: linear-gradient(to bottom, rgb(0 0 0 / 30%), rgb(0 0 0 / 30%)), url(images/slider2.jpg)">
          </div>

          <!-- ============================== -->
  
          <div class="carousel-item slider_img" style="background-image: linear-gradient(to bottom, rgb(0 0 0 / 30%), rgb(0 0 0 / 30%)), url(images/slider3.jpg)">
          </div>

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
                      <input type="text" class="datepicker_input form-control shadow-none datepicker-input" id="datepicker1" placeholder="DD/MM/YYYY">
                      <label for="datepicker1">Check In</label>
                      <i class="fa-solid fa-calendar-days"></i>
                    </div>
                  </div>
  
                  <div class="flex-fill r_line">
                    <div class="form-floating">
                      <input type="text" class="datepicker_input form-control shadow-none datepicker-input" id="datepicker1" placeholder="DD/MM/YYYY">
                      <label for="datepicker1">Check Out</label>
                      <i class="fa-solid fa-calendar-days"></i>
                    </div>
                  </div>
        
                  <div class="flex-fill r_line">
                    <div class="form-floating">
                      <select class="form-select shadow-none " id="floatingSelect" aria-label="Floating label select example">
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
                      <select class="form-select shadow-none" id="floatingSelect" aria-label="Floating label select example">
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
              An Oasis of Elegance and Comfort, Just Minutes from the Airport.
            </h2>

            <div class="des_div">
              <div class="read-more mb-3" style="--line-clamp: 3">
                <input id="read-more-checkbox" type="checkbox" class="read-more__checkbox" aria-hidden="true">
                <p class="read-more__text mb-2">Located just 5 minutes away from Bandaranaike International Airport, Goodwood Airport Hotel is an ideal choice for travelers seeking a quick and comfortable stay. Surrounded by greenery, close to the tranquil Negombo Lagoon, and just minutes from the picturesque Negombo Beach, the hotel blends natural beauty with convenience. Its location also offers easy access to Colombo, just about 30 minutes away, making it perfect for discovering the charm and vibrancy of the region.
                  <br><br>
                  With rooms designed for both short and extended stays, Goodwood caters to a wide range of needs. Each room is equipped with essential amenities, including Wi-Fi, air conditioning, and a safety locker, ensuring a hassle-free stay. Our dining options feature a mix of local and international cuisine, and our event spaces are suited for both intimate and grand celebrations.
                  <br><br>
                  Our hotel’s team is focused on providing an efficient, friendly service, ensuring that your stay is smooth and stress-free. Whether you are here for a brief stopover or a longer stay, Goodwood Airport Hotel offers a reliable and comfortable choice.</p>
                  <input id="read-more-checkbox" type="checkbox" class="read-more__checkbox shadow-none" aria-hidden="true">
                  <label for="read-more-checkbox" class="read-more__label" data-read-more="Read more" data-read-less="See less" aria-hidden="true"></label>
              </div>

              <a href="about_us.html">
                <button class="arrow_btn">
              
                  <span class="circle">
                    <span class="icon arrow">
                      <svg version="1.1" id="fi_664866" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        x="0px" y="0px" viewBox="0 0 512.009 512.009" style="enable-background:new 0 0 512.009 512.009;"
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
    
    <div class="container-fluid blue_bg_half sec_padding pb-0" >
      <div class="container">
        <div class="row">
          <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12">
            <p class="sub_heading" data-aos="fade-up">
              Welcome to Goodwood Airport Hotel
            </p>
            <h2 class="text-light" data-aos="fade-down">
              Choose Your Perfect Stay
            </h2>
            <div class="des_div">
              <p class="text-light">
                At Goodwood Airport Hotel, we take pride in offering beautifully designed rooms that blend comfort and charm. From balconies with stunning garden or pool views to rooms equipped with modern amenities, every detail is crafted to make your stay memorable. We also provide special room packages that combine luxury with affordability, ensuring a stay that is both relaxing and budget-friendly.
              </p>

              <a href="stay.html">
                <button class="arrow_btn light">

                  <span class="circle">
                    <span class="icon arrow">
                      <svg version="1.1" id="fi_664866" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512.009 512.009" style="enable-background:new 0 0 512.009 512.009;" xml:space="preserve">
                      <g>
                        <g>
                          <path d="M508.625,247.801L508.625,247.801L392.262,131.437c-4.18-4.881-11.526-5.45-16.407-1.269
                            c-4.881,4.18-5.45,11.526-1.269,16.407c0.39,0.455,0.814,0.88,1.269,1.269l96.465,96.582H11.636C5.21,244.426,0,249.636,0,256.063
                            s5.21,11.636,11.636,11.636H472.32l-96.465,96.465c-4.881,4.18-5.45,11.526-1.269,16.407s11.526,5.45,16.407,1.269
                            c0.455-0.39,0.88-0.814,1.269-1.269l116.364-116.364C513.137,259.67,513.137,252.34,508.625,247.801z"></path>
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
            <div class="room-slider" >
              <div class="room-slider__wrp swiper-wrapper">
                <div class="room-slider__item swiper-slide w-100"  style="background-image: url(images/room1.jpg); background-size: cover;">
        
                  <div class="room-slider__img">
                    <h4 class="fw-bold">SUPER DELUXE ROOMS</h4>
        
                    <p>Designed for ultimate comfort, our Super Deluxe Rooms offer spacious accommodation with essential amenities for a relaxing stay. </p>
                  
                    <div class="row">
                      <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                        <div class="icon_div d-flex mb-2 gap-2">
                          <img src="images/icon1.png" alt="">
                          <p class="mb-0">Mini Fridge</p>
                        </div>
                      </div> 
                      <!-- ===============  -->
                      <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                        <div class="icon_div d-flex mb-2 gap-2">
                          <img src="images/icons/tea.png" alt="">
                          <p class="mb-0">Tea/Coffee-Making</p>
                        </div>
                      </div>
                      <!-- =============== -->
                      <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                        <div class="icon_div d-flex mb-2 gap-2">
                          <img src="images/icons/ac.png" alt="">
                          <p class="mb-0">Air Conditioning</p>
                        </div>
                      </div>
                      <!-- =============== -->
                      <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                        <div class="icon_div d-flex mb-2 gap-2">
                          <img src="images/icons/bed.png" alt="">
                          <p class="mb-0">Twin, Double, and Triple Bed Options</p>
                        </div>
                      </div>
                      <!-- =============== -->
                      <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                        <div class="icon_div d-flex mb-2 gap-2">
                          <img src="images/icons/terrace.png" alt="">
                          <p class="mb-0">Private Terrace</p>
                        </div>
                      </div>
                      <!-- =============== -->
                      <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                        <div class="icon_div d-flex mb-2 gap-2">
                          <img src="images/icons/wifi.png" alt="">
                          <p class="mb-0">Free Wifi</p>
                        </div>
                      </div>
                      <!-- =============== -->
                    </div>
                  
                    <!-- <h5 class="fw-bold fst-italic mt-4">Ensuring a comfortable and worry-free experience.</h5> -->

                    <div class="d-flex justify-content-end pe-5">
                      <a href="room_detail.html">
                        <button class="arrow_btn">

                          <span class="circle">
                            <span class="icon arrow">
                              <svg version="1.1" id="fi_664866" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512.009 512.009" style="enable-background:new 0 0 512.009 512.009;" xml:space="preserve">
                                  <path d="M508.625,247.801L508.625,247.801L392.262,131.437c-4.18-4.881-11.526-5.45-16.407-1.269 c-4.881,4.18-5.45,11.526-1.269,16.407c0.39,0.455,0.814,0.88,1.269,1.269l96.465,96.582H11.636C5.21,244.426,0,249.636,0,256.063 s5.21,11.636,11.636,11.636H472.32l-96.465,96.465c-4.881,4.18-5.45,11.526-1.269,16.407s11.526,5.45,16.407,1.269 c0.455-0.39,0.88-0.814,1.269-1.269l116.364-116.364C513.137,259.67,513.137,252.34,508.625,247.801z">
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
            
                
                <div class="room-slider__item swiper-slide w-100"  style="background-image: url(images/room2.jpg); background-size: cover;">
                  <div class="room-slider__img">
                    <h4><b>DELUXE ROOMS</b></h4>
        
                    <p>Our Deluxe Rooms offer cozy and functional spaces, complete with all the necessary comforts.</p>
                  
                    <div class="row">
                      <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                        <div class="icon_div d-flex mb-2 gap-2">
                          <img src="images/icon1.png" alt="">
                          <p class="mb-0">Mini Fridge</p>
                        </div>
                      </div> 
                      <!-- ===============  -->
                      <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                        <div class="icon_div d-flex mb-2 gap-2">
                          <img src="images/icons/tea.png" alt="">
                          <p class="mb-0">Tea/Coffee-Making</p>
                        </div>
                      </div>
                      <!-- =============== -->
                      <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                        <div class="icon_div d-flex mb-2 gap-2">
                          <img src="images/icons/ac.png" alt="">
                          <p class="mb-0">Air Conditioning</p>
                        </div>
                      </div>
                      <!-- =============== -->
                      <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                        <div class="icon_div d-flex mb-2 gap-2">
                          <img src="images/icons/bed.png" alt="">
                          <p class="mb-0">Twin, Double, and Triple Bed Options</p>
                        </div>
                      </div>
                      <!-- =============== -->
                      <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                        <div class="icon_div d-flex mb-2 gap-2">
                          <img src="images/icons/terrace.png" alt="">
                          <p class="mb-0">Private Terrace</p>
                        </div>
                      </div>
                      <!-- =============== -->
                      <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                        <div class="icon_div d-flex mb-2 gap-2">
                          <img src="images/icons/wifi.png" alt="">
                          <p class="mb-0">Free Wifi</p>
                        </div>
                      </div>
                      <!-- =============== -->
                    </div>

                    <!-- <h5 class="fw-bold fst-italic mt-4">these rooms cater to various preferences, making them ideal for both solo travelers and groups</h5> -->

                    <div class="d-flex justify-content-end pe-5">
                      <a href="deluxe_room.html">
                        <button class="arrow_btn">

                        <span class="circle">
                          <span class="icon arrow">
                            <svg version="1.1" id="fi_664866" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512.009 512.009" style="enable-background:new 0 0 512.009 512.009;" xml:space="preserve">
                                <path d="M508.625,247.801L508.625,247.801L392.262,131.437c-4.18-4.881-11.526-5.45-16.407-1.269 c-4.881,4.18-5.45,11.526-1.269,16.407c0.39,0.455,0.814,0.88,1.269,1.269l96.465,96.582H11.636C5.21,244.426,0,249.636,0,256.063 s5.21,11.636,11.636,11.636H472.32l-96.465,96.465c-4.881,4.18-5.45,11.526-1.269,16.407s11.526,5.45,16.407,1.269 c0.455-0.39,0.88-0.814,1.269-1.269l116.364-116.364C513.137,259.67,513.137,252.34,508.625,247.801z">
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

    <div class="container-fluid img_bg feat_sec" data-speed="0.9" style="background-image: url(images/features_img.jpg); position: relative; z-index: -1;">
    </div>

     <div class="container" >
        <div class="row justify-content-end">
          <div class="col-xxl-6 col-xl-6 col-lg-8 col-md-12 col-sm-12 col-12">
            <div class="img_bg p-5 feat_text" style="border-radius: 10px; background-image: url(images/feat_bg.jpg);">
              <p class="sub_heading"  data-aos="fade-up">
                Features
              </p>
              <h2 class="text-light" data-aos="fade-down">
                Convenient Services for Your Stay
              </h2>
              <div class="des_div">
                <div class="read-more mb-3" style="--line-clamp: 3">
                  <input id="read-more-feature" type="checkbox" class="read-more__checkbox text-light" aria-hidden="true">
                  <p class="read-more__text mb-2 text-light">
                    At Goodwood Airport Hotel, we prioritize your convenience with services designed to enhance your stay. Take advantage of our seamless arrival experience and explore the area with personalized tours curated by our in-house team, ensuring a smooth and enjoyable time throughout your stay.
                    <br><br>
                    We offer a range of thoughtful services designed to enhance your stay, including room service, laundry, and secure left-luggage facilities. To ensure your travels are stress-free, we provide convenient airport pick-up and drop-off services, allowing you to focus on enjoying your trip. For added peace of mind, emergency medical assistance is available upon request, ensuring all your needs are addressed with care and efficiency throughout your stay
                  </p>
                    <input id="read-more-feature" type="checkbox" class="read-more__checkbox shadow-none" aria-hidden="true">
                    <label for="read-more-feature" class="read-more__label text-light" data-read-more="Read more" data-read-less="See less" aria-hidden="true"></label>
                </div>
     
                
                <div class="row px-3">
  
                  <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="icon_div d-flex align-items-center gap-2 mb-3">
                      <img src="images/icons/pool_w.png" alt="">
                      <h4 class="mb-0 text-light">Swimming pool</h4>
                    </div>
                  </div> 
  
                  <!-- ===============  -->
  
                  <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="icon_div d-flex align-items-center gap-2 mb-3">
                      <img src="images/icons/gym_w.png" alt="">
                      <h4 class="mb-0 text-light">Gym & yoga</h4>
                    </div>
                  </div> 
  
                  <!-- ===============  -->

                  <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="icon_div d-flex align-items-center gap-2 mb-3">
                      <img src="images/icons/spa_w.png" alt="">
                      <h4 class="mb-0 text-light">Spa & massage</h4>
                    </div>
                  </div> 
  
                  <!-- ===============  -->
  
                  <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="icon_div d-flex align-items-center gap-2 mb-3">
                      <img src="images/icons/transport_w.png" alt="">
                      <h4 class="mb-0 text-light">Airport shuttle</h4>
                    </div>
                  </div> 
  
                  <!-- ===============  -->

                  <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="icon_div d-flex align-items-center gap-2 mb-3">
                      <img src="images/icons/wifi_w.png" alt="">
                      <h4 class="mb-0 text-light">Free wifi</h4>
                    </div>
                  </div> 
  
                  <!-- ===============  -->
  
                  <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="icon_div d-flex align-items-center gap-2 mb-3">
                      <img src="images/icons/no_smoke_w.png" alt="">
                      <h4 class="mb-0 text-light">No Smoking Rooms</h4>
                    </div>
                  </div> 
  
                  <!-- ===============  -->

                  <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="icon_div d-flex align-items-center gap-2 mb-3">
                      <img src="images/icons/dining_w.png" alt="">
                      <h4 class="mb-0 text-light">On-site Dining</h4>
                    </div>
                  </div> 
  
                  <!-- ===============  -->
  
                  <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="icon_div d-flex align-items-center gap-2 mb-3">
                      <img src="images/icons/garden.png" alt="">
                      <h4 class="mb-0 text-light">Garden Area</h4>
                    </div>
                  </div> 
  
                  <!-- ===============  -->

                  <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="icon_div d-flex align-items-center gap-2">
                      <img src="images/icons/service_w.png" alt="">
                      <h4 class="mb-0 text-light">Room Service</h4>
                    </div>
                  </div> 
  
                  <!-- ===============  -->
  
                  <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="icon_div d-flex align-items-center gap-2">
                      <img src="images/icons/restaurant_w.png" alt="">
                      <h4 class="mb-0 text-light">Restaurant</h4>
                    </div>
                  </div> 
  
                  <!-- ===============  -->
                  
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
          <div class="swiper mySwiper custom dining_slider" >
            <div class="swiper-wrapper">
              <div class="swiper-slide img_bg" style="background-image: url(images/food1.jpg);"></div>
              <div class="swiper-slide img_bg" style="background-image: url(images/food1.jpg);"></div>
              <div class="swiper-slide img_bg" style="background-image: url(images/food1.jpg);"></div>
              <div class="swiper-slide img_bg" style="background-image: url(images/food1.jpg);"></div>
            </div>
            <div class="swiper-pagination pagination"></div>

          </div>
        </div>

        <div class="col-xxl-5 col-xl-5 col-lg-8 col-md-12 col-sm-12 col-12" >
          <p class="sub_heading" data-aos="fade-up">
            Dining at Goodwood Airport Hotel
          </p>
          <h2 data-aos="fade-down">
            Savor Every Moment
          </h2>
          <div class="des_div">
            <p>
              Ever craved a dining experience that perfectly balances convenience and unforgettable flavors? At Goodwood Airport Hotel, we understand the needs of travelers seeking both comfort and culinary delight.
              <br><br>
              Our Indian Restaurant brings the bold, aromatic flavors of authentic Indian cuisine to your plate, while the À la Carte Restaurant offers a curated selection of local and international favorites. Led by our skilled executive chef, every dish is crafted to perfection, ensuring a meal that’s as satisfying as it is memorable.Whether you’re catching an early flight or winding down after a journey, our dining options cater to your schedule without compromising on quality. A meal here is more than just food—it’s a refreshing pause in your travels.
            </p>

            <button class="arrow_btn">

              <span class="circle">
                <span class="icon arrow">
                  <svg version="1.1" id="fi_664866" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512.009 512.009" style="enable-background:new 0 0 512.009 512.009;" xml:space="preserve">
                    <g>
                      <path d="M508.625,247.801L508.625,247.801L392.262,131.437c-4.18-4.881-11.526-5.45-16.407-1.269
                        c-4.881,4.18-5.45,11.526-1.269,16.407c0.39,0.455,0.814,0.88,1.269,1.269l96.465,96.582H11.636C5.21,244.426,0,249.636,0,256.063
                        s5.21,11.636,11.636,11.636H472.32l-96.465,96.465c-4.881,4.18-5.45,11.526-1.269,16.407s11.526,5.45,16.407,1.269
                        c0.455-0.39,0.88-0.814,1.269-1.269l116.364-116.364C513.137,259.67,513.137,252.34,508.625,247.801z"></path>
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
          <img src="images/circle.png" alt="" class="dining_circle">
        </div>
      </div>
    </div>


    <!-- dining end -->

    <div class="clearfix"></div>

    <!-- =================================================== -->

    <!-- wedding start -->
     <div class="container">  
      <div class="row">
        <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12 img_bg" style="background-image: url(images/wedding.jpg); border-radius: 10px;">
        </div>
  
        <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12 py-5 ps-4">
          <p class="sub_heading"  data-aos="fade-up">
            Venues
          </p>
          <h2 data-aos="fade-down">
            Celebrate in Style
          </h2>
          <div class="des_div">
            <div class="read-more mb-3" style="--line-clamp: 8">
              <input id="read-more-venue" type="checkbox" class="read-more__checkbox" aria-hidden="true">
              <p class="read-more__text mb-2">At Goodwood Airport Hotel, we offer versatile event spaces that are perfect for both intimate gatherings and grand celebrations. Our conference and banquet hall, which seats up to 125 guests, is equipped with multimedia boards, sound systems, and all the necessary amenities to ensure your event runs smoothly.
                <br><br>
                We specialize in hosting a variety of events, including elegant weddings, professional conferences, meetings and vibrant outdoor gatherings. Our versatile venues are perfect for both formal and casual occasions, offering options to suit every need.
                <br><br>
                For outdoor celebrations, take advantage of our picturesque beer garden or the stunning poolside area. You will also appreciate the inclusion of a dedicated kids' pool, ensuring younger guests are entertained while you enjoy your event. Whether it’s an intimate meeting or a grand celebration, our dedicated team will ensure every detail is tailored to perfection.</p>
                <input id="read-more-venue" type="checkbox" class="read-more__checkbox shadow-none" aria-hidden="true">
                <label for="read-more-venue" class="read-more__label" data-read-more="Read more" data-read-less="See less" aria-hidden="true"></label>
            </div>

            <a href="wedding.html">
              <button class="arrow_btn">

                <span class="circle">
                  <span class="icon arrow">
                    <svg version="1.1" id="fi_664866" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512.009 512.009" style="enable-background:new 0 0 512.009 512.009;" xml:space="preserve">
                      <g>
                        <g>
                          <path d="M508.625,247.801L508.625,247.801L392.262,131.437c-4.18-4.881-11.526-5.45-16.407-1.269
                            c-4.881,4.18-5.45,11.526-1.269,16.407c0.39,0.455,0.814,0.88,1.269,1.269l96.465,96.582H11.636C5.21,244.426,0,249.636,0,256.063
                            s5.21,11.636,11.636,11.636H472.32l-96.465,96.465c-4.881,4.18-5.45,11.526-1.269,16.407s11.526,5.45,16.407,1.269
                            c0.455-0.39,0.88-0.814,1.269-1.269l116.364-116.364C513.137,259.67,513.137,252.34,508.625,247.801z"></path>
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
          <p class="sub_heading"  data-aos="fade-up">
            Location
          </p>
          <h2 data-aos="fade-down">
            Explore the Vibrant Surroundings
          </h2>
          <div class="des_div">
            <p>
              At Goodwood Airport Hotel, your stay is more than just comfort;it's an opportunity to explore, discover, and immerse yourself in the rich history and stunning landscapes of Negombo. Whether you're seeking adventure, relaxation, or cultural exploration, the surrounding attractions offer unforgettable experiences just minutes away.
            </p>
  
            <a href="location.html">
              <button class="arrow_btn">
  
                <span class="circle">
                  <span class="icon arrow">
                    <svg version="1.1" id="fi_664866" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512.009 512.009" style="enable-background:new 0 0 512.009 512.009;" xml:space="preserve">
                      <g>
                        <path d="M508.625,247.801L508.625,247.801L392.262,131.437c-4.18-4.881-11.526-5.45-16.407-1.269
                          c-4.881,4.18-5.45,11.526-1.269,16.407c0.39,0.455,0.814,0.88,1.269,1.269l96.465,96.582H11.636C5.21,244.426,0,249.636,0,256.063
                          s5.21,11.636,11.636,11.636H472.32l-96.465,96.465c-4.881,4.18-5.45,11.526-1.269,16.407s11.526,5.45,16.407,1.269
                          c0.455-0.39,0.88-0.814,1.269-1.269l116.364-116.364C513.137,259.67,513.137,252.34,508.625,247.801z"></path>
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
            
              <div class="item expe_card" style="background-image: url(images/exp_home_negombo1.jpg);">
                <div class="expe_box">
                  <h4 class="fw-bold">The Serene Negombo Beach</h4>
                  <p class="mt-2">Located just 15 minutes from Bandaranaike International Airport and a short drive from Goodwood Airport Hotel, Negombo Beach is a vibrant coastal expanse offering a blend...</p>
                
                  <button class="arrow_btn">
  
                    <span class="circle">
                      <span class="icon arrow">
                        <svg version="1.1" id="fi_664866" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512.009 512.009" style="enable-background:new 0 0 512.009 512.009;" xml:space="preserve">
                          <g>
                            <path d="M508.625,247.801L508.625,247.801L392.262,131.437c-4.18-4.881-11.526-5.45-16.407-1.269
                              c-4.881,4.18-5.45,11.526-1.269,16.407c0.39,0.455,0.814,0.88,1.269,1.269l96.465,96.582H11.636C5.21,244.426,0,249.636,0,256.063
                              s5.21,11.636,11.636,11.636H472.32l-96.465,96.465c-4.881,4.18-5.45,11.526-1.269,16.407s11.526,5.45,16.407,1.269
                              c0.455-0.39,0.88-0.814,1.269-1.269l116.364-116.364C513.137,259.67,513.137,252.34,508.625,247.801z"></path>
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
            
              <!-- ========================= -->

              <div class="item expe_card" style="background-image: url(images/exp_home_fort1.jpg);">
                <div class="expe_box">
                  <h4 class="fw-bold">The Negombo Dutch Fort</h4>
                  <p class="mt-2">Just a short distance from Goodwood Airport Hotel, the Negombo Dutch Fort is a must-visit destination for history enthusiasts. Originally built by the Portuguese...</p>
                
                  <button class="arrow_btn">
  
                    <span class="circle">
                      <span class="icon arrow">
                        <svg version="1.1" id="fi_664866" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512.009 512.009" style="enable-background:new 0 0 512.009 512.009;" xml:space="preserve">
                          <g>
                            <path d="M508.625,247.801L508.625,247.801L392.262,131.437c-4.18-4.881-11.526-5.45-16.407-1.269
                              c-4.881,4.18-5.45,11.526-1.269,16.407c0.39,0.455,0.814,0.88,1.269,1.269l96.465,96.582H11.636C5.21,244.426,0,249.636,0,256.063
                              s5.21,11.636,11.636,11.636H472.32l-96.465,96.465c-4.881,4.18-5.45,11.526-1.269,16.407s11.526,5.45,16.407,1.269
                              c0.455-0.39,0.88-0.814,1.269-1.269l116.364-116.364C513.137,259.67,513.137,252.34,508.625,247.801z"></path>
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
              
              <!-- ========================= -->

              <div class="item expe_card" style="background-image: url(images/exp_home_canal1.jpg);">
                <div class="expe_box">
                  <h4 class="fw-bold">Hamilton Canal ( Dutch Canal)</h4>
                  <p class="mt-2">Looking for a relaxing and unique experience during your stay at Goodwood Hotel? The Hamilton Canal, only a short distance away...
                  </p>

                  <button class="arrow_btn">
  
                    <span class="circle">
                      <span class="icon arrow">
                        <svg version="1.1" id="fi_664866" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512.009 512.009" style="enable-background:new 0 0 512.009 512.009;" xml:space="preserve">
                          <g>
                            <path d="M508.625,247.801L508.625,247.801L392.262,131.437c-4.18-4.881-11.526-5.45-16.407-1.269
                              c-4.881,4.18-5.45,11.526-1.269,16.407c0.39,0.455,0.814,0.88,1.269,1.269l96.465,96.582H11.636C5.21,244.426,0,249.636,0,256.063
                              s5.21,11.636,11.636,11.636H472.32l-96.465,96.465c-4.881,4.18-5.45,11.526-1.269,16.407s11.526,5.45,16.407,1.269
                              c0.455-0.39,0.88-0.814,1.269-1.269l116.364-116.364C513.137,259.67,513.137,252.34,508.625,247.801z"></path>
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
              
              <!-- ========================= -->

              <div class="item expe_card" style="background-image: url(images/exp_home_temple.jpg);">
                <div class="expe_box">
                  <h4 class="fw-bold">Angurukaramulla Temple</h4>
                  <p class="mt-2">Located just a short distance from our hotel, the Angurukaramulla Temple in Negombo offers you a unique opportunity to step into Sri Lanka's rich cultural and spiritual history...
                  </p>

                  <button class="arrow_btn">
  
                    <span class="circle">
                      <span class="icon arrow">
                        <svg version="1.1" id="fi_664866" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512.009 512.009" style="enable-background:new 0 0 512.009 512.009;" xml:space="preserve">
                          <g>
                            <path d="M508.625,247.801L508.625,247.801L392.262,131.437c-4.18-4.881-11.526-5.45-16.407-1.269
                              c-4.881,4.18-5.45,11.526-1.269,16.407c0.39,0.455,0.814,0.88,1.269,1.269l96.465,96.582H11.636C5.21,244.426,0,249.636,0,256.063
                              s5.21,11.636,11.636,11.636H472.32l-96.465,96.465c-4.881,4.18-5.45,11.526-1.269,16.407s11.526,5.45,16.407,1.269
                              c0.455-0.39,0.88-0.814,1.269-1.269l116.364-116.364C513.137,259.67,513.137,252.34,508.625,247.801z"></path>
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
              
              <!-- ========================= -->
            
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
              <p class="sub_heading"  data-aos="fade-up">
                Testimonials
              </p>
              <h2 class="text-light" data-aos="fade-down">
                What our customers says
              </h2>

              <!-- testi slider -->
              <div id="carouselExampleCaptions1" class="carousel slide" data-bs-ride="carousel" data-speed="0.95" style="position: relative; z-index: 1;">
                <div class="carousel-indicators" style="left: 0;">
                  <button type="button" data-bs-target="#carouselExampleCaptions1" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions1" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions1" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>

                <div class="carousel-inner">
                  <div class="carousel-item active testi_slide">
                    <div class="testi_caption">
                      <img src="images/testi_icon.png" alt="">
                      <p>Hotel is 5 minutes from the airport which made it incredibly handy for my late night flight.
                        The staff have been very friendly and accommodating. The room is spacious and was clean upon arrival. Need was comfy.
                        The restaurant staff, especially Sampath was very engaging and helpful to my specific dietary needs. His English was superb, no communication barrier.
                        The reception even allowed me to check out at 1pm which I'm grateful for.</p>
                      
                      <div class="d-flex justify-content-end mt-3">
                        <h4>Sohil</h4>
                      </div>
                    </div>
                  </div>

                  <!-- ====================== -->

                  <div class="carousel-item testi_slide">
                    <div class="testi_caption">
                      <img src="images/testi_icon.png" alt="">
                      <p>I had an inconvenience as the rooms were over booked due to major flight delays. The staff despite being under pressure were able to assure all guests a positive experience. When I got the room I found it to be super comfy and clean. Very close to the airport and overall a very good experience.</p>
                      
                      <div class="d-flex justify-content-end mt-3">
                        <h4>Abdul Wasay</h4>
                      </div>
                    </div>
                  </div>

                  <!-- ====================== -->

                  <div class="carousel-item testi_slide">
                    <div class="testi_caption">
                      <img src="images/testi_icon.png" alt="">
                      <p>We were greeted by friendly staff who were helpful and accommodating. Our flight home was changed to early evening and we were able to stay and use the outdoor pool area after checkout. Our large room was clean and comfortable and well sound proofed. We had a very comfortable stay</p>
                      
                      <div class="d-flex justify-content-end mt-3">
                        <h4>Gill T</h4>
                      </div>
                    </div>
                  </div>
                  
                </div>
              </div>
              <!-- testi slider -->

            </div>
          </div>

          <img src="images/circle.png" alt="" class="testi_circle">
        </div>
      </div>
    </div>

    <!-- Testimonials end -->

    <!-- ================================================== -->
    <!-- ================================================== -->
    <!-- ================================================== -->
    

    <!-- footer start -->

    <div class="container-fluid footer py-4">
      <div class="container">
        <div class="row">
          <div class="col-4 pe-4 footer_col">
            <a href="">
              <div class="footer_logo">
                <img src="images/logo.png" alt="" class="w-100">
              </div>
            </a>

            <p>Goodwood Airport Hotel offers the perfect blend of comfort and convenience, located just minutes from Bandaranaike International Airport and within easy reach of the vibrant heart of Sri Lanka, Colombo.</p>

          </div>

          <!-- ============ -->

          <div class="col-4 p-5 d-flex align-items-center justify-content-center row footer_col"> 
            <h4 class="text-light fw-bold mb-3">NAVIGATION</h4>

            <div class="row">
              <div class="col-6">
                <a href="index.html" class="footer_link">
                  Home
                </a>

                <a href="stay.html" class="footer_link">
                  Stay
                </a>

                <a href="dining.html" class="footer_link">
                      Dining
                    </a>

                <a href="wedding.html" class="footer_link">
                  Weddings
                </a>
              </div>

              <div class="col-6">
                <a href="gallery.html" class="footer_link">
                  Gallery
                </a>

                <a href="about_us.html" class="footer_link">
                  About Us
                </a>

                <a href="contact_us.html" class="footer_link">
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
              <h3 class="d-flex mb-3"><a href="" class="footer_cont">+94 112252356</a> &nbsp; / &nbsp; <a href="" class="footer_cont">+94 112252356</a></h3>

              <a href="" class="footer_link mb-1">
                Canada Friendship Road, Katunayake, Sri Lanka
              </a>

              <a href="" class="footer_link">
                info.goodwoodairporthotel@gmail.com
              </a>

              <div class="d-flex gap-3 mb-3">
                <a href="">
                  <p class="mb-0 footer_cont"><i class="fab fa-facebook-f"></i></p>
                </a>

                <a href="">
                  <p class="mb-0 footer_cont"><i class="fa-brands fa-x-twitter"></i></p>
                </a>

                <a href="">
                  <p class="mb-0 footer_cont"><i class="fa-brands fa-youtube"></i></p>
                </a>

                <a href="">
                  <p class="mb-0 footer_cont"><i class="fa-brands fa-instagram"></i></p>
                </a>
              </div>

              <a href="terms.html" class="footer_link mb-0" style="font-size: 12px;">
                Terms & condition 
              </a>

              <a href="privacy_policy.html" class="footer_link" style="font-size: 12px;">
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
          <p class="mb-0" style="font-size: 12px;"><i>Copyright © 2025 GOODWOOD. All rights reserved.</i></p>
        </div>

        <div class="col-6 text-end">
          <p class="mb-0" style="font-size: 12px;">Design & Developed by TekGeeks</p>
        </div>
      </div>
    </div>

    <!-- footer end -->

     


    <!-- ================================= -->
    <!-- ================================= -->
    <!-- ================================= -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js" ></script> 
    <script src="js/bootstrap.min.js" ></script>

    <script src="js/scroll_top.js"></script>
    <script src="js/scroll_top.js"></script>

    <!-- owl carousel -->
    <script src="owl/owl.carousel.min.js"></script>
    <script src="owl/owl_js.js"></script>
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
    <script src="js/aos.js"></script>

    <!-- date picker -->
    <script src='https://cdn.jsdelivr.net/npm/vanillajs-datepicker@1.1.4/dist/js/datepicker-full.min.js'></script>
    <script src="date_picker/date_picker.js"></script>
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

    <!-- gallery -->
    <script src="gallery/fancybox.min.js"></script>
    <!-- gallery -->

  </body>
</html>


