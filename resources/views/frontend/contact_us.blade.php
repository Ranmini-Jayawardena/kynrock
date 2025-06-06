 @include('frontend.includes.header')

 <div class="position-relative container-fluid inner_slider p-0">
     <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
         <div class="carousel-inner">
             <div class="carousel-item active inner_main_img"
                 style="background-image: linear-gradient(to bottom, rgb(0 0 0 / 30%), rgb(0 0 0 / 30%)), url({{ asset('storage/app/' . $topBanner->banner_image) }})">
                 <h1 class="text-center bottom-0 position-absolute w-100 text-light">{{ $topBanner->heading }}</h1>
             </div>
         </div>
     </div>
 </div>

 <!-- main slider end -->

 <!-- =================================================== -->
 <!-- =================================================== -->

 <!-- description start -->
 <div class="container-fluid half_bg position-relative">
     <div class="container sec_padding">

         <div class="row justify-content-center">

             <div class="col-10">

                 <h2 data-aos="fade-up">
                     We’re Here to Assist You – Get in Touch with Us
                 </h2>

                 <div class="des_div">
                     <p class="mb-5">
                         Have questions or need assistance? We’re here to help! Whether you’re planning your stay, have
                         special requests, or just need more information, feel free to reach out. Our friendly team at
                         Goodwood Airport Hotel is ready to ensure your experience is seamless and memorable.
                     </p>
                 </div>


                 <div class="row">
                     <div class="col-4 mb-3">
                         <div class="d-flex gap-3 icon_div w_icon_box contact_box">
                             <div class="img_div">
                                 <img src="public/frontend/images/icons/call.png" alt="call">
                             </div>
                             @if (!empty($contactDetails->hotline) || !empty($contactDetails->contact_no))
                                 <div>
                                     <p class="mb-1">HOT LINE</p>

                                     <div class="d-flex align-items-center">
                                         @if (!empty($contactDetails->hotline))
                                             <h5 class="mb-0">

                                                 <a
                                                     href="tel: {{ $contactDetails->hotline }}">{{ $contactDetails->hotline }}</a>
                                             </h5>
                                         @endif
                                         @if (!empty($contactDetails->hotline) && !empty($contactDetails->contact_no))
                                             <span>&nbsp;/&nbsp;</span>
                                         @endif
                                         @if (!empty($contactDetails->contact_no))
                                             <h5 class="mb-0">
                                                 <a
                                                     href="tel:{{ $contactDetails->contact_no }}">{{ $contactDetails->contact_no }}</a>
                                             </h5>
                                         @endif
                                     </div>

                                 </div>
                             @endif
                         </div>
                     </div>

                     <!-- ================= -->

                     <div class="col-4 mb-3">
                         <div class="d-flex gap-3 icon_div w_icon_box contact_box">
                             <div class="img_div">
                                 <img src="public/frontend/images/icons/location.png" alt="location">
                             </div>
                             <div>
                                 <p class="mb-1">LOCATION</p>
                                 @if (!empty($contactDetails->address))
                                     <h5 class="mb-0">
                                         {{ $contactDetails->address }}
                                     </h5>
                                 @endif
                             </div>

                         </div>
                     </div>

                     <!-- ================= -->

                     <div class="col-4 mb-3">
                         <div class="d-flex gap-3 icon_div w_icon_box contact_box">
                             <div class="img_div">
                                 <img src="public/frontend/images/icons/email.png" alt="email">
                             </div>
                             <div>
                                 <p class="mb-1">EMAIL</p>
                                 @if (!empty($contactDetails->email))
                                     <h5 class="mb-0">
                                         <a href="mailto:{{ $contactDetails->email }}">{{ $contactDetails->email }}</a>
                                     </h5>
                                 @endif
                             </div>

                         </div>
                     </div>

                     <!-- ================= -->
                 </div>
             </div>

         </div>
     </div>

     <div class="col-2 position-absolute bottom-0 end-0" style="z-index: -1;">
         <img src="public/frontend/images/half_bg_img.png" alt="half_bg_img" class="w-100">
     </div>

 </div>

 <!-- description end -->

 <div class="clearfix"></div>

 <!-- map start -->

 <div class="container-fluid p-0">
     <iframe
         src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.6553535285034!2d79.87902237568223!3d7.1657813153650745!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2efce4203ce95%3A0x32d7236993d0ae94!2sGood%20Wood%20Airport%20Hotel!5e0!3m2!1sen!2slk!4v1745775318689!5m2!1sen!2slk"
         width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"
         referrerpolicy="no-referrer-when-downgrade"></iframe>
 </div>

 <!-- map end -->

 <!-- =================================================== -->

 <!-- contact form start -->

 <div class="container-fluid img_bg feat_sec mt-0"
     style="background-image: url({{ asset('storage/app/' . $bottomBanner->banner_image) }}); position: relative; z-index: -1;">
 </div>

 <div class="container">
     <div class="row justify-content-end">
         <div class="col-xxl-6 col-xl-6 col-lg-8 col-md-12 col-sm-12 col-12" data-speed="0.9">
             <div class="img_bg p-5 feat_text"
                 style="border-radius: 10px; background-image: url(public/frontend/images/feat_bg.jpg);">
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
 <!-- contact form end -->
