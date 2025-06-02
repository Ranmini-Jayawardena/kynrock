 @include('frontend.includes.header')
 
 <div class="position-relative container-fluid inner_slider p-0">
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active inner_main_img" style="background-image: linear-gradient(to bottom, rgb(0 0 0 / 30%), rgb(0 0 0 / 30%)), url({{ asset('storage/app/' . $topBanner->banner_image) }});">
            <h1 class="text-center bottom-0 position-absolute w-100 text-light">{{ strtoupper($topBanner->heading) }}</h1>
          </div>
        </div>
      </div>
    </div>

    <!-- main slider end -->

    <!-- =================================================== -->
    <!-- =================================================== -->

    <!-- description start -->
    <div class="container sec_padding">
      <div class="row justify-content-center"> 

        @foreach($privacyPolicy as $policy)
        
        <div class="col-xxl-10 col-xl-10 col-lg-10 col-md-12 col-sm-12 col-12 mb-4">

          <h2 data-aos="fade-up">
            {{$policy->title}}
          </h2>

          <div class="des_div">
              <div class="mb-2">
                {!! $policy->description !!}            
              </div>
          </div>

        </div>
        @endforeach

        <!-- =============================== -->

        

        <div class="col-xxl-10 col-xl-10 col-lg-10 col-md-12 col-sm-12 col-12 mb-4">

          <h2 data-aos="fade-up">
            CONTACT US
          </h2>

          <div class="des_div">
              <p class="mb-2">
                If you have any questions or concerns about this Privacy Policy or our practices, please contact us at:
              </p>

              <p class="mb-2"><b>
                Goodwood Airport Hotel
              </b></p>

              <p class="d-flex mb-1"><b>Email:</b> &nbsp; <a href="mailto:{{$contactDetails->email}}">{{$contactDetails->email}}</a></p>
              <p class="d-flex mb-1"><b>Phone:</b> &nbsp; <a href="tel:{{$contactDetails->contact_no}}">{{$contactDetails->contact_no}}</a></p>
              <p class="d-flex mb-1"><b>Address:</b> &nbsp; <a href="{{$contactDetails->map}}" target="blank">{{$contactDetails->address}}</a></p>
          </div>

        </div>

        <!-- =============================== -->


      </div>
    </div>
    <!-- description end -->
    
    <div class="clearfix"></div>

    <!-- ================================================== -->
    <!-- ================================================== -->
    <!-- ================================================== -->
    @include('frontend.includes.footer')