<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <meta name="description" content=""/>
    <link rel="canonical" href="" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="" />
    <meta property="og:description" content="" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="" />
    <meta name="og:image" content=""/>
    <meta name="twitter:card" content="" />
    <meta name="twitter:description" content="" />
    <meta name="twitter:title" content="" />

    <!-- Bootstrap CSS -->
    <link href="{{asset('public/frontend/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{asset('public/frontend/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/mediaquery.css')}}" rel="stylesheet">
    <!-- Custom CSS -->

    <title>goodwood</title>

    <!--favicon-->
    <link rel="shortcut icon" href="{{asset('public/frontend/images/favicon.png')}}" />
    <!--favicon-->

    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <!-- Add icon library -->

    <!-- owl carousel -->
    <link href="{{asset('public/frontend/owl/owl.carousel.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('public/frontend/owl/owl_css.css')}}">
    <!-- owl carousel -->

    <!-- Link Swiper's CSS -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" /> -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/css/swiper.min.css'><link rel="stylesheet" href="{{('public/frontend/css/style.css')}}">


    <!-- loading effect -->
    <link rel="stylesheet" href="{{asset('public/frontend/css/aos.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/css/loading_styles.css')}}">
    <!-- loading effect -->

    <!-- Fancybox CSS -->
    <link rel="stylesheet" href="{{asset('public/frontend/gallery/fancybox.min.css')}}">
    <!-- Fancybox CSS -->

    <!-- date picker -->
    <link rel='stylesheet' href='{{asset('public/frontend/date_picker/bootstrap-datepicker.min.css')}}'>
    <link src="{{asset('public/frontend/date_picker/date_picker.css')}}"></link>
    <!-- date picker -->

    <!--scroll bar style-->
    <style>

      ::-webkit-scrollbar {
        background: #000000;
        height: 5px;
        width: 5px;
      }

      ::-webkit-scrollbar-track {
        box-shadow: inset 0 0 2px #73A9AD;
      }

      ::-webkit-scrollbar-thumb {
        background: #73A9AD;
        border-radius: 2px;
      }

      ::-webkit-scrollbar-thumb:hover {
        background: #73A9AD; 
      }
    </style>
    <!--scroll bar style-->


  </head>
  <body>

    <!-- main slider start -->
    <div>

      <div class="paginacontainer">	
        <div class="progress-wrap">
          <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
          </svg>
        </div>
      </div>

     <div class="nav_bar">
      <div class="container-fluid position-relative nav_col">  
        <div class="align-items-center">
         
          <div class="row text-end">
          
            <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-12 col-sm-12 col-12">
              <a href="index.html">
                <img src="{{asset('public/frontend/images/logo_header.png')}}" alt="logo_header" class="header_logo">
              </a>
            </div>

            <!-- ================ -->

            <div class="col-xxl-10 col-xl-10 col-lg-10 col-md-12 col-sm-12 col-12 pe-4 d-none d-lg-flex justify-content-end align-items-center gap-4">
              
              <div>
                <div class="top_nav d-flex justify-content-end gap-4">
              
                  <a href="">
                    <p class="mb-0"><i class="fa-solid fa-phone me-2"></i> +94 11 2252 356 </p>
                  </a>
                  <!-- ======================= -->
                  <a href="">
                    <p class="mb-0"><i class="fa-regular fa-envelope me-2"></i>info.goodwoodairporthotel@gmail.com</p>
                  </a>
  
                  <div class="d-flex gap-3">
                    <a href="">
                      <p class="mb-0"><i class="fab fa-facebook-f"></i></p>
                    </a>
    
                    <a href="">
                      <p class="mb-0"><i class="fa-brands fa-x-twitter"></i></i></p>
                    </a>
    
                    <a href="">
                      <p class="mb-0"><i class="fa-brands fa-youtube"></i></p>
                    </a>
    
                    <a href="">
                      <p class="mb-0"><i class="fa-brands fa-instagram"></i></p>
                    </a>
                  </div>
                
                </div>
                
                <nav class="navbar navbar-expand-lg d-none d-lg-block pb-0">
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav">
                      <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="stay.html">Stay</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="dining.html">Dining </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="wedding.html">Weddings</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="gallery.html">Gallery</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="{{ route('about-us') }}">About Us</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="location.html">Location</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="experience.html">Experience</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link border-0" href="contact_us.html">Contact Us</a>
                      </li>
                    </ul>
                  </div>
                </nav>
              </div>

              <div>
                <a href="contact.html">
                  <button class="header_btn">
                    <span>
                    <i class="fa-solid fa-bell"></i>
                    BOOK NOW</span>
                  </button>
                </a>
              </div>

            </div>

          </div>
        </div>
        
      </div>
    </div>

    <!-- main slider end -->