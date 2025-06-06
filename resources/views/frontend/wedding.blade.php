@include('frontend.includes.header')

<div class="position-relative container-fluid inner_slider p-0">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active inner_main_img"
                style="background-image: linear-gradient(to bottom, rgb(0 0 0 / 30%), rgb(0 0 0 / 30%)), url({{ asset('storage/app/' . $topBanner->banner_image) }})">
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
        <div class="row">
            <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12">
                <p class="sub_heading">
                    Weddings at Goodwood Airport Hotel
                </p>
                <h2 data-aos="fade-up">
                    {{ $weddingContent->title1 }}
                </h2>

                <div class="des_div">
                    <div class="mb-5">
                        {!! $weddingContent->description1 !!}
                    </div>
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
                <h2>{{ $weddingContent->title2 }}</h2>

                <div class="row">
                    @foreach ($hotelFeatures as $hotelFeature)
                        <div class="col-6 mb-3">
                            <div class="d-flex gap-3 icon_div">
                                <div class="img_div">
                                    <img src="{{ asset('storage/app/' . $hotelFeature->icon) }}" alt="wedding icon">
                                </div>
                                <div>
                                    <h5 class="mb-1">{{ $hotelFeature->feature_name }}</h5>
                                    <p>{{ $hotelFeature->description }}</p>
                                </div>

                            </div>
                        </div>
                    @endforeach



                </div>
            </div>
        </div>

        <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12 position-absolute end-0">
            <img src="{{ asset('storage/app/' . $weddingContent->image) }}" alt="wedding image"
                class="w-100 rounded-3 wedding_img">
        </div>

    </div>
</div>
<!-- description end -->

<div class="clearfix"></div>

<!-- =================================================== -->

<!-- wedding section start -->
<div class="container-fluide" style="margin-bottom: 80px;">
    <div class="row">
        <div class="img_bg p-5 col-6"
            style="background-image: url(public/frontend/images/feat_bg.jpg); height: fit-content;">
            <div class="row justify-content-end pt-4">
                <div class="col-10">
                    <h2 class="text-light" data-aos="fade-up">
                        {{ $weddingContent->wedding_venue_title }}
                    </h2>
                    <div class="des_div">
                        <h5 class="fw-bold text-light mb-2">{{ $weddingContent->wedding_venue_description1 }}</h5>
                        @php
                            use Illuminate\Support\Str;

                            $description = Str::of($weddingContent->wedding_venue_description2)->replace(
                                '<p',
                                '<p class="text-light"',
                            );
                        @endphp
                        <div class="text-light">
                            {!! $description !!}
                        </div>
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
                                                alt="">
                                        </div>
                                        <div>
                                            <h3 class="mb-1">{{ $weddingVenue->subCategory->sub_category_name }}</h3>
                                            {!! $weddingVenue->description !!}
                                            
                                            <button class="arrow_btn">
                                            <a href="{{ route('gallery') }}">
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
                                            </a>
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
                                            <h3 class="mb-1">{{ $weddingVenue->subCategory->sub_category_name }}</h3>
                                            {!! $weddingVenue->description !!}
                                             <a href="{{ route('gallery') }}">
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
                                        </a>
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

<!-- packages section start -->

<div class="container-fluid gray_left_bg position-relative" style="margin-bottom: 100px;">
    <div class="row position-relative" style="z-index: 4;">

        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mt-n3" data-speed="0.9">
            <div class="swiper custom">
                <div class="swiper-wrapper">
                    <div class="swiper-slide img_bg"
                        style="background-image: url({{ asset('storage/app/' . $weddingContent->wedding_package_image) }});">
                    </div>
                </div>

            </div>
        </div>

        <div class="col-xxl-6 col-xl-6 col-lg-8 col-md-12 col-sm-12 col-12 py-5">
            <h2 data-aos="fade-up" class="aos-init aos-animate">
                {{ $weddingContent->wedding_package_title }}
            </h2>
            <div class="des_div">
                {!! $weddingContent->wedding_package_description !!}

                <div class="accordion" id="accordionExample">
                    @foreach ($weddingPackages as $index => $weddingPackage)
                        @if ($index == 0)
                            <div class="accordion-item">
                                <h5 class="accordion-header" id="heading{{ $index }}">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse{{ $index }}" aria-expanded="true"
                                        aria-controls="collapse{{ $index }}">
                                        {{ $weddingPackage->package_name }}
                                    </button>
                                </h5>
                                <div id="collapse{{ $index }}" class="accordion-collapse collapse show"
                                    aria-labelledby="heading{{ $index }}" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        {!! $weddingPackage->description !!}
                                    </div>
                                </div>
                            </div>
                        @else
                            <div class="accordion-item">
                                <h5 class="accordion-header" id="heading{{ $index }}">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapse{{ $index }}"
                                        aria-expanded="false" aria-controls="collapse{{ $index }}">
                                        {{ $weddingPackage->package_name }}
                                    </button>
                                </h5>
                                <div id="collapse{{ $index }}" class="accordion-collapse collapse"
                                    aria-labelledby="heading{{ $index }}" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        {!! $weddingPackage->description !!}
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>

            </div>

        </div>
    </div>
    <div class="col-3 line_half_flower">
    <img src="public/frontend/images/line_flower.png" alt="" class="w-100" data-speed="0.9">
    </div>
</div>


<!-- packages section end -->

<div class="clearfix"></div>

<!-- =================================================== -->

<!-- culinary experience start -->

<div class="container" style="margin-bottom: 100px;">
    <div class="row mb-3">
        <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12">
            <h2 data-aos="fade-up" class="aos-init aos-animate">
                {{ $weddingContent->cultinary_title }}
            </h2>

            <div class="des_div">
                {!! $weddingContent->cultinary_description !!}
            </div>
        </div>
    </div>

    <div class="row">

        <h4>
            <b>
                DINING HIGHLIGHTS
            </b>
        </h4>
        @foreach ($diningFeatures as $diningFeature)
            <div class="col-3 mb-3">
                <div class="d-flex gap-3 icon_div w_icon_box">
                    <div class="img_div">
                        <img src="{{ asset('storage/app/' . $diningFeature->icon) }}" alt="">
                    </div>
                    <div>
                        <h5 class="mb-1">{{ $diningFeature->feature_name }}</h5>
                        <p class="mb-0">{{ $diningFeature->description }}</p>
                    </div>

                </div>
            </div>
        @endforeach



        <h4 class="fw-bold fst-italic">
            From appetizers to the wedding cake, every dish is made with love!
        </h4>

    </div>
</div>

<!-- culinary experience end -->

<div class="clearfix"></div>

<!-- =================================================== -->

<!--  Services section start -->

<div class="container-fluid gray_left_bg position-relative" style="margin-bottom: 100px;">
    <div class="row position-relative" style="z-index: 4;">

        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mt-n3" data-speed="0.9">
            <div class="swiper custom">
                <div class="swiper-wrapper">
                    <div class="swiper-slide img_bg"
                        style="background-image: url({{ asset('storage/app/' . $weddingContent->services_image) }});">
                    </div>
                </div>

            </div>
        </div>

        <div class="col-xxl-6 col-xl-6 col-lg-8 col-md-12 col-sm-12 col-12 py-5">
            <h2 data-aos="fade-up" class="aos-init aos-animate">
                {{ $weddingContent->services_title }}
            </h2>
            <div class="des_div">
                {!! $weddingContent->services_description !!}

                <div class="accordion" id="accordionExample2">
                    @foreach ($services as $index => $service)
                        @if ($index == 0)
                            <div class="accordion-item">
                                <h5 class="accordion-header" id="heading{{ $index }}">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse{{ $index }}" aria-expanded="true"
                                        aria-controls="collapse{{ $index }}">
                                        {{ $service->service_name }}
                                    </button>
                                </h5>

                                <div id="collapse{{ $index }}" class="accordion-collapse collapse show"
                                    aria-labelledby="heading{{ $index }}" data-bs-parent="#accordionExample2">
                                    <div class="accordion-body">
                                        {!! $service->description !!}

                                    </div>
                                </div>
                            </div>
                        @else
                            <div class="accordion-item">
                                <h5 class="accordion-header" id="heading{{ $index }}">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapse{{ $index }}"
                                        aria-expanded="false" aria-controls="collapse{{ $index }}">
                                        {{ $service->service_name }}
                                    </button>
                                </h5>
                                <div id="collapse{{ $index }}" class="accordion-collapse collapse"
                                    aria-labelledby="heading{{ $index }}" data-bs-parent="#accordionExample2">
                                    <div class="accordion-body">
                                        {!! $service->description !!}

                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>

        </div>
    </div>



    <div iv class="col-3 line_half_flower">
    <img src="public/frontend/images/line_flower.png" alt="" class="w-100" data-speed="0.9">
    </div>
</div>

<!--  Services section end -->

<div class="clearfix"></div>

<!-- =================================================== -->

<!-- Plan wedding section start -->

<div class="container">
    <div class="row mb-3 justify-content-center">
        <div class="col-xxl-10 col-xl-10 col-lg-10 col-md-12 col-sm-12 col-12">
            <h2 data-aos="fade-up" class="aos-init aos-animate">
                {{ $weddingContent->plan_wedding_title }}
            </h2>

            <div class="des_div">
                {!! $weddingContent->plan_wedding_description !!}
            </div>
        </div>
    </div>

    <div class="row justify-content-center">

        <div class="col-10">
            <div class="row">
                @foreach ($weddingHotelFeatures as $weddingHotelFeature)
                    <div class="col-4 mb-3">
                        <div class="d-flex gap-3 icon_div w_icon_box">
                            <div class="img_div">
                                <img src="{{ asset('storage/app/' . $weddingHotelFeature->icon) }}" alt="icon">
                            </div>
                            <div>
                                <h5 class="mb-1">{{ $weddingHotelFeature->feature_name }}</h5>
                                <p class="mb-0">{{ $weddingHotelFeature->description }}</p>
                            </div>

                        </div>
                    </div>
                @endforeach



            </div>
        </div>

    </div>
</div>

<!-- Plan wedding section end -->

<div class="clearfix"></div>

<!-- =================================================== -->

<!-- contact form start -->

<div class="container-fluid img_bg wedding_contact"
    style="background-image: url({{ asset('storage/app/' . $bottomBanner->banner_image) }});">
</div>

<div class="container">
    <div class="row justify-content-end">
        <div class="col-xxl-6 col-xl-6 col-lg-8 col-md-12 col-sm-12 col-12">
            <div class="img_bg p-5 wedding_contact_form"
                style="background-image: url(public/frontend/images/feat_bg.jpg);">
                <h2 class="text-light" data-aos="fade-up">
                    Get in touch with us
                </h2>
                <div class="des_div  ps-0">
                    <p class="mb-2 text-light">
                        Contact us today to schedule a venue tour, discuss your wedding package, or start planning your
                        special day.
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
                                         placeholder="Mobile Number" required pattern="^\+?[0-9]{7,15}$"
                                         onkeypress="return isNumberKey(event)"
                                         oninput="this.value = this.value.replace(/[^0-9+]/g, '').replace(/(?!^)\+/g, '').slice(0, 15); this.setCustomValidity('')"
                                         oninvalid="this.setCustomValidity('Enter a valid number')">
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

<script>
function isNumberKey(evt) {
    const charCode = evt.which ? evt.which : evt.keyCode;
    const charStr = String.fromCharCode(charCode);

    // Allow only one '+' at the beginning and digits
    if (charStr === '+' && evt.target.selectionStart === 0 && !evt.target.value.includes('+')) {
        return true;
    }

    return /[0-9]/.test(charStr);
}
</script>




<!-- ================================================== -->
<!-- ================================================== -->
<!-- ================================================== -->
